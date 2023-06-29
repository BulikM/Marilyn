<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return  [
            "password" => "required|min:8",
            'first_name' => 'nullable|string|between:2,255',
            'last_name' => 'nullable|string|between:2,255',
            "email" => "required |email | unique:users",
            "phone" => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            "mobile_phone" =>
                'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        ];
    }
    public function messages(){
        return [

            "password.required" => "Please enter a password",
            'first_name.string'=>'This name is a bit strange. Can you do this correctly',
            'first_name.between'=>'The name must be between 2 and 255 characters',
            "email.email" => "Please enter a valid email adres",
            "phone" => "Please enter a valid phone number",
            "mobile_phone" => "Please enter a valid phone number",
        ];
    }
}
