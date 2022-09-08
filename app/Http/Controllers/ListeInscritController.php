<?php

namespace App\Http\Controllers;

use App\Models\ListeInscrit;
use Illuminate\Http\Request;

class ListeInscritController extends Controller
{
    //recuperer la liste des instcrits
    public function index(){
        
        $listeInscrit = ListeInscrit::paginate(2);    
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

    
    //obtenir une  liste à partir de l'événement

    public function getListeByEvent($eventsid){
        $liste = ListeInscrit::where('evenement_id', '=', $eventsid)->get();

        return response()->json($liste);
    }
    
}
