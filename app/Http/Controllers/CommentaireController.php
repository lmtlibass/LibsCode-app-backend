<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    //afficher les commentaires

    public function index(){
        $commentaire = Commentaire::all();
        return response()->json($commentaire);
    }

    //ajouter un commentaire
    public function store(Request $request){
        $commentaire = Commentaire::create($request->all());
        return response()->json($commentaire);
    }

    //supprimer un commentaire 
    public function delete($id){
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return response()->json('suppression reussi');
    }
}
