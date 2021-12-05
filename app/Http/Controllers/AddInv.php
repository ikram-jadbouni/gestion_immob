<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use App\Models\FamilleBien;
use App\Models\Bien;


use Illuminate\Http\Request;

class AddInv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function ajout()
    {
        return view('crud.addinv',[
            'imm'=>Departement::all(),
            'imo'=>FamilleBien::all()
        ]);
    }
 
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function all(){
        return view('crud.listInventaire',[
            'imm'=>Bien::all()
        ]);
        }
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $reques)
    {
        $iko=new Bien();
        $iko->nom_inventaire=$reques->input('nomInv');
        $iko->valeur_origine=$reques->input('valeurOr');
        $iko->famille=$reques->input('famille');
        $iko->date_acquisition=$reques->input('date');
        $iko->departement=$reques->input('departement');
        $iko->quantite=$reques->input('qte');
        $iko->code_barre=$reques->input('codeB');
        $iko->save();
        $reques->session()->flash('status','inventaire bien ajouter');
        return redirect()->route('ajout');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
