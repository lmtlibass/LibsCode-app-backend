<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Module;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //cours les plus recents
    public function coursR()
    {
        $cours = Cours::orderBy('created_at', 'desc')->limit(8)->get();
        return response()->json($cours);
    }
    //Afficher les cours qui n'ont pas encore été validés par l'admin
    public function getCours()
    {
        $cours = Cours::where('statut', '=', 0)->get();
        return response()->json($cours);
    }
    //afficher les cours validés par les admins
    public function index(){
        $cours = Cours::all();
        return response()->json($cours);
    }



    //ajouter un cours
    public function store(Request $request){
        $cours = Cours::create($request->all());
        return response()->json($cours);
    }

    //recuperer un  cours par son id
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
    
    //mise à jour cours
    public function update(Request $request, $id){
        $cours = Cours::find($id);
        $cours->update($request->all());
        return response()->json($cours);
    }

    //filtrer les cours par module 
    public function getCourByModule($moduleid){
        $cour = Cours::where('cours.module_id', '=', $moduleid)->get();

        return response()->json($cour);

    }
    //recuperer le cours en fonctio de l'utilisateur
    public function getCourByUser($user){
        $cours = Cours::where('cours.user_id', '=', $user)->get();
        return response()->json($cours);
    }
}
