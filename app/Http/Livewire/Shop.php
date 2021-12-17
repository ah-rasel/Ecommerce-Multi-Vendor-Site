<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;
    public $product_to_display = 12;
    public $load_more = true;
    public function loadMore()
    {
        $this->product_to_display = $this->product_to_display+12;
        ($this->product_to_display>Product::count())?$this->load_more = false:'';
    }
    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::paginate($this->product_to_display),
        ]);
    }
}
