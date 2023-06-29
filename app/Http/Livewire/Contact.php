<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function submitForm(){
        $data = [
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'message'=> $this->message
        ];
        Mail::to($this->email)->send(new \App\Mail\Contact($data));

        $this->resetForm();
        session()->flash('status', 'Message received!');
    }
    private function resetForm(){
        $this->name = '';
        $this->email='';
        $this->phone='';
        $this->message ='';
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
