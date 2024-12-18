<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        // Получаем последние 5 новостей
        $news = \App\Models\News::orderBy('created_at', 'desc')->take(3)->get();

        return view('home.index', compact('news'));
    }
}
