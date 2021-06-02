<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::where('status',1)->paginate(3);
        $categories = Category::all();
        return view('catalog', compact('categories', 'products'));
    }

    public function category($id)
    {
        $products = Product::where(['category_id' => $id, 'status' => 1])->paginate(3);
        $categories = Category::all();
        return view('catalog', compact('categories', 'products'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
    }
}
