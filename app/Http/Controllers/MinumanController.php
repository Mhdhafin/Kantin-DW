<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        $minuman = Product::whereHas('category', function ($query) {
            $query->where('name', 'Minuman');
        })->with('category')->get();

        return view('category.minuman.index', [
            'title' => 'Minuman',
            'products' => $minuman
        ]);
    }
}
