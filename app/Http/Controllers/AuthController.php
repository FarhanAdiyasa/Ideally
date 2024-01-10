<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    function index() {
        return view('sesi.index');
    }


    function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Mendapatkan data pengguna dari Google setelah otorisasi berhasil
        $googleUser = Socialite::driver('google')->user();

        // Memeriksa apakah email pengguna sudah ada dalam tabel 'users'
        $user = User::where('email', $googleUser->getEmail())->first();

        // Jika email sudah ada dalam tabel 'users', login pengguna
        if ($user) {
            Auth::login($user);
            $user = Auth::user();
            session(['user_info' => $user]); // Melakukan login pengguna
            return redirect()->route('deflo.utama'); // Mengarahkan ke halaman yang sesuai setelah login
        } else {
            // Jika email belum ada dalam tabel 'users', Anda dapat menambahkan logika lainnya di sini,
            // misalnya, menampilkan pesan bahwa pengguna belum terdaftar atau membuat akun baru
            // atau bisa juga otomatis membuat akun baru menggunakan informasi dari Google
            return redirect()->route('login')->with('error', 'Email belum terdaftar.');
        }
    }

    // function callback() {
    //     $user = Socialite::driver('google')->user();
    //     dd($user);
    //     $id = $user->user_id;
    //     $email = $user->email;
    //     $name = $user->name;
    
    //     $cek = User::where('email', $email)->count();
    
    //     if ($cek > 0) {
    //         $user = User::updateOrCreate(
    //             ['email' => $email],
    //             [
    //                 'name' => $name,
    //                 'google_id' => $id
    //             ]
    //         );
    //         Auth::login($user);
    //         return redirect()->to('/batunesia/index');
    //     } else {
    //         return redirect()->to('/auth/register')->with('email', $email);
    //     }
    // }

    function dashboard() {
        return redirect()->route('deflo.utama');
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->to('auth/login');
    }

    function register(Request $request) {
        $email = $request->input('email', ''); // Mengambil email dari parameter, jika ada
        return view('sesi/register', ['email' => $email]);
    }

    function create(userRequest $request) {

        $inputData = $request->validated();
        $user = User::create($request->all());
    
        if ($user) {
            event(new Registered($user));
    
            // Kirim email verifikasi
            $user->sendEmailVerificationNotification();
    
            auth()->login($user);
            return redirect()->route('verification.notice')->with('success','Akun berhasil dibuat, silahkan verifikasi email Anda');
        }
    
        // Jika terjadi kesalahan dalam pembuatan user, mungkin Anda ingin menambahkan penanganan kesalahan khusus di sini
        return redirect()->back()->with('error', 'Gagal membuat pengguna, coba lagi nanti')->withInput($inputData);
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            // Autentikasi berhasil
            $user = Auth::user();
            session(['user_info' => $user]);
            return redirect()->route('deflo.utama');
            // Redirect ke halaman 'dashboard' dengan pesan keberhasilan
        } else {
            // Autentikasi gagal
            return redirect('auth/login')->with('error', 'Email atau Password salah!');
            // Redirect kembali ke halaman 'auth' dengan pesan kesalahan
        }
    
    }

    public function forgetPassword() {
            return view('sesi/forget-password');
    }

    public function forgetPasswordPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::where('email', $request->email)->first();
        $token = Str::random(64);
    
        // Simpan token reset password
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => Carbon::now()]
        );
    
        // Kirim email reset password
        Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Reset Password');
        });
    
        return redirect()->route('forget.password')->with('success', 'Kami telah mengirim email untuk mereset password Anda');
    }

    public function resetPassword($token){
        return view('sesi/new-password', compact('token'));
    }

    public function testing(){
         return view('sesi.dashboard');
    }

    // Fungsi untuk mereset password
    public function resetPasswordPost(Request $request)
    {
        try {
            $validatedData = $request->validate([
                "token" => "required",
                "password" => "required|string|min:6|confirmed",
            ], [
                'token.required' => 'Token is required.',
                'password.required' => 'Password is required.',
                'password.string' => 'Password must be a string.',
                'password.min' => 'Password must be at least 6 characters.',
                'password.confirmed' => 'Password confirmation does not match.',
            ]);
        
            $token = $validatedData['token'];
        
            $updatePassword = DB::table('password_resets')
                ->where('token', $token)
                ->first();
        
            if (!$updatePassword) {
                return redirect()->route("reset.password")->with("error", "Invalid token or expired link.");
            }
        
            $user = User::where('email', $updatePassword->email)->first();
        
            if (!$user) {
                return redirect()->route("reset.password")->with("error", "User not found.");
            }
        
            $user->password = Hash::make($validatedData['password']);
            $user->save();
        
            DB::table('password_resets')
                ->where('email', $user->email)
                ->delete();
        
                return redirect()->route("login")->with("success", "Password reset successful, please log in.");
            } catch (ValidationException $e) {
                return redirect()->route("reset.password", ['token' => $request->token])
                    ->with("error", $e->getMessage())
                    ->withInput();
            } catch (\Exception $e) {
                return redirect()->route("reset.password", ['token' => $request->token])
                    ->with("error", $e->getMessage());
            }
    }


}