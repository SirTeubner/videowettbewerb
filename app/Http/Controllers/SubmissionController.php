<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
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

        Submission::create($validated);

        return redirect()->back()->with('success', 'Daten erfolgreich gespeichert!');
    }


}
