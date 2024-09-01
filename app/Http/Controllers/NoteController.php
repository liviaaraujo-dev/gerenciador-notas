<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $userId = auth()->id();

        $notes = Note::where('user_id', $userId)->get();

        return view('notes.list_notes', @compact('notes'));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|max:255', // O título é obrigatório e deve ter no máximo 255 caracteres
            'description' => 'required', // A descrição é obrigatória
        ]);

        $userId = auth()->id();

        $note = Note::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'user_id' => $userId,
        ]);

        return redirect()->route('notes.list')->with('success', 'Nota criada com sucesso!');
    }
}
