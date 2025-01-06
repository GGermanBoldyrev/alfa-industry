<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;

class CatalogController extends Controller
{
    public function index(): View
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('catalog.index', compact('categories'));
    }

    public function show($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        return view('catalog.show', compact('category'));
    }
}
