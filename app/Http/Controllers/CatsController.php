<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function showCats()
    {
        $cats = Cat::getAllCats();
        return view('cats', ['cats' => $cats]);
    }

    public function showAddCatForm()
    {
        return view('add-cat-form');
    }

    public function addCat(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'race' => 'required',
            'color' => 'required',
            'age' => 'required|numeric',
        ]);

        Cat::createNewCat([
            'name' => $request->input('name'),
            'race' => $request->input('race'),
            'color' => $request->input('color'),
            'age' => $request->input('age'),
        ]);

        return redirect('/cats');
    }
}
