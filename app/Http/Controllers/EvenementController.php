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
}
