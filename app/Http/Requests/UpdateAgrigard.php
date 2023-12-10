<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgrigard extends FormRequest
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
            'kategori' => 'required|string',
            'nama_produk' => 'required|string',
            'spesifikasi' => 'required|string',
            'satuan' => 'required|string',
            'existing_images' => 'required|string',
            'video' => 'nullable|url',
            'deskripsi_singkat' => 'required|string',
            'stok' => 'required|integer',
            'item_terjual' => 'nullable|integer',
            'harga_b2I_31_unit' => 'required|numeric',
            'harga_b2I_11_unit' => 'required|numeric',
            'harga_b2I_1_unit' => 'required|numeric',
            'harga_b2B_31_unit' => 'required|numeric',
            'harga_b2B_11_unit' => 'required|numeric',
            'harga_b2B_1_unit' => 'required|numeric',
            'harga_b2C_31_unit' => 'required|numeric',
            'harga_b2C_11_unit' => 'required|numeric',
            'harga_b2C_1_unit' => 'required|numeric',
        ];
    }
}
