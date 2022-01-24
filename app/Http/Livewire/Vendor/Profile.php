<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.vendor.profile')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
