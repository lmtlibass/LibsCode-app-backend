<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //cours les plus recents
    public function coursR()
    {
        $cours = Cours::orderBy('created_at', 'desc')->limit(8)->get();
        return response()->json($cours);
    }
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
