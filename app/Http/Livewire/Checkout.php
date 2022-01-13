<?php

namespace App\Http\Livewire;

use App\Models\DeliveryAddress;
use App\Models\DeliveryNumber;
use App\Models\DeliverySchedule;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Checkout extends Component
{
    protected $listeners = ['cart-updated' => 'render'];
    public function RemoveAddress($id)
    {
       DeliveryAddress::destroy($id);
    }
    public function RemovePhoneNumber($id)
    {
       DeliveryNumber::destroy($id);
    }
    public function RemoveFromCart($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cart-updated');
    }
    public function render()
    {
        return view('livewire.checkout', [
            'products' => Cart::content(),
            'sub_total' => Cart::priceTotal(),
            'schedules'=>DeliverySchedule::all(),
        ])
            ->extends('layouts.app')
            ->section('contents');
    }
}
