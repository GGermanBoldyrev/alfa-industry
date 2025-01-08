<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function index(): View
    {
        $brands = Brand::where('is_active', true)->orderBy('name')->get();

        return view("brands.index", compact("brands"));
    }
}
