<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
        return [
            'title_id' => 'required',
            'first_name' => 'required|string|between:2,255',
            'last_name' => 'required|string|between:2,255',
            'email' => 'required|email|unique:users|max:255',
            "phone" => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            "mobile_phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            "birthdate"=>'required'
        ];
    }
    public function messages(){
        return [

            'first_name.required'=>'Please enter a name',
            'first_name.string'=>'This name is a bit strange. Can you do this correctly',
            'first_name.between'=>'The name must be between 2 and 255 characters',
            'last_name.required'=>'Please enter a name',
            'last_name.string'=>'This name is a bit strange. Can you do this correctly',
            'last_nam.between'=>'The name must be between 2 and 255 characters',
            'email.required'=> 'Please enter an email address',
            'email.email'=> 'This email is a bit strange. Can you do this correctly',
            'email.unique'=> 'Oh it looks like you ar already registered ',
            'email.max'=> 'This email address is way too long',
            'password.required'=> 'This password is required',
            'phone.regex'=> 'This is not a valid number',
            'phone.min'=> 'This is not a valid number',
            'mobile_phone.regex'=> 'This is not a valid number',
            'mobile_phone.min'=> 'This is not a valid number',
            'mobile_phone.required'=> 'Please enter a phone number',
        ];
    }
}
