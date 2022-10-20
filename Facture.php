<html>
<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script></head>


</head>
 <script>
 function calcul(){
            var a= parseFloat(document.getElementById("N1").value);
            var b= parseFloat(document.getElementById("N2").value);
            var b23= parseFloat(document.getElementById("N3").value);
            var a1= parseFloat(document.getElementById("N4").value);
            var b2= parseFloat(document.getElementById("N5").value);
            var a3= parseFloat(document.getElementById("N6").value);
            var b3= parseFloat(document.getElementById("N7").value);
            var a4= parseFloat(document.getElementById("N8").value);
            var b4= parseFloat(document.getElementById("N9").value);
            var a5= parseFloat(document.getElementById("N10").value);
            var b5= parseFloat(document.getElementById("N11").value);
            var a6= parseFloat(document.getElementById("N12").value);
            var b6= parseFloat(document.getElementById("N13").value);
            var a7= parseFloat(document.getElementById("N14").value);
            var b7= parseFloat(document.getElementById("N15").value);
            var a8= parseFloat(document.getElementById("N16").value);
            var b8= parseFloat(document.getElementById("N17").value);
            var a9= parseFloat(document.getElementById("N18").value);
            var b9= parseFloat(document.getElementById("N19").value);
            var a10= parseFloat(document.getElementById("N20").value);
            var b10= parseFloat(document.getElementById("N21").value);
            var a11= parseFloat(document.getElementById("N22").value);
            var b11= parseFloat(document.getElementById("N23").value);
            var a12= parseFloat(document.getElementById("N24").value);
            var b12= parseFloat(document.getElementById("N25").value);
            var a13= parseFloat(document.getElementById("N26").value);
            var b13= parseFloat(document.getElementById("N27").value);
            var a14= parseFloat(document.getElementById("N28").value);
            var b14= parseFloat(document.getElementById("N29").value);
            var a15= parseFloat(document.getElementById("N30").value);
            var b15= parseFloat(document.getElementById("N31").value);
			            var w= parseFloat(document.getElementById("N32").value);
						            var t= parseFloat(document.getElementById("N33").value);


            var a16= parseFloat(document.getElementById("N34").value);
            var b16= parseFloat(document.getElementById("N35").value);
            var a17= parseFloat(document.getElementById("N36").value);
            var b17= parseFloat(document.getElementById("N37").value);
            var a18= parseFloat(document.getElementById("N38").value);
            var b18= parseFloat(document.getElementById("N39").value);
            var a19= parseFloat(document.getElementById("N40").value);
            var b19= parseFloat(document.getElementById("N41").value);
            var a20= parseFloat(document.getElementById("N42").value);
            var b20= parseFloat(document.getElementById("N43").value);
            var a21= parseFloat(document.getElementById("N44").value);
            var b21= parseFloat(document.getElementById("N45").value);
            var a22= parseFloat(document.getElementById("N46").value);
            var b22= parseFloat(document.getElementById("N47").value);
            var a23= parseFloat(document.getElementById("N48").value); 
                 
			
            document.getElementById("N49").value=a+b23+b2+b3+b4+b5+b6+b7+b8+b9+b10+b11+b12+b13+b14+b15+b16+b17+b18+b19+b20+b21+b22+t;
			            document.getElementById("N50").value=b+a1+a3+a4+a5+a6+a7+a8+a9+a10+a11+a12+a13+a14+a15+a16+a17+a18+a19+a20+a21+a22+a23+w;
document.getElementById("N52").value=a+b23+b2+b3+b4+b5+b6+b7+b8+b9+b10+b11+b12+b13+b14+b15+b16+b17+b18+b19+b20+b21+b22+t;
 var k= parseFloat(document.getElementById("N49").value);
            var m= parseFloat(document.getElementById("N50").value); 
document.getElementById("N54").value=k*0.25;
var n= parseFloat(document.getElementById("N54").value);
document.getElementById("N56").value=(k+n)*0.2;
            var o= parseFloat(document.getElementById("N56").value); 
			document.getElementById("N58").value=k+m+n+o;


        } 
		
		</script>
