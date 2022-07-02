<?php

namespace App\Http\Controllers;

use App\Models\ListeInscrit;
use Illuminate\Http\Request;

class ListeInscritController extends Controller
{
    //recuperer la liste des instcrits
    public function index(){
        $listeInscrit = ListeInscrit::all();
        return response()->json($listeInscrit);
    }

    //enregistrer les inscrits
    public function store(Request $request){
        $listeInscrit = ListeInscrit::create($request->all());
        return response()->json($listeInscrit);
    }

    //delete Liste inscrit
    public function delete($id){
        $listeInscrit = ListeInscrit::find($id);
        $listeInscrit->delete();
        return response()->json('suppression réussi');
    }
    
}
