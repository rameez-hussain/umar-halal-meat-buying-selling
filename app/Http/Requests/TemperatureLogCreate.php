<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemperatureLogCreate extends FormRequest
{
    public function rules(): array
    {
        return [
            'temperature' => ['required', 'numeric', 'between:-22,4'],
            'unit'        => ['required', 'string'],
            'done_by'     => ['required', 'string'],
        ];
    }
}
