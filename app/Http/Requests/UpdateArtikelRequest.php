<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtikelRequest extends FormRequest
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
            'judul_artikel' => 'required|string|max:255',
            'deskripsi_artikel' => 'required|string',
            'isi_artikel' => 'required|string',
            'keterangan_gambar_artikel' => 'nullable|string',
            'keywords' => 'nullable|string',
            'kategori_artikel' => 'required|array',
            'author' => 'required|string',
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('penulis_artikel', 'required', function ($input) {
            return $input->author == "lain";
        });
        $validator->sometimes('profesi_penulis_artikel', 'required', function ($input) {
            return $input->author == "lain";
        });
        $validator->sometimes('deskripsi_singkat_penulis_artikel', 'required', function ($input) {
            return $input->author == "lain";
        });
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
            
            'keterangan_gambar_artikel.string' => 'Keterangan gambar harus berupa teks.',
            
            'keywords.string' => 'Keywords harus berupa teks.',
            
            'kategori_artikel.required' => 'Kategori artikel wajib dipilih.',
            'kategori_artikel.array' => 'Kategori artikel harus berupa array.',
            
            'author.required' => 'Nama penulis wajib diisi.',
            'author.string' => 'Nama penulis harus berupa teks.',
            
            'penulis_artikel.required' => 'Nama penulis artikel wajib diisi.',
            
            'profesi_penulis_artikel.required' => 'Profesi penulis artikel wajib diisi.',
            
            'deskripsi_singkat_penulis_artikel.required' => 'Deskripsi singkat penulis artikel wajib diisi.',
        ];
    }
}
