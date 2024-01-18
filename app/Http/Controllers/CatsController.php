<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CatsController extends Controller
{
    public function showCats(): View
    {
        $cats = Cat::getAllCats();
        return view('cats')
            ->with('cats',$cats);
    }

    public function showAddCatForm(): View
    {
        return view('add-cat-form');
    }

    public function addCat(Request $request): RedirectResponse
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

    public function showCatsImage(): View
    {
        return view('catsImage');
    }

    public function admin(): View
    {
        return view('admin');
    }

}
