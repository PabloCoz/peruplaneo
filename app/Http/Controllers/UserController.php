<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Plan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    public function plan()
    {
        $plans = Plan::all();
        return view('admin.plan', compact('plans'));
    }
}
