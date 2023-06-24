<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'first_name'=> 'required|string|between:2,255',
            'last_name'=> 'required|string|between:2,255',
            'address'=> 'required|string|between:2,255',
            'city'=> 'required|string|between:2,255',
            'zipcode'=> 'required|string|between:2,255',
            'province'=> 'required|string|between:2,255',
            'country'=> 'required|string|between:2,255',
            "phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            "email" => "required|email",
        ];
    }
    public function messages(){
        return [

            'first_name.string'=>'This name is a bit strange. Can you do this correctly',
            'first_name.between'=>'The name must be between 2 and 255 characters',
            'last_name.string'=>'This name is a bit strange. Can you do this correctly',
            'last_name.between'=>'The name must be between 2 and 255 characters',
            'address.required'=>'Please fill in a address line',
            'city.required'=>'Please fill in the City name',
            'zipcode.required'=>'Please fill in the Zipcode',
            "phone" => "Please enter a valid phone number",
            "email.email" => "Please enter a valid email",
            "email.required" => "Please enter a valid email",
        ];
    }
}
