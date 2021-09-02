<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class specialitesController extends Controller
{
    //
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$specialites = specialite::all();
		return view('specialites.index', compact('specialites'));
	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('specialites.create');
	
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
            'date'=>'required'
        ]);

        $fournisseur = new Fournisseur([
            'nom' => $request->get('nom'),
            'date' => $request->get('adresse'),
            'ville' => $request->get('ville'),
            'tel' => $request->get('tel')
      
        ]);
        $fournisseur->save();
        return redirect('/specialites')->with('success', 'Le specialite a été enregistré!');
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
		return view('specialites.edit', compact('specialite'));  
		

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

         $specialite = specialites::find($id);
         $specialite->nom=  $request->get('nom');
         $specialite->adresse = $request->get('adresse');
         $specialite->ville = $request->get('ville');
         $specialite->tel = $request->get('tel');
         $specialite->save();

        return redirect('/specialites')->with('success', 'Le specialite a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialite = specialite::find($id);
        $specialite->delete();

        return redirect('/specialites')->with('success', 'Le specialite a été supprimé!');
    }
}


