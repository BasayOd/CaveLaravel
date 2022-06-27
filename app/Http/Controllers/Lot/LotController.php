<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LotController extends Controller
{
    public function show(Lot $lot)
    {
        $categories=Category::all();
        $bets = $lot->bets->sortByDesc('price')->slice(0,10);
        return view('lot', compact('categories', 'lot', 'bets'));
    }
    public function create()
    {
        $categories=Category::all();
        return view( 'add_lot', compact('categories'));
    }


}
