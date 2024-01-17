<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShineageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'seri' => 'required|string|max:255',
            'nama_produk' => 'required|string',
            'jenis' => 'required|string|max:255',
            'garansi' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            //'dimensi' => 'required|string|max:255',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'diameter' => 'required|numeric',
            'material_pendukung' => 'required|string|max:255',
            'finishing' => 'required|string|max:255',
            'photos' => 'required|array',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|url',
            'deskripsi_singkat' => 'required|string',
            'stok' => 'required|integer',
            'berat' => 'required|integer',
            'armada_minimum' => 'required|string',
            'harga_jual_projek_ideally' => 'required|numeric',
            'harga_b2I_11_unit' => 'required|numeric',
            'harga_b2I_1_unit' => 'required|numeric',
            'harga_b2B_11_unit' => 'required|numeric',
            'harga_b2B_1_unit' => 'required|numeric',
            'harga_b2C_11_unit' => 'required|numeric',
            'harga_b2C_1_unit' => 'required|numeric',
        ];
    }
}
