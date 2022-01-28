<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Shop;
use Livewire\Component;

class Dashboard extends Component
{
    public $message;
    public function mount()
    {
        $shop = auth()->user()->shop;
        if ($shop->status == 0) {
            $this->message = "Your shop is under Review and currently invisible to visitors. But don't worry, It will automatically be visible,once it becomes approved by one of our admins.";
        }
        if ($shop->status == 2) {
            $this->message = "Your shop has been banned. Please contact with admin .";
        }
    }
    public function render()
    {
        return view('livewire.vendor.dashboard')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
