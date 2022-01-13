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
    public $address = false;
    public $schedule = false;
    public $number = false;
    public $payment_method = 0;

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
    public function PlaceOrder()
    {
        dd($this->payment_method);
    }
    public function render()
    {
        return view('livewire.checkout', [
            'products' => Cart::content(),
            'sub_total' => Cart::priceTotal(),
            'schedules' => DeliverySchedule::all(),
        ])
            ->extends('layouts.app')
            ->section('contents');
    }
}
