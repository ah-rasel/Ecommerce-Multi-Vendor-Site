<?php

namespace App\Http\Livewire\Admin\Product;

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
    public $short_description;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'current_price' => 'numeric',
        'quantity' => 'numeric',
        'short_description' => 'required',
    ];
    public function UpdatedName()
    {
        $slug = Str::slug($this->name);
        $this->slug  = env('DB_HOST')."/".$slug;
    }
    public function AddPost()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.admin.product.add-new-product');
    }
}
