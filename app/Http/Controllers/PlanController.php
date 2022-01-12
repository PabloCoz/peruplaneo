<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('plans');
    }

    public function store(Request $request)
    {
        Plan::create($request->all());
        return redirect()->route('home')->with('status','Su datos estan siendo analizados. Nuestro experto se pondrá en contacto con usted');
    }
}
