<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function __invoke($id)
    {
        $categories = Category::all();
        return view('main', compact('categories', 'id' ));
    }
}
