<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'               => ['required', 'string', 'max:255'],
            'product_features'   => 'nullable|array',
            'product_features.*' => 'string|max:255',
            'price'              => ['required', 'numeric', 'min:0'],
            'description'        => ['nullable', 'string', 'max:1000'],
            'image'              => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'], // 2MB max
            'images'             => 'nullable|array',
            'images.*'           => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category_id'        => ['nullable', 'exists:categories,id'],
            'brand_id'           => ['nullable', 'exists:brands,id'],
            'is_active'          => ['required', 'boolean'],
        ];
    }

}
