<?php

namespace App\Http\Controllers;

use App\Models\Einreichen;
use Illuminate\Http\Request;

class EinreichenController extends Controller
{

    public function create()
    {
        return view('upload-pages.einreichen');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'username' => 'required|min:3',
            'url' => 'required|url',
        ]);

        Einreichen::create($validated);

        return redirect()->back()->with('success', 'Daten erfolgreich gespeichert!');


    }
}
