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
}
