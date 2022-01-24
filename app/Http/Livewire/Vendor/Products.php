<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Product;
use App\Models\Shop;
use Livewire\Component;

class Products extends Component
{
    public function mount()
    {
    //     $products = Shop::with('products')->where('user_id', auth()->user()->id)->first();
    //     dd($products);
    }
    public function Delete($id)
    {
        Product::destroy($id);
    }
    public function render()
    {
        return view('livewire.vendor.products', [
            'shop' => Shop::with('products.category')->where('user_id', auth()->user()->id)->firstOrFail(),
        ])
            ->extends('vendor.index')
            ->section('vendor');
    }
}
