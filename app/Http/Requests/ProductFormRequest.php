<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'category_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'integer',
            ],
            'slug' => [
                'required',
                'string',
                'max:225'
            ],
            'name' => [
                'required',
                'integer',
            ],
            'small_description' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'original_price' => [
                'required',
                'integer',
            ],
            'selling_price' => [
                'required',
                'integer',
            ],
            'quantity' => [
                'required',
                'integer',
            ],
            'trending' => [
                'required',
                'integer',
            ],
            'status' => [
                'required',
                'integer',
            ],
            'meta_title' => [
                'required',
                'string',
                'max:225'
            ],
            'meta_keyword' => [
                'required',
                'string',
            ],
            'meta_description' => [
                'required',
                'string',
            ],
        ];
    }
}
