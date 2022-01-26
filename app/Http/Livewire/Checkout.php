<?php

namespace App\Http\Livewire;

use App\Models\DeliveryAddress;
use App\Models\DeliveryNumber;
use App\Models\DeliverySchedule;
use App\Models\Order;
use App\Models\OrderProducts;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Checkout extends Component
{
    public $address = '';
    public $schedule = false;
    public $number = '';
    public $number_type = NULL;
    public $payment_method = 0;
    public $notes;
    public $sub_total = false;
    public $new_address = false;
    public $new_phone = false;
    public $address_type = NULL;

    protected $listeners = ['cart-updated' => 'render'];
    protected $rules = [
        'number'
    ];
    public function NewAddress()
    {
        DeliveryAddress::create([
            'address_type' => $this->address_type,
            'address' => $this->address,
            'user_id' => auth()->user()->id,
        ]);
        $this->reset();
    }
    public function NewNumber()
    {
        // dd($this->number);
        DeliveryNumber::create([
            'number_type' => $this->number_type,
            'number' => $this->number,
            'user_id' => auth()->user()->id,
        ]);
        $this->reset();
    }
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
        DB::transaction(function () {
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'address_id' => $this->address,
                'number_id' => $this->number,
                'schedule_id' => $this->schedule,
                'notes' => $this->notes,
                'required_date' => now()->addDays(5),
                'amount' => $this->sub_total,
                'payment_method' => $this->payment_method,
            ]);

            $products = Cart::content();
            foreach ($products as $product) {
                OrderProducts::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->qty,
                    'unit_price' => $product->price,
                ]);
            }
            Cart::destroy();
        });
        return redirect()->route('customer.dashboard');
    }
    public function render()
    {

        $this->sub_total = Cart::priceTotal();
        return view('livewire.checkout', [
            'products' => Cart::content(),
            'schedules' => DeliverySchedule::all(),
        ])
            ->extends('layouts.app')
            ->section('contents');
    }
}
