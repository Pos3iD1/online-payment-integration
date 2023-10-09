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
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(Request $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $pageData = [];

        $pageQueries = [];
        foreach ($request->query() as $name => $query) {
            $pageQueries[$name] = explode(',', $query);
        }

        $products = Product::all();

        if (array_key_exists('color', $pageQueries)) {
            $products = $products->filter(function ($product) use ($pageQueries) {
                return !empty(array_intersect($product->colors()->pluck('name')->toArray(), $pageQueries['color']));
            });
        }

        if (array_key_exists('category', $pageQueries)) {
            $products = $products->filter(function ($product) use ($pageQueries) {
                return !empty(array_intersect($product->categories()->pluck('name')->toArray(), $pageQueries['category']));
            });
        }

        if (array_key_exists('tag', $pageQueries)) {
            $products = $products->filter(function ($product) use ($pageQueries) {
                return !empty(array_intersect($product->tags()->pluck('name')->toArray(), $pageQueries['tag']));
            });
        }

        Log::info(count($products->pluck('id')));
        Log::info($products->pluck('id'));

        $pageData['products'] = Product::wherein('id', $products->pluck('id'))->paginate(12);
        $pageData['categories'] = Category::all();
        $pageData['tags'] = Tag::all();
        $pageData['colors'] = Color::all();
        $pageData['queries'] = $pageQueries;

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
