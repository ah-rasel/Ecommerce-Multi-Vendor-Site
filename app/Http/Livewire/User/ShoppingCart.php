<?php

namespace App\Http\Livewire\User;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{
    protected $listeners = ['AddToCart' => 'AddToCart'];
    public function AddToCart($id, $quantity)
    {
        $product = Product::findOrFail($id);
        Cart::add($product->id, $product->name, $quantity, $product->price, 500);
        $this->emit('cart-updated');
    }
    public function RemoveFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cart-updated');
    }
    public function UpdateProductInCart($rowId, $type, $qty)
    {
        if ($type == 0) {
            Cart::update($rowId, $qty - 1);
        } else {
            Cart::update($rowId, $qty + 1);
        }
        $this->emit('cart-updated');
    }
    public function render()
    {
        return view('livewire.user.shopping-cart', [
            'products' => Cart::content(),
            'cart_price_total' => Cart::priceTotal(),
        ]);
    }
}
