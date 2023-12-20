<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEverlasThingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'seri' => 'required|string',
            'nama_produk' => 'required|string',
            'jenis_1' => 'required|string',
            'jenis_2' => 'required|string',
            'satuan' => 'required|string',
            'warna' => 'required|string',
            'dimensi' => 'nullable|string',
            'garansi' => 'nullable|string',
            'material_pendukung' => 'required|string|max:255',
            'finishing' => 'required|string|max:255',
            'photos' => 'nullable|array',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|url',
            'deskripsi_singkat' => 'required|string',
            'stok' => 'required|integer',
            'item_terjual' => 'nullable|integer',
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
