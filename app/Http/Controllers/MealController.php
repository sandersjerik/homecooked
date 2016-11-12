<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('meals.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $request->user()->chef->meals()->create($request->all());
        return redirect(url('/kitchen'));
    }
}
