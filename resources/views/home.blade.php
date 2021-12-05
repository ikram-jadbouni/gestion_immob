@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<style>
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
body, html {
  height: 90%;
  margin: 0;
 
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
/* blur image _______________________________________________________*/
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 160%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<!-- 
<ul>
<li style="background-color:#F1CA27"><a href="/acc">Stock&co</a></li> &nbsp
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="/contact">Contact</a></li>
  <li style="float:right"><a class="active" href="/connexion">Se connecter</a></li>
</ul> -->
<div >
<p  >
<img style="float:right ;" src="img/inventaire.jpg" >    
</p> <div  style="color:white;;"> <table>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
    <ul class="h"> &nbsp;  </ul>
  <center>  <ul class="h" style=" font-size:25px ;position:center;font-family:'Courier New'"> <em> Gerer facilement vos immobilisations avec des codes barres<br><br></em></ul></center>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <ul class="h"> &nbsp;  </ul>
  <p class="h"></p>
 
</table></div></div>
<table >
<tr>
            <td ><img style=" width:25%"  src="img/icon.png" ><em style="margin-top:50%">	Gestion<br>  d’inventaire </em></td>
            <td ><img style=" width:25%"  src="img/demo.png" ><em style="margin-top:50%">	Gestion<br>  foret </em></td>
            <td ><img style=" width:30%"  src="img/khdra.jpeg" ><em style="margin-top:50%"> gestion<br> familles de biens </em></td>
            <td ><img style=" width:25%"  src="img/pc.jpeg" ><em style="margin-top:50%">distribution et exploitation  <br>des immobilisation dans l'entreprise </em></td>
            <td ><img style=" width:20%"  src="img/khel.png" ><em style="margin-top:50%"> Maniabilité et personnification <br>des immobilisation avec leurs code barre 
 </em></td>



        </tr>
</table><br><br><br><br><br><br><br><br><br><br><br><br>

<p style="height:50%" ><img style="width:100%;margin-top:-18%;filter: blur(8px);
  -webkit-filter: blur(8px);" src="img/img2.png" >  </p>

<div class="bg-text">
  <h2>
 Vous trouver des difficultés a gérer vos fourniture? Vous en avez marre de feuilleter votre inventaire physiquement? 
Nous vous proposons la gestion virtuelle de votre stock d’immobilisation, via les fonctionnalités les plus vifs et efficace, vous auriez la main pour ajouter ,modifier et supprimer un bien immobilier selon votre envie.
Vous aurez aussi la possibilité de faire en sorte que votre suivie gestionnaire de votre stock sois moins désagréable . 
Vous aurez a votre disposition l’intégralité de la visualisation de votre inventaire en un seul click. Nous proposant aussi de gerer votre forêt informatique et la distribution de vos matériaux selon l’organigramme de votre firmes que vous sélectionnerais dans vos débuts d’utilisation de notre application web.</h2>

  <h3>Vous pourriez même exporter votre inventaire via une sortie fichier excel où bien une impression sur papier.</h3>
</div>

</body>
</html>
@endSection