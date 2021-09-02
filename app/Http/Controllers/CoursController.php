<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursController extends Controller
{
    //



   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$cours = cours::all();
		return view('cours.index', compact('cours'));
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('cours.create');
	
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'masse_horaire'=>'required'
        ]);

        $fournisseur = new Fournisseur([
            'nom' => $request->get('nom'),
            'masse_horaire' => $request->get('masse_horaire'),
            'type' => $request->get('type'),
            'date' => $request->get('date')
      
        ]);
        $cours->save();
        return redirect('/cours')->with('success', 'Le cours a été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cours = Cours::find($id);
		return view('cours.edit', compact('cours'));  
		

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'adresse'=>'required'
        ]);

         $Cours = Fournisseur::find($id);
         $Cours->nom=  $request->get('nom');
         $Cours->adresse = $request->get('adresse');
         $Cours->ville = $request->get('ville');
         $Cours->tel = $request->get('tel');
         $Cours->save();

        return redirect('/cours')->with('success', 'Le cours a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cours = cours::find($id);
        $fournisseur->delete();

        return redirect('/cours')->with('success', 'Le cours a été supprimé!');
    }
}




