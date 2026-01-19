<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company_name'   => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email',
            'password'       => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
            'accept_terms'   => 'accepted',
            'phone'          => 'nullable|string',
            'job_title'      => 'nullable|string',
        ];
    }

    public function errorBag(): string
    {
        return 'company';
    }
}
