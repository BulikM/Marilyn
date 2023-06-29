<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function store(Request $request){
        request()->validate([
            'name'=> ['required','between:2,255'],
            'email'=>['required','email'],
            "phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'message' => ['required', 'regex:/^[^<>]*$/'],
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'phone.required'=>'Phone is required',
            'name.between'=>'Name has to be minimum 2 characters long'
        ]);

        $data = $request->all();
        Mail::to(request('email'))->send(new Contact($data));
        return back()->with('status', 'Form received, thank you!');
    }
}
