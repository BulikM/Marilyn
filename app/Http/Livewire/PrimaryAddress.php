<?php

namespace App\Http\Livewire;

use App\Models\ShippingAddresses;
use App\Models\User;
use Livewire\Component;

class PrimaryAddress extends Component
{
    public User $model;
    public string $field;
    public bool $is_primary = true;
    public $address;

    public function mount(){
//        dd($this->address->getAttribute($this->field));
        $this->is_primary = $this->address->getAttribute($this->field);



    }

    public function render()
    {
        return view('livewire.primary-address');
    }
    public function updating($field, $value){
//dd($this->model->shippingAddresses);

        foreach ($this->model->shippingAddresses as $shippingAddress) {

//            dd($shippingAddress->getAttribute($this->field));
            $shippingAddress->setAttribute($this->field, false)->save();
        }
        $this->address->setAttribute($this->field, true)->save();
    }
}
