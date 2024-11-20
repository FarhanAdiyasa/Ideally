<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KonkuritoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_produk' => 'required|string',
            'jenis' => 'required|string',
            'satuan' => 'required|string',
            'garansi' => 'required|string',
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tebal' => 'required|numeric',
            'diameter' => 'required|numeric',
            'warna_1' => 'required|string|max:255',
            'warna_2' => 'nullable|string|max:255',
            'photos' => 'required|array',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|url',
            'deskripsi_singkat' => 'required|string',
            'stok' => 'required|integer',
            'berat_gram' => 'required|integer',
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
