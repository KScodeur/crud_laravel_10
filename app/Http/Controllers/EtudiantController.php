<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function list(){
       // $etudiants = Etudiant::all();
        $etudiants = Etudiant::paginate(10);
        return view('etudiant.liste', compact('etudiants'));
    }

    public function add(){
        return view('etudiant.ajouter');
    }

    public function add_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);
        $etudiant= new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;

        $etudiant->save();

        return redirect('/ajouter')->with('status', "L'étudiant a bien été ajouter avec succès");
    }

    public function update_etudiant($id){
        $etudiant=Etudiant::find($id);
        return view('etudiant.update', compact('etudiant'));
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',
        ]);
        $etudiant= Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;

        $etudiant->update();

        return redirect('/list')->with('status', "L'étudiant a bien été modifier avec succès");
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/list')->with('status', "L'étudiant a bien été supprimé avec succès");

    }
}
