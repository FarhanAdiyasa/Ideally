<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'telephone_number' => 'required|digits_between:10,13',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'password' => 'required|min:8',
            'profesi' => 'required',
            'gender' => 'required',
            'birthdate' => 'required|date|before_or_equal:today',
        ];
    }

    public function messages(): array
    {
        return [
            'firstname.required' => 'Kolom nama depan harus diisi.',
            'lastname.required' => 'Kolom nama belakang harus diisi.',
            'email.required' => 'Kolom email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'telephone_number.required' => 'Kolom nomor Ponsel harus diisi.',
            'telephone_number.digits_between' => 'Nomor Ponsel harus memiliki panjang antara 10 dan 13 digit.',
            'provinsi.required' => 'Kolom provinsi harus diisi.',
            'kabupaten.required' => 'Kolom kabupaten harus diisi.',
            'kelurahan.required' => 'Kolom kelurahan harus diisi.',
            'kecamatan.required' => 'Kolom kecamatan harus diisi.',
            'password.required' => 'Kolom password harus diisi.',
            'password.min' => 'Password minimal harus 8 karakter.',
            'profesi.required' => 'Kolom pekerjaan harus diisi.',
            'gender.required' => 'Kolom jenis kelamin harus diisi.',
            'birthdate.required' => 'Kolom tanggal lahir harus diisi.',
            'birthdate.date' => 'Format tanggal lahir tidak valid.',
            'birthdate.before_or_equal' => 'Tanggal lahir tidak boleh lebih dari hari ini.',
        ];
    }
}
