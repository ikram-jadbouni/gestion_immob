@extends('layouts.app2')
@section('content')



        <center><h2><em>Modifier Departement</em></h2></center>

<hr>
<div class="card-body">
<form method="POST"   action="{{route('crud.update',$pst->id)}}">
@method('PUT')
@csrf
    <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">Nom Departement :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="f" value=" {{$pst->nom_departement}} " required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">numero :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="i" value=" {{$pst->numero}} " required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre Employe :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="r" value="{{$pst->nbr_employe}}" required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Emplacement :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="s" value="{{$pst->emplacement}} " required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Type :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="t" value="{{$pst->type}} " required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    <center ><button type="submit" class="btn btn-success">Modifier</button></center>
</form>
</div>
    <!-- <p>status :
       @if ($pst ->active)
       Enabled
       @else
       Disabled
       @endif
    
    </p> -->
@endsection