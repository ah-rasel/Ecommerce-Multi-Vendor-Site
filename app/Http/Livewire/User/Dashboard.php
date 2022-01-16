<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\OrderProducts;
use Livewire\Component;

class Dashboard extends Component
{
    public $SelectedTab = 1;
    public $SpecificOrder = false;
    public $showOrders = true;
    public $order = false;
    public $products = false;
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
