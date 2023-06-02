<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class IsActiveState extends Component
{
public $model;
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
//dd($this->model->shippingAddresses);
        $this->model->setAttribute($this->field, $value)->save();
    }
}
