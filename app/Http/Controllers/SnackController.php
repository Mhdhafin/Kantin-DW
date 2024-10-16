<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function snack()
    {
        return view('category.snack.index', [
            'title' => 'Snack'
        ]);
    }
}
