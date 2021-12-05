@extends('layouts.app2')
@section('content')


<table class="table">
  <thead class="table-secondary">
  <tr>
    <th>#</th>
    <th>NomInventaire</th>
    <th>valeurOrigine</th>
    <th>famille</th>
    <th>Datecquisition</th>
    <th>Departement</th>
    <th>Quantite</th>
    <th>codeBarre</th>
    <th>created_at</th>
    <th></th>
    <th></th>
    
  </tr></thead>
  @foreach($imm as $im)
  <tr >
    <td> {{$im->id}}</td>
    <td> {{$im->nom_inventaire}}</td>
    <td> {{$im->valeur_origine}}</td>
    <td> {{$im->famille}}</td>
    <td> {{$im->date_acquisition}}</td>
    <td> {{$im->departement}}</td>
    <td> {{$im->quantite}}</td>
    <td> {{$im->code_barre}}</td>
    <td> {{$im->created_at->diffForHumans()}}</td>
    <td><a href="{{ route('crud.show',$im->id) }}"> <button type="button" class="btn btn-info" >Modifier</button></a></td>
    <form method="POST" action="{{ route('crud.destroy',$im->id) }}">
@method('DELETE')
@csrf
    <td>   <input type="submit" class="btn btn-danger" value="Supprimer">
  </td>
</form>
  </tr>
  @endforeach
  
</table>

<button type="button" class="btn btn-info" >imprimer</button>
<br>

<a href="{{ url('/add') }}"><img style="width:5%" src="img/58.jpg"></a>
<em  style="color:#F1CA27"><b>Pour ajouter un nouveau inventaire</b></em>
@endsection