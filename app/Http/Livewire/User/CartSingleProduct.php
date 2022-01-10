<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartSingleProduct extends Component
{
    public $rowId;
    public $name;
    public $price;
    public $qty;
    public $image;
    
    protected $listeners = ['cart-updated' => 'render'];
    public function mount($rowId, $name, $price, $qty,$image)
    {
        $this->rowId = $rowId;
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
        $this->image = $image;
    }
    public function RemoveFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cart-updated');
    }
    public function Increment($rowId, $qty)
    {
        Cart::update($rowId, $qty + 1);
        $this->emit('cart-updated');
    }
    public function Decrement($rowId, $qty)
    {
        Cart::update($rowId, $qty - 1);
        $this->emit('cart-updated');
    }
    public function render()
    {
        return view('livewire.user.cart-single-product');
    }
}
