<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndividualRegisterRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email',
            'password'     => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
            'dob_day'      => 'required|integer|min:1|max:31',
            'dob_month'    => 'required|integer|min:1|max:12',
            'dob_year'     => 'required|integer|min:1900|max:' . date('Y'),
            'gender'       => 'nullable|in:male,female',
            'accept_terms' => 'accepted',
            'phone'        => 'nullable|string',
        ];
    }


    public function errorBag(): string
    {
        return 'individual';
    }
}
