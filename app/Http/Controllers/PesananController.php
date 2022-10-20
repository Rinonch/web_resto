<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesanan.index', compact(['pesanan']));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Pesanan::create($request->except(['_token', 'submit']));
        return redirect('/');
    }
}
