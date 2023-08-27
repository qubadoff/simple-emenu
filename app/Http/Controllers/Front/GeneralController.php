<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        $products = Product::orderBy('sort', 'asc')->get();

        return \view('Front.index', compact('products'));
    }

    public function brend(): View
    {
        return \view('Front.brend');
    }

    public function singleCat($id): View
    {
        $cat = Category::where('id', $id)->first();

        if (! $cat)
        {
            abort(404);
        }

        $products = Product::where('cat_id', $cat->id)->orderBy('sort', 'asc')->get();


        return \view('Front.singleCat', compact('products', 'cat'));
    }
}
