<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseCreate extends FormRequest
{
    public function rules(): array
    {
        return [
            'magna'         => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'hikmat'        => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'primer'        => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'jaan'          => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'adam'          => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'miscellaneous' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{2})?$/'],
            'date'          => ['required', 'date', 'unique:purchases,date'],
        ];
    }
}
