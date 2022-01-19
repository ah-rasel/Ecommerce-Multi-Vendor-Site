<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class AddNewProduct extends Component
{
    public $name;
    public $slug;
    public $category;
    public $regular_price;
    public $current_price;
    public $quantity;
    public $sku = NULL;
    public $short_description;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'current_price' => 'numeric',
        'regular_price' => 'numeric',
        'quantity' => 'numeric',
        'short_description' => 'required',
    ];
    public function UpdatedName()
    {
        $this->slug = Str::slug($this->name);
    }
    public function AddPost()
    {
        // dd($this->quantity);
        $this->validate();
        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->short_description,
            'sku' => $this->sku,
            'current_price' => $this->current_price,
            'regular_price' => $this->regular_price,
            'quantity' => $this->quantity,
            'image' => $this->current_price,
            'category_id' => 3,
        ]);
        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('livewire.admin.product.add-new-product');
    }
}
