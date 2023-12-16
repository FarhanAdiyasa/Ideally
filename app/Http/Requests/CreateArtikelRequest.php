<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can customize the authorization logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_artikel' => 'required|string|max:255',
            'deskripsi_artikel' => 'required|string',
            'isi_artikel' => 'required|string',
            'penulis_artikel' => 'required|string|max:255',
            'gambar_artikel' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan_gambar_artikel' => 'nullable|string',
            'keywords' => 'nullable|string',
            'author' => 'required|string',
        ];
    }
    public function withValidator($validator)
    {
        $validator->sometimes('penulis_artikel', 'required', function ($input) {
            return $input->author == 'lain';
        });
        $validator->sometimes('profesi_penulis_artikel', 'required', function ($input) {
            return $input->author == 'lain';
        });
        $validator->sometimes('deskripsi_singkat_penulis_artikel', 'required', function ($input) {
            return $input->author == 'lain';
        });
    }
}
