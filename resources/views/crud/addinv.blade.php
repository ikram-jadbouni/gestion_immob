@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<div class="bg-image"></div>
<div class="container">
<div class="card-body">
<form method="POST" action="{{route('addInv.store')}}">
 @csrf
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom inventaire:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="nomInv" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Valeur origine:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="valeurOr" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group row">
  <label  class="col-md-4 col-form-label text-md-right" for="inlineFormCustomSelectPref">Famille</label>
  <div class="col-md-6">
  <select class="custom-select my-1 mr-sm-2" name="famille" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    
    @foreach($imo as $im)
    <option value="{{$im->intitule}}"> {{$im->intitule}}</option>
    
   @endforeach
  </select></div>
</div>
         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date_acquisition :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="date"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
  <label  class="col-md-4 col-form-label text-md-right" for="inlineFormCustomSelectPref">Departement</label>
  <div class="col-md-6">
  <select class="custom-select my-1 mr-sm-2" name="departement" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    @foreach($imm as $im)
    <option value="{{$im->nom_departement}}"> {{$im->nom_departement}}</option>
    
   @endforeach
  </select></div>
</div>

 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Quantite :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="qte"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Code_barre :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="codeB"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<br>
  <center ><button type="submit" class="btn btn-success">Ajouter</button></center>
</form>
</div>
  
 
</body>
</html>
@endSection
