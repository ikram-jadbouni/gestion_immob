@extends('layouts.app2')
@section('content')


<table class="table">
  <thead class="table-secondary">
  <tr>
    <th>#</th>
    <th>nomDepartement</th>
    <th>numero</th>
    <th>nombreEmploye</th>
    <th>Emplacement</th>
    <th>Type</th>
    <th>created_at</th>
    <th>updated_at</th>
    <th>
    </th>
    <th>
    </th>
    
  </tr></thead>
  @foreach($imm as $im)
  <tr >
    <td> {{$im->id}}</td>
    <td> {{$im->nom_departement}}</td>
    <td> {{$im->numero}}</td>
    <td> {{$im->nbr_employe}}</td>
    <td> {{$im->emplacement}}</td>
    <td> {{$im->type}}</td>
    <td> {{$im->created_at}}</td>
    <td> {{$im->updated_at}}</td>
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

<a href="{{ url('/crud') }}"><img style="width:5%" src="img/58.jpg"></a>
<em  style="color:#F1CA27"><b>Pour ajouter un nouveau departement</b></em>
@endsection