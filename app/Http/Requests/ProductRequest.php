<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permite que cualquier usuario haga la petición
    }

    public function rules(): array
    {
        return [
            "title"       => "required|string|max:255",
            "description" => "nullable|string",
            "category"    => "required|string|max:100",
            "image"       => "nullable|string|max:255",
            "brand"       => "required|string|max:100",
            "price"       => "required|numeric|min:0|max:999999.99",
            "stock"       => "required|integer|min:0"
        ];
    }
}
