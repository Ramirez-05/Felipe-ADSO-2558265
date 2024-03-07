<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('index', compact('notes'));
    }

    public function create()
    {
        return view('note');
    }

    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect()->route('index');
    }

    public function show(Note $note)
    {
        return view('show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }
    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        return redirect()->route('index');
    }

    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        return redirect()->route('index');
    }
}
