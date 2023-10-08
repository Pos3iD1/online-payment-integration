<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $pageData = [];

        $pageData['products'] = Product::paginate(12);
        $pageData['categories'] = Category::all();
        $pageData['tags'] = Tag::all();
        $pageData['colors'] = Color::all();

        return view('pages.products', $pageData);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function show(Request $request, int $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $pageData = [];

        $pageData['product'] = Product::find($id);

        return view('pages.product', $pageData);
    }
}
