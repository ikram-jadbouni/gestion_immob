@extends('layouts.app2')
@section('content')
<body>

<div class="container">
<div class="card-body">
<form method="POST" action="{{route('famille.store')}}">
 @csrf
 <center>      
     <h2 style="color:#2980B9">Ajouter une famille du bien</h2>
 </center>
 <hr/>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Intitule:') }}</label>

                            <div class="col-md-6"> 
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="intitule" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
@endsection