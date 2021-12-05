@extends('layouts.app2')
@section('content')
<center><h2><em>Vos info personnel</em></h2></center>

<hr>
<div class="card-body">
@csrf
    <div class="form-group row">
                           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="firstname" value="{{ Auth::user()->name}} " required autocomplete="name" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="firstname" value="{{ Auth::user()->email}} " required autocomplete="name" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('created_at') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="firstname" value="{{ Auth::user()->created_at}} " required autocomplete="name" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('updated_at') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="firstname" value="{{ Auth::user()->updated_at}} " required autocomplete="name" readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
</div>

@endsection