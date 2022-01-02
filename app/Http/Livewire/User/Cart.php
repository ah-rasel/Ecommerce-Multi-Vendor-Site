<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Cart extends Component
{
    protected $listeners = ['AddToCart' => 'AddToCart'];
    public function AddToCart($id , $quantity)
    {
        dd($id,$quantity);
    }
    public function render()
    {
        return view('livewire.user.cart');
    }
}
