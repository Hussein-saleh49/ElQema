<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'description'        => ['nullable', 'string', 'max:2000'],
            'price'              => ['required', 'numeric', 'min:0'],
            'image'              => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif,webp', 'max:2048'], // 2MB
            'images'             => 'nullable|array',       
            'images.*'           => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category_id'        => ['nullable', 'exists:categories,id'],
            'brand_id'           => ['nullable', 'exists:brands,id'],
            'is_active'          => ['required', 'boolean'],
        ];
    }

}
