<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;
    public $product_to_display = 12;
    public $load_more = false;
    public $total_products = true;
    public $categories;
    public $CategoriesInFilter;
    public $SelectedCategories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function UpdatedSelectedCategories()
    {
        $this->CategoriesInFilter = Category::whereIn('id', $this->SelectedCategories)->get();
    }
    public function ClearFilters()
    {
        $this->SelectedCategories = [];
        $this->UpdatedSelectedCategories();
    }
    public function removeCategory($id)
    {
        $key = array_search($id, $this->SelectedCategories); // $key = 2;
        Arr::forget($this->SelectedCategories, $key);
        $this->UpdatedSelectedCategories();
    }

    public function loadMore()
    {
        $this->product_to_display = $this->product_to_display + 12;
    }

    public function render()
    {
        if ($this->SelectedCategories) {
            $this->total_products = Product::whereIn('category_id', $this->SelectedCategories)->count();
        } else {
            $this->total_products = Product::count();
        }
        ($this->product_to_display > $this->total_products) ? $this->load_more = false : $this->load_more = true;

        if ($this->SelectedCategories) {
            return view('livewire.shop', [
                'products' => Product::whereIn('category_id', $this->SelectedCategories)->paginate($this->product_to_display),
            ])->extends('layouts.app')->section('contents');
        } else {
            return view('livewire.shop', [
                'products' => Product::paginate($this->product_to_display),
            ])->extends('layouts.app')->section('contents');
        }
    }
}
