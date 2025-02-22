<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(): View
    {
        $products = Product::paginate(10);
        return view("products.index", compact("products"));
    }
}
