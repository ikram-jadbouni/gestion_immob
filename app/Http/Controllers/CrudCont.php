<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CrudCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.addDepart');
    }
  
    public function all(){
    return view('crud.listDepart',[
        'imm'=>Departement::all()
    ]);
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.listDepart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $reques)
    {
        
        $iko=new Departement();
        $iko->nom_departement=$reques->input('nom');
        $iko->numero=$reques->input('num');
        $iko->nbr_employe=$reques->input('nbr');
        $iko->emplacement=$reques->input('emplc');
        $iko->type=$reques->input('type');
        $iko->save();
        $reques->session()->flash('status','Departement bien ajouter');
        return redirect()->route('all');
       // dd('rrr'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('crud.modifierDepart', [
            'pst' => Departement::find($id)
        ]);
        //dd(Departement::find($id));
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
        $pst=Departement::find($id);
        $pst->nom_departement=$request->input('f');
        $pst->numero=$request->input('i');
        $pst->nbr_employe=$request->input('r');
        $pst->emplacement=$request->input('s');
        $pst->type=$request->input('t');
        $pst->save();
        $request->session()->flash('status','departement was updated');
            return redirect()->route('alldep');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
       
        Departement::destroy($id);

        $request->session()->flash('status','post was deleted');
       return redirect()->route('alldep');
    }
}
