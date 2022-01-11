<?php

namespace App\Http\Livewire\User;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    public $cart_total = 0;

    protected $listeners = ['cart-updated' => 'render'];
    public function render()
    {
        $this->cart_total = Cart::content()->count();
        return view('livewire.user.cart-counter');
    }
}
