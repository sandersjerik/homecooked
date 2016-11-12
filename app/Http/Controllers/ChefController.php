<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kitchen(Request $request)
    {
        $user = $request->user();
        $meals = $user->chef->meals;
        return view('chef.kitchen', compact('meals'));
    }
}
