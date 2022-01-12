<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('home')->with('status','Su datos estan siendo analizados. Nuestro experto se pondrá en contacto con usted');
    }
}
