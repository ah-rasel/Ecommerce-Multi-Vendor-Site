<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class Settings extends Component
{
    public function render()
    {
        return view('livewire.vendor.settings')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
