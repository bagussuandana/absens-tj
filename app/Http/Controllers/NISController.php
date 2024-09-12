<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NISController extends Controller
{
    public function index()
    {
        return view('nis.login');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
