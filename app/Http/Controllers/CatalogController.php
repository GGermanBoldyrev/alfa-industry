<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Brand;


class CatalogController extends Controller
{
    public function index(): View
    {
        return view('catalog.index');
    }
}
