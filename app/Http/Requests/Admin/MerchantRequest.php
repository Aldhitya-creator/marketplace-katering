<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MerchantRequest extends FormRequest
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
        'nama_katering' => 'required',
        'alamat' => 'required',
        'kontak' => 'required|integer',
        'deskripsi' => 'required',
        'logo' => 'image','mimes:jpeg,png,jpg,gif','max:500'
        ];
    }
}
