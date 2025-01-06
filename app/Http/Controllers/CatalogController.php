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
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('catalog.index', compact('categories'));
    }

    public function show(string $categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Получаем бренды, относящиеся к категории
        $brands = Brand::where('category_id', $category->id)->where('is_active', true)->get();

        return view('catalog.show', compact('category', 'brands'));
    }
}
