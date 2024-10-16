<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LainnyaController extends Controller
{
    public function lainnya()
    {
        return view('category.lainnya.index', [
            'title' => 'Lainnya'
        ]);
    }
}
