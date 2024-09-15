<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
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

        $alredyRecord = Attendance::query()->whereHas('student', function($query) use($request){
            $query->where('nis',$request->nis);

        })->first();
        dd($alredyRecord);
    }
}
