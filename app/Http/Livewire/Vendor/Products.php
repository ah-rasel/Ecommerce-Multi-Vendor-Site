<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.vendor.products')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
