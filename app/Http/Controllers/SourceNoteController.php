<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SourceNote;

class SourceNoteController extends Controller
{
    public function index()
    {
        $notes = SourceNote::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'batch' => 'required',
            'semester' => 'required',
            'drive_link' => 'required|url',
        ]);

        SourceNote::create($request->all());
        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        SourceNote::findOrFail($id)->delete();
        return redirect()->route('notes.index');
    }
}

