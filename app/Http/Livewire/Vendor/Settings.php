<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Shop;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;
    public $shop;
    public $logo;
    public $banner;

    protected $rules = [
        'shop.name' => 'required',
        'shop.tag_line' => 'required',
        'shop.address' => 'required',
        'shop.logo' => 'required',
        'shop.banner' => 'required',
        'shop.phone' => 'required',
    ];

    public function mount()
    {
        $this->shop = auth()->user()->shop;
    }

    public function UpdateShop()
    {
        if ($this->logo) {
            $this->shop->logo = $this->logo?->store('/', 'images');
        }
        if ($this->banner) {
            $this->shop->banner = $this->banner?->store('/', 'images');
        }
        $this->shop->update();
        $this->emit('shop-updated');
    }

    public function render()
    {
        return view('livewire.vendor.settings')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
