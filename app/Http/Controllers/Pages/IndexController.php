<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $pageData = [];

        $pageData['bestsellers'] = Product::whereHas('categories', function ($query) {
            $query->where('category_id', 1);
        })->limit(5)->get();

        $pageData['products'] = Product::inRandomOrder()->limit(10)->get();

        return view('pages.index', $pageData);
    }
}
