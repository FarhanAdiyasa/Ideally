<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class verificationController extends Controller
{
    public function notice(){
        return "Mohon untuk melakukan verifikasi terlebih dahulu";
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        if ($request->user()->hasVerifiedEmail()) {
            // Jika email sudah diverifikasi, dapatkan ID pengguna
            $userId = $request->user()->user_id;

            // Redirect ke halaman deflo.index setelah verifikasi berhasil
            return redirect()->route('deflo.utama')->with('success', 'Email successfully verified.');
        }
        // Jika email belum diverifikasi, arahkan pengguna ke halaman lain atau tindakan yang sesuai
        return redirect()->route('home')->with('error', 'Email has not been verified.');
    }

    


}
