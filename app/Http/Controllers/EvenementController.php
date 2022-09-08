<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    
    //evenement les plus recents
    public function evenementR()
    {
        $evenement = Evenement::orderBy('created_at', 'desc')->limit(8)->get();
        return response()->json($evenement);
    }
    //liste des evenements
    public function index(){
        $evenement = Evenement::all();
        return response()->json($evenement);
    }

    //ajouter evenement
    public function store(Request $request){
        $evenement = Evenement::create($request->all());
        return response()->json($evenement);
    }

    //evenement pas encore valider par l'admin
    public function getEvenement(){
        $evenement = Evenement::where('etat', '=', 0)->get();
        return response()->json($evenement);
    }

    //afficher detail evenement
    public function show($id){
        $evenement = Evenement::find($id);
        return response()->json($evenement);
    }

    //mise à jours d'un evenement
    public function update(Request $request, $id){
        $evenement = Evenement::find($id);
        $evenement->update($request->all());
        return response()->json();
    }

    //supprimer un evenemet
    public function delete($id){
        $evenement = Evenement::find($id);
        $evenement->delete();
        return response()->json();
    }

    //recuperer les evenements publié par un utilisateur
    public function getEventsByUser($user){
        $evenement = Evenement::where('evenements.user_id', '=', $user)->get();
        return response()->json($evenement);
    }
}