<style>
 #loading{
  width: 100%;
  height: 100vh;
  background:#fff 
  url('gis.gif')no-repeat  center;
background-size: 20%;
  z-index:99999 ;
  
}
fieldset{background-color: rgb(39, 147, 7);opacity:0.5;;border-radius: 20px ;}
 .tt{font-weight: bold;font-size: large;color: hsl(0, 0%, 100%);}
 
 button{font-size: 35px;border-radius: 10px;font-style:italic;font-weight: bold;}
.ms:hover{background-color:greenyellow;box-shadow:10px 10px;color:white;}
.ml:hover{background-color:rgb(47, 224, 255);box-shadow:black 5px 5px;color:white;}
.mp:hover{background-color:red;box-shadow:black 5px 5px;color:white;}

table{font-weight: bold;font-style:italic;}
input{font-weight: bold;font-style:italic;}


 </style>
<body onload="myFunction()" >
	<div id="loading"> 
     
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="somatimepage1.php">Acceuil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="somatimepage1.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Facture.php">Facture</a>
        </li>
         <li class="nav-item">
<a class="nav-link" href="imprime.php">Historique de personnalisation</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<form method="post" action="imprime3.php">
<center>
<fieldset>
<table class="tt"><tr><td>
<textarea id="text1" name="Nomcomp"></textarea></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facture n°:<input type="Text" id="a1" name="Numfactur"></td><tr>
<tr><td>M/V<input type="Text" id="a2"name="MV">DU<input type="Text" name="DU"id="a3">CNT N°<input type="Text" name="CNTN"id="a4"></td><td>Dest. /Prev. :<input type="Text" name="DestPrev"id="a4"></td><tr>
<tr><td>Nombre de colis, Marques et N°<input type="Text" name="NombreN"id="a5"></td><td>Poids :<input type="Text" name="Poids"id="a6"></td><tr>
<tr><td>EXPEDITEUR : <input type="Text" name="EXPEDITEUR"id="a7"></td><td>DUM N° :<input type="Text" name="DUMN"id="a8"></td><tr>
<tr><td colspan="2">DESTINATAIRE :<input type="Text" name="DESTINATAIRE"id="a7"></td></tr>
</table>
</fieldset>
<table class="table table-hover"border=2>
<tr><td></td><td>Soumis à la taxe</td><td>Non Soumis à la taxe</td></tr>
<tr class="table-active"><td>Frais de visite</td><td><input type="float" id="N1" value="0"></td><td><input type="Number" id="N2"value="0"></td></tr>
<tr class="table-primary"><td>Lettres de réserves, recommandés papiers timbrés, télégr</td><td><input type="Number" id="N3"value="0"></td><td><input type="Number" id="N4"value="0"></td></tr>
<tr class="table-secondary"><td>Droits et taxes répercuté à l'identique</td><td><input type="Number" id="N5"value="0"></td><td><input type="Number" value="0"id="N6"></td></tr>
<tr class="table-success"><td>Sur valeur Imposable de DH</td><td><input type="Number" id="N7"value="0"></td><td><input type="Number" id="N8"value="0"></td></tr>
<tr class="table-danger"><td>Dont Taxe sur les produits ……………..</td><td><input type="Number" value="0"id="N9"></td><td><input type="Number" value="0"id="N10"></td></tr>
<tr class="table-warning"><td>Droit et taxes sur excedant</td><td><input type="Number" value="0"id="N11"></td><td><input type="Number"value="0" id="N12"></td></tr>
<tr class="table-info"><td>Aconage, stationnement et notes de frais ODEP Répercuté a lidentique</td><td><input type="Number" value="0"id="N13"></td><td><input type="Number" value="0"id="N14"></td></tr>
<tr class="table-light"><td>Aconage,AD. Marsa Maroc Répercuté a lidentique</td><td><input type="Number" id="N15"value="0"></td><td><input type="Number" value="0"id="N16"></td></tr>
<tr class="table-dark"><td>Honoraire d'agrée en douane</td><td><input type="Number" id="N17"value="0"></td><td><input type="Number" id="N18"value="0"></td></tr>
<tr class="table-active"><td>Taxe de péage répercuté à l’identique </td><td><input type="Number" id="N19"value="0"></td><td><input type="Number" value="0"id="N20"></td></tr>
<tr class="table-primary"><td>Droit de sejour au parc  ANP</td><td><input type="Number" id="N21"value="0"></td><td><input type="Number" value="0"id="N22"></td></tr>
<tr class="table-secondary"><td>SODEP</td><td><input type="Number" value="0"id="N23"></td><td><input type="Number"value="0" id="N24"></td></tr>
<tr class="table-success"><td>Heures supplémentaires </td><td><input type="Number"value="0" id="N25"></td><td><input type="Number" value="0"id="N26"></td></tr>
<tr class="table-danger"><td>Désarimage	(Stevedoring)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T.R Douane</td><td><input type="Number" value="0"id="N27"></td><td><input type="Number"value="0" id="N28"></td></tr>
<tr class="table-warning"><td>Trans. Quai/Parcel/Quai</td><td><input type="Number"value="0" id="N29"></td><td><input value="0"type="Number" id="N30"></td></tr>
<tr class="table-info"><td>Over time sauterel  Marsa Maroc</td><td><input type="Number" value="0"id="N31"></td><td><input type="Number" value="0"id="N32"></td></tr>
<tr class="table-light"><td>LOCATION  MAD (Marsa Maroc)</td><td><input type="Number" value="0"id="N33"></td><td><input type="Number"value="0" id="N34"></td></tr>
<tr class="table-light"><td>Timbre</td><td><input type="Number" id="N35"value="0"></td><td><input type="Number" value="0"id="N36"></td></tr>
<tr class="table-dark"><td>Redevance informatque</td><td><input type="Number" value="0"id="N37"></td><td><input type="Number" value="0"id="N38"></td></tr>
<tr class="table-active"><td>Location engins (élévateur SODEP) répércuté à lidentique</td><td><input type="Number" value="0"id="N39"></td><td><input type="Number"value="0" id="N40"></td></tr>
<tr class="table-primary"><td>CAENETS MARSA MAROC </td><td><input type="Number" value="0"id="N41"></td><td><input type="Number" value="0"id="N42"></td></tr>
<tr class="table-secondary"><td>Arrimage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(répércuté à lidentique)</td><td><input type="Number"value="0" id="N43"></td><td><input type="Number" value="0"id="N44"></td></tr>
<tr class="table-success"><td>Magasinage&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marsa Maroc ( 02 Factures)</td><td><input type="Number" value="0"id="N45"></td><td><input type="Number"value="0" id="N46"></td></tr>
<tr class="table-danger"><td>Pesage Marsa Maroc répércuté à lidentique</td><td><input type="Number"value="0" id="N47"></td><td><input type="Number" value="0"id="N48"></td></tr>
<tr class="table-warning"><td>Totaux</td><td><input type="float" id="N49"value="0"></td><td><input type="float"value="0" id="N50"></td></tr>
<tr class="table-info"><td>Report soumis à la taxe</td><td></td><td><input type="float" value="0"id="N52"name="Reportsoumistaxe"></td></tr>
<tr class="table-light"><td>Taxe REG.2,5%</td><td></td><td><input type="float " value="0"id="N54"name="TaxeREG"></td></tr>
<tr class="table-light"><td>taxe de transaction TVA</td><td></td><td><input type="float" value="0"id="N56"name="TVA"></td></tr>
<tr class="table-dark"><td>TOTAL GENERAL S.E.O.O</td><td></td><td><input type="float"value="0" id="N58"name="TOTALGENERAL"></td></tr>

</table>
<button type="submit"class="ml"onclick="submit()"name="submit">Ajouter</button> 

</form>
<br>
<script>
   var preloader = document.getElementById("loading");
function myFunction()
{
    preloader.style.display ='none';
  }
</script>
<iframe width="0" height="0" src=" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="0" height="0" src="https://www.youtube.com/embed/-NRAe1WeFxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<table><tr><td><center><button onclick="calcul()"type="button"class="ms">calcule</button></center></td><td><center><button onclick="calcul()"type="reset"class="mp">Annuler</button></center></td></tr></table>



</body>
</html>