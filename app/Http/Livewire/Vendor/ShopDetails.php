<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;

class ShopDetails extends Component
{
    public $shop;

    protected $listeners = ['shop-updated' => 'render'];
    public function mount()
    {
        $this->shop = auth()->user()->shop;
    }

    public function render()
    {
        return view('livewire.vendor.shop-details');
    }
}
