<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //afficher les cours
    public function index(){
        $cours = Cours::all();
        return response()->json($cours);
    }

    //ajouter un cours
    public function store(Request $request){
        $cours = Cours::create($request->all());
        return response()->json($cours);
    }

    //recuperer un seule cours
    public function show($id){
        $cours = Cours::find($id);
        return response()->json($cours);
    }

    //suppression cours
    public function delete($id){
        $cours = Cours::find($id);
        $cours->delete();
        return response()->json('Suppression réussi');
    }

        public function update(Request $request, $id){
            $cours = Cours::find($id);
            $cours->update($request->all());
            return response()->json($cours);
        }

}
