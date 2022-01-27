<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $product;
    public $image;
    protected $rules = [
        'product.name' => 'required',
        'product.slug' => 'required',
        'product.current_price' => 'numeric',
        'product.regular_price' => 'numeric',
        'product.quantity' => 'numeric',
        'product.description' => 'required',
        'image' => 'image|max:1024',
    ];
    public function mount($id)
    {
        $this->product = Product::findOrFail($id);
    }
    public function UpdatedProductName()
    {
        $this->product->slug = Str::slug($this->product->name);
    }
    public function UpdateProduct()
    {
        $this->product->update();
        return redirect()->route('vendor.products');
    }
    public function render()
    {
        return view('livewire.vendor.edit-product')
            ->extends('vendor.index')
            ->section('vendor');
    }
}
