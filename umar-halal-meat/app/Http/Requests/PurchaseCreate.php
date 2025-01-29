<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseCreate extends FormRequest
{
    public function rules(): array
    {
        return [
            'magna'        => ['required', 'numeric', 'min:0'],
            'hikmat'       => ['required', 'numeric', 'min:0'],
            'primer'       => ['required', 'numeric', 'min:0'],
            'jaan'         => ['required', 'numeric', 'min:0'],
            'adam'         => ['required', 'numeric', 'min:0'],
            'miscellanous' => ['required', 'numeric', 'min:0'],
            'date'         => ['required', 'date', 'unique:purchases,date'],
        ];
    }
}
