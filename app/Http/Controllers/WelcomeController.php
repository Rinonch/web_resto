<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{
    public function create(Request $request)
    {
        Pesanan::create($request->except(['_token', 'submit']));
    }
}
