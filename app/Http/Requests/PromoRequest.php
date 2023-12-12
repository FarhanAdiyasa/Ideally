<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // You can customize the authorization logic here
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_promo' => 'required|string|max:255',
            'jenis_promo' => 'required|string|max:255',
            'target_promo_b2i' => 'nullable|string|max:255',
            'target_promo_b2c' => 'nullable|string|max:255',
            'target_promo_b2b' => 'nullable|string|max:255',
            'tipe_promo' => 'required|string|max:255',
            'tipe_potongan' => 'required|string|max:255',
            'persentase_promo' => 'nullable|numeric',
            'nominal_promo' => 'required|numeric',
            'minimum_pembelian' => 'required|numeric',
            'kuota' => 'required|integer',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ];
    }
}
