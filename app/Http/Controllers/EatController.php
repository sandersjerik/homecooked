<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class EatController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return view('eat.index', compact('meals'));
    }
}
