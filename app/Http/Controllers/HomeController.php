<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_categories = Category::orderBy('id', 'desc')->limit(6)->get();
        $best_selling_products = Product::inRandomOrder()->limit(12)->get();
        $top_products = Product::inRandomOrder()->limit(4)->get();
        $flash_sale_products = Product::inRandomOrder()->limit(6)->get();
        return view('user.index', compact(
            'featured_categories',
            'best_selling_products',
            'top_products',
            'flash_sale_products'
        ));
    }
    public function vendor_shop_temp()
    {
        $products = Product::inRandomOrder()->limit(12)->get();
        return view('vendor.single-shop',compact('products'));
    }
}
