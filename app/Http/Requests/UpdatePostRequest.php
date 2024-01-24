<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'fio'       => ['required', 'string'],
            'tel'       => ['required', 'integer'],
            'email'     => ['required', 'email', 'unique:talabas'],
            'yosh'      => ['required', 'integer'],
            'manzil'    => ['required'],
            'image'     => ['nullable', 'image'],
        ];
    }
}
