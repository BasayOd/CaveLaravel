<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{

    public function __invoke()
    {
        $categories=Category::all();
        return view('main', compact('categories'));
    }

    public function sort(Category $selected)
    {
        $categories=Category::all();
        return view('sorted', compact('categories', 'selected' ));
    }
}
