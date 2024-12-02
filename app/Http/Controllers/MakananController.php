<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MakananController extends Controller
{

    public function index()
    {

        $makanan = Product::whereHas('category', function ($query) {
            $query->where('name', 'Makanan');
        })->with('category')->get();


        // dd($makanan);
        return view('category.makanan.index', [
            'title' => 'Makanan',
            'products' => $makanan
        ]);
    }

    public function show($id)
    {
        $makanan = Product::where('id', $id)->with('category')->first();

        return view('category.makanan.show', [
            'title' => 'Makanan',
            'products' => $makanan
        ]);
    }
}
