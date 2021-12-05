@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <style>
body, html {
  height: 90%;
  margin: 0;
 
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("img/inventory.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
 
  color: black;
  font-weight: bold;
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

/*body*/


input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color:black;
  
  background: transparent;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
/*menu*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
.h{
    background-color: #1C4354;
}

</style> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<div class="bg-image"></div>
<div class="container">

<!-- <form method="POST" action="{{route('acc.store')}}">
@csrf
<div class="bg-text">
<label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="Maroc">Maroc</option>
      <option value="France">France</option>
      <option value="usa">USA</option>
    </select><br>

    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<br>
    <input type="submit"  class="btn btn-success" value="Envoyer">
</div>
</form> -->
<div class="card-body">
<form method="POST" action="{{route('acc.index')}}">
 @csrf
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"  name="firstname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
      <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname"  value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  <div class="form-group row">
  <label  class="col-md-4 col-form-label text-md-right" for="inlineFormCustomSelectPref">Preference</label>
  <div class="col-md-6">
  <select class="custom-select my-1 mr-sm-2" name="country" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="Maroc">Maroc</option>
    <option value="France">France</option>
    <option value="USA">USA</option>
  </select></div>
</div>
<div  class="form-group row">
    <label class="col-md-4 col-form-label text-md-right" for="subject">Subject</label><br>
    <div class="col-md-6"><textarea id="subject"  class="form-control @error('name') is-invalid @enderror" name="subject" placeholder="Write something.." style="height:200px;width:520px"></textarea></div>
</div><br>
  <center ><button type="submit" class="btn btn-success">Envoyer</button></center>
</form>
</div>
  
 
</body>
</html>
@endSection
