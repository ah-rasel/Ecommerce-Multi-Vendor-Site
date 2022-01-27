<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddNewProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category;
    public $regular_price;
    public $current_price;
    public $quantity;
    public $sku = NULL;
    public $short_description;
    public $image;

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
    public function AddProduct()
    {
        // dd($this->quantity);
        $this->validate();
        $imageName = $this->image->store('/', 'images');
        $product = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->short_description,
            'sku' => $this->sku,
            'current_price' => $this->current_price,
            'regular_price' => $this->regular_price,
            'quantity' => $this->quantity,
            'image' => $imageName,
            'shop_id' => 1,
            'category_id' => 3,
        ]);
        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('livewire.admin.product.add-new-product');
    }
}
