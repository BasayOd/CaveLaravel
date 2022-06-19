<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lot;


class IndexController extends Controller
{

    public function __invoke()
    {
        $categories=Category::all();
        $lots=Lot::paginate(9);
        return view('main', compact('categories', 'lots'));
    }

    public function sort(Category $selected)
    {
        $categories=Category::all();
        $lots=Lot::where('category_id', $selected->id)->paginate(9);
        return view('sorted', compact('categories', 'selected', 'lots' ));
    }
}
