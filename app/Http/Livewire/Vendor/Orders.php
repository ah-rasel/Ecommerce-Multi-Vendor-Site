<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        return view('livewire.vendor.orders')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
