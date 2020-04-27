<?php
session_start();
?>
<?php
include("head.php");
?>
<body>
 <div  id="principal" class="container-fluid">
 <?php if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?>  
<?php  
include("bd_connection.php");
?>
<p class="float-right text-danger"> bienvenue </p>
 
  <section class="bg-light p-4 corps">
  <p class="bold text-danger"> Postes à Pourvoir à : </p>
   <div class="row">
   <div class="  col-md-12 col-xs-12 mb-4">
    <div id="carousel" class="carousel slide col-md-8 col-12 m-auto" data-ride="carousel">
     <div class="carousel-inner">
	 
      <div class="carousel-item active">
	   <div class="card p-2 ">
	    <h2 class="card-header"> Enko Ouaga Campus </h2>
	    <img class="card-img-top rounded " src="photos/phot1.png" title="sekou">
	   <div class="card-body">
	   <div class="card-text">
	   <p class="text-justify"> <strong> Enko Ouaga Campus</strong>, sis a Zogona recherche un <strong> un professeur de mathn </strong> <br/> <br/>
	   <h3> Minimum un BAC + 3 </h3>
	   <a class="btn btn-outline-primary" href="envoi_message.php?nom=gazambe&amp;prenom=sekou&amp;email=ibn_omar1@hotmail.fr"> <span class="fa fa-phone"> </span> contactez l'entreprise </a> <br/><br/>
	   <a class="btn btn-outline-warning" href="offre_liste.php"> <span class="fa fa-eye"></span> voir d'autres opportunites d'embauche </a> <br/>
	   </p>
	   </div>
	  </div>
	  </div>
	  
	 </div>
	 <div class="carousel-item">
	  <div class="card p-2">
	   <h2 class="card-header"> CS les Elites</h2>
	   <img class="card-img-top" src="photos/phot2.png" title="CS Les Elites">
	   <div class="card-body">
	    <div class="card-text">
	   <p class="text-justify"> <strong> Le CS les Elites</strong> cherche des enseignants dans les disciplines
	   :<strong> HG/ Francais.</strong><br/>
	    <h3> pays: Burkina Faso <br/> Ville: OHG </h3>
	   <a class="btn btn-primary" href="login.php"> <span class="fa fa-phone"> </span> contactez l'entreprise </a> <br/><br/>
	   <a class="btn btn-warning" href="login.php"> <span class="fa fa-eye"></span> voir d'autres opportunites ici </a> <br/>
	   </p>
	    </div>
	   </div>
	  </div>
	 </div>                          
	                           
	</div>             
   </div>
  </div>
  </div>
 <div class="row">
  <div class="col-12 pb-4">
   <p id="recherche_embauche" class="text-danger bold"> Recherche d'embauche : </p>        
  <div class="card-group mt-4">
    <div class="card p-2">
	    <h2 class="card-header"> Enseignement </h2>
	    <img class="card-img-top rounded " src="photos/cand1.png" title="sekou" height="200px">
	   <div class="card-body">
	   <div class="card-text">
	   <p class="text-justify">
	  <strong> Nom:</strong> gazambe <br/>
       <strong>Prenom :</strong> sekou <br/>
      <strong> Age :</strong> 26 ans <br/>
	  <strong>Diplome en : </strong> Anglais <br/>
	  recherche un boulot de <em> Enseignant </em>  <br/>
	   <a class="btn btn-outline-primary " href="login.php">  <span class="fa fa-file"></span>Voir le C.V  </a>
       <a class="btn btn-outline-warning float-right" href="envoi_message.php"> <span class="fa fa-phone"></span> Contactez le  </a> 
	   
	   </p>
	   </div>
	  </div>
	</div>
	<div class="card p-2">
	    <h2 class="card-header"> Comptabilite </h2>
	    <img class="card-img-top rounded " src="photos/cand2.png" title="sekou" height="200px">
	   <div class="card-body">
	   <div class="card-text">
	   <p class="text-justify">
	  <strong> Nom:</strong> Zongo <br/>
       <strong>Prenom :</strong> Nasirou <br/>
      <strong> Age :</strong> 29 ans <br/>
	  <strong>Diplome en : </strong> Finance <br/>
	  recherche un boulot de <em> comptabilite </em>  <br/>
	   <a class="btn btn-outline-primary " href="reception/cvdefaut.txt">  <span class="fa fa-file"></span>Voir le C.V  </a>
       <a class="btn btn-outline-warning float-right" href="envoi_message.php"> <span class="fa fa-phone"></span> Contactez le  </a> 
	   
	   </p>
	   </div>
	  </div>
	</div>
	
	<div class="card p-2">
	  <img class="card-img-top rounded " src="photos/blanc.jpg" title="connectez vous">
	   <div class="card-body">
	   <div class="card-text">
	   <p class="text-justify"><h5> Decouvrez des dizaines de C.V </h5> <br/>
      	   
	   <a class="btn btn-warning" href="demand_emploi.php"> <span class="fa fa-sign-in"></span>venez par ici </a> <br/>
	   
	   </p>
	   </div>
	  </div>
	 </div>
	  
   </div>
  </div>
 </div>
 </section>
  <?php 
 include('footer.php');
 ?>
 
 





<?php
include("pied_de_page.php");
?>