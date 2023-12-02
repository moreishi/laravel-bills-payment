<?php

namespace App\Http\Requests;

use App\Http\Requests\JsonFormRequest;
use Illuminate\Support\Facades\Auth;

class ProductCreateRequest extends JsonFormRequest
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
            'name' => 'string|required',
            'description' => 'string',
            'price' => 'required',
            'quantity' => 'required',
            'taxCategory' => 'required',
            'imageUrl' => 'string'
        ];
    }
}
