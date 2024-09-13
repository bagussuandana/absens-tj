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
        $request->validate([
            'nis' => ['required', 'numeric', 'digits:4'],
        ]);
        dd($request->all());
    }
}
