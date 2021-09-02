<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SallesController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$Salles = Salle::all();
		return view('Salles.index', compact('Salles'));
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('Salles.create');
	
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
            'adresse'=>'required'
        ]);

        $fournisseur = new Fournisseur([
            'nom' => $request->get('nom'),
            'adresse' => $request->get('adresse'),
            'ville' => $request->get('ville'),
            'tel' => $request->get('tel')
      
        ]);
        $fournisseur->save();
        return redirect('/fournisseurs')->with('success', 'Le fournisseur a été enregistré!');
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
        $fournisseur = Fournisseur::find($id);
		return view('fournisseurs.edit', compact('fournisseur'));  
		

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

         $fournisseur = Fournisseur::find($id);
         $fournisseur->nom=  $request->get('nom');
         $fournisseur->adresse = $request->get('adresse');
         $fournisseur->ville = $request->get('ville');
         $fournisseur->tel = $request->get('tel');
         $fournisseur->save();

        return redirect('/Salles')->with('success', 'La Salle a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();

        return redirect('/Salles')->with('success', 'La Salle a été supprimé!');
    }
}


