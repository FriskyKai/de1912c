<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'partner_type_id' => 'required|integer|exists:partner_types,id',
            'name' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'inn' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:10',
        ];
    }
}
