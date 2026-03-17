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
            'email'                 => 'required|email',
            'vorname'               => 'required|min:2',
            'nachname'              => 'required|min:2',
            'schule'                => 'required|min:2',
            'url'                   => 'required|url',
            'agb'                   => 'accepted',
            'partners'              => 'sometimes|array|max:3',
            'partners.*.vorname'    => 'required_with:partners.*.nachname|string|min:2',
            'partners.*.nachname'   => 'required_with:partners.*.vorname|string|min:2',
        ]);

        // Partner: leere Einträge filtern + Index neu ordnen
        $partners = collect($request->input('partners', []))
            ->filter(function ($p) {
                $v = trim($p['vorname'] ?? '');
                $n = trim($p['nachname'] ?? '');
                return $v !== '' && $n !== '';
            })
            ->values()
            ->all();

        $payload = [
            'email'    => $validated['email'],
            'vorname'  => $validated['vorname'],
            'nachname' => $validated['nachname'],
            'schule'   => $validated['schule'],
            'url'      => $validated['url'],
            'partners' => $partners, // JSON
        ];

        Submission::create($payload);

        return redirect()->back()->with('success', 'Daten erfolgreich gespeichert!');
    }
}
