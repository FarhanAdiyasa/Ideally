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
            'judul_artikel' => 'required|string|max:70',
            'deskripsi_artikel' => 'required|string',
            'isi_artikel' => 'required|string',
            'gambar_artikel' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan_gambar_artikel' => 'nullable|string',
            'keywords' => 'nullable|string',
            'author' => 'required|string',
        ];
    }
    
    public function messages()
    {
        return [
            'judul_artikel.required' => 'Judul artikel wajib diisi.',
            'judul_artikel.string' => 'Judul artikel harus berupa teks.',
            'judul_artikel.max' => 'Judul artikel tidak boleh lebih dari :max karakter.',
            
            'deskripsi_artikel.required' => 'Deskripsi artikel wajib diisi.',
            'deskripsi_artikel.string' => 'Deskripsi artikel harus berupa teks.',
            
            'isi_artikel.required' => 'Isi artikel wajib diisi.',
            'isi_artikel.string' => 'Isi artikel harus berupa teks.',
            
            'gambar_artikel.required' => 'Gambar artikel wajib diunggah.',
            'gambar_artikel.image' => 'File yang diunggah harus berupa gambar.',
            'gambar_artikel.mimes' => 'Format gambar yang diizinkan adalah jpeg, png, jpg.',
            'gambar_artikel.max' => 'Ukuran gambar tidak boleh lebih dari :max kilobita.',
            
            'keterangan_gambar_artikel.string' => 'Keterangan gambar harus berupa teks.',
            
            'keywords.string' => 'Keywords harus berupa teks.',
            
            'author.required' => 'Nama penulis wajib diisi.',
            'author.string' => 'Nama penulis harus berupa teks.',
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
