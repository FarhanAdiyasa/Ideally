<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DedikasiFloraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_latin' => 'required|string',
            'nama_lokal' => 'required|string',
            'spesifikasi' => 'required|string',
            'satuan' => 'required|string',
            'diameter_tajuk' => 'required|integer',
            'strata' => 'required|string',
            'warna_daun_1' => 'required|string',
            'warna_daun_2' => 'required|string',
            'warna_bunga_1' => 'required|string',
            'warna_bunga_2' => 'required|string',
            'penyiraman' => 'required|string',
            'penyinaran' => 'required|string',
            'pemupukan' => 'required|string',
            'photos' => 'required|array',
            'photos.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|url',
            'deskripsi_singkat' => 'required|string',
            'stok' => 'required|integer',
            'berat_gram' => 'required|integer',
            'armada_minimum' => 'required|string',
            'harga_jual_projek_ideally' => 'required|numeric',
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
