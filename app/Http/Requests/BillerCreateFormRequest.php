<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\JsonFormRequest;

use Illuminate\Support\Facades\Auth;

class BillerCreateFormRequest extends JsonFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'billerName' => 'required',
            'billerCode' => 'required',
            'billerDescription' => 'required'
        ];
    }
}
