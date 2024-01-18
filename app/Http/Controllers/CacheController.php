<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function storeNumber(Request $request)
    {
        var_dump((int)$request->input('number')); //Esto es un casteo,te permite cambiar el tipo del dato
       $request->validate([
            'number' => 'required|numeric',
        ]);

        $number = $request->input('number');

        Cache::put('stored_number', $number, 60);

        return redirect('/')
            ->with('success', 'Número guardado en caché correctamente.');
    }
}
