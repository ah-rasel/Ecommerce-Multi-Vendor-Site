<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Product;
use App\Models\Shop;
use Livewire\Component;
use Illuminate\Support\Str;

class NewProduct extends Component
{
    public $name;
    public $slug;
    public $category;
    public $regular_price;
    public $current_price;
    public $quantity;
    public $sku = NULL;
    public $short_description;
    public $shop;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'current_price' => 'numeric',
        'regular_price' => 'numeric',
        'quantity' => 'numeric',
        'short_description' => 'required',
    ];
    
    public function mount()
    {
        $this->shop = Shop::where('user_id', auth()->user()->id)
            ->firstOrFail();
    }
    public function UpdatedName()
    {
        $this->slug = Str::slug($this->name);
    }
    public function AddProduct()
    {
        $this->validate();
        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->short_description,
            'sku' => $this->sku,
            'current_price' => $this->current_price,
            'regular_price' => $this->regular_price,
            'quantity' => $this->quantity,
            'shop_id' => $this->shop->id,
            'category_id' => 3,
        ]);
        return redirect()->route('vendor.products');
    }

    public function render()
    {
        return view('livewire.vendor.new-product')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
