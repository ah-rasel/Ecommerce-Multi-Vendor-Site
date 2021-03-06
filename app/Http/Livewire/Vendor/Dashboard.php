<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Shop;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.vendor.dashboard')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
