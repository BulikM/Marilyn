<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class IsActiveState extends Component
{
//    public $is_active = false;
//    public function is_active()
//    {
//
//        // Your custom logic here. This code will execute when the checkbox is clicked.
//        if ($this->is_active) {
//          dd('test');
//        } else {
//            // Checkbox is unchecked.
//        }
//    }
public User $model;
public string $field;
public bool $is_active;

    public function mount(){
        $this->is_active = $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.is-active-state');
    }

    public function updating($field, $value){

        $this->model->setAttribute($this->field, $value)->save();
    }
}
