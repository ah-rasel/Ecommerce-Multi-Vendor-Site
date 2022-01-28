<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\OrderProducts;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Dashboard extends Component
{
    public $SelectedTab = 1;
    public $SpecificOrder = false;
    public $showOrders = true;
    public $order = false;
    public $products = false;
    public $message = false;
    public function mount()
    {
        $shop = auth()->user()->shop;
        if ($shop) {
            $this->message = "Your Shop is under Review. Once it is approved by the admin, you will be redirected to your vendor dashboard";
        }
    }
    public function ShowOrder($id, Order $order)
    {
        $this->order = $order;
        $this->SpecificOrder = true;
        $this->showOrders = false;
        $this->products = OrderProducts::with(['product'])
            ->where('order_id', $id)
            ->get();
    }
    public function CloseOrder()
    {
        $this->SpecificOrder = false;
        $this->showOrders = true;
    }
    public function render()
    {
        return view('livewire.user.dashboard', [
            'orders' => Order::withCount(['products'])
                ->where('user_id', auth()->user()->id)
                ->get(),
        ])->extends('layouts.app')
            ->section('contents');
    }
}
