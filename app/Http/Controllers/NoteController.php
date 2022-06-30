<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //recuperer des notes
    public function index(){
        $note = Note::all();
        return response()->json($note);
    }

    //ajouter des notes
    public function store(Request $request){
        $note = Note::create($request->all());
        return response()->json($note);
    }
}
