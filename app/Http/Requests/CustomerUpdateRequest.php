<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
//        dd($this->customer);
        return  [
            "password" => "nullable|min:8",
            'first_name' => 'required|string|between:2,255',
            'last_name' => 'required|string|between:2,255',
            "email" => "required |email",
            "phone" => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            "mobile_phone" => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];
    }
    public function messages(){
        return [

            "password.min" => "Please enter a safer password",
            'first_name.string'=>'This name is a bit strange. Can you do this correctly',
            'first_name.between'=>'The name must be between 2 and 255 characters',
            "email.email" => "Please enter a valid email adres",
            "phone" => "Please enter a valid phone number",
            "mobile_phone" => "Please enter a valid phone number",
        ];
    }
}
