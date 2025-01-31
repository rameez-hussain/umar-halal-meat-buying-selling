<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleCreate extends FormRequest
{
    public function rules(): array
    {
        return [
            'cash' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'card' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'date' => ['required', 'date', 'unique:sales,date'],
        ];
    }
}
