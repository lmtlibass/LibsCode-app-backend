<?php

namespace App\Http\Controllers;

use App\Models\DemandeF;
use Illuminate\Http\Request;
use Lcobucci\JWT\Decoder;

class DemandeFController extends Controller
{
    //afficher les demandes 

    public function index(){
        $demande =  DemandeF::all();
        return response()->json($demande);
    }

    //ajouter une demande

    public function store(Request $request){
        $demande = DemandeF::create($request->all());
        return response()->json($demande);
    }

    //

}
