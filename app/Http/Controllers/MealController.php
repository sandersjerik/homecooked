<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Storage;

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
        // return var_export($request->file('picture')->isValid(), true);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $filename = Storage::putFile('pictures', $request->file('picture'), 'public');
        $url = Storage::url($filename);
        DB::transaction(function () use ($request, $url) {
            // TODO: examine and reduce number of database queries being performed
            $meal = $request->user()->chef->meals()->create($request->all());
            $meal->pictures()->create(['url' => $url]);
        });
        return redirect(url('/kitchen'));
    }
}
