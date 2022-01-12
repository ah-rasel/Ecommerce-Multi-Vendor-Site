<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Checkout extends Component
{
    protected $listeners = ['cart-updated' => 'render'];
    public function RemoveFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cart-updated');
    }
    public function render()
    {
        return view('livewire.checkout', [
            'products' => Cart::content(),
            'sub_total' => Cart::priceTotal()
        ])
            ->extends('layouts.app')
            ->section('contents');
    }
}
