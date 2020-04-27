<?php
session_start();
?>
<?php
include("head.php");
?>
<body class="bg-light">
 <div class="container-fluid"> 
  <?php include("bd_connection.php");?> 
 <?php if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?>  
<section class="mb-4">
<p class="bold">Secretariat </p>
 
 <div class="row">
 
  <div class="media col-md-10 col-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="photos/cand2.png" height="200px">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> Nassa <br/>
	 <strong>Prenom :</strong> Farida <br/>
	 <strong>Age:</strong> 21<br/>
	 <strong>Niveau d'Etude :</strong> Neant <br/>
	  <strong>recherche un boulot de secretaire </strong>
	 </p>
	 <p>
	<strong> je suis honnete</strong>
	 </P>
	 <p>
	 <a class="btn btn-primary" href="reception/cvdefaut.txt" > Voir mon C.V </a> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=Nassa&amp;prenom=farida &amp;email=farida@gmail.com" > Contactez moi </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de la demande : 
	 </p>
    
    </div>
  </div>
 </div> 
 
  
 
 </section>
 
 <section class="row">
  <p class="bold">Enseignement </p>
  <div class="card-columns col-12" >
	    <div class="card p-2 gris">
	  
	    <img class="card-img-top rounded " src="photos/cand1.png" title="kassoum" height="200px">
	     <div class="card-body">
	      <div class="card-text">
	       <p class="text-justify">
	       <strong> Nom:</strong> barry  <br/>
           <strong>Prenom :</strong> kassoum  <br/>
		   <strong>Sexe :</strong> M <br/>
           <strong> Age :</strong> 31  <br/>
	       <strong>Diplome en : </strong> chimie <br/>
		    <strong>Niveau : </strong> doctorat <br/>
		  <strong>recherche de la vacation en  :</strong> pc <br/>
		   <em> jai un bon niveau </em>
	        <br/> <br/> 
	        <a class="btn btn-outline-primary " href=""> Voir le C.V  </a>
      	    <a class="btn btn-outline-warning float-right" href="envoi_message.php?nom=barry &amp;prenom=kassoum" > Contactez le  </a> 
	   
	    </p>
	    </div>
	   </div>
	</div>
	<div class="card p-2 gris">
	  
	    <img class="card-img-top rounded " src="photos/cand2.png" title="nass" height="200px">
	     <div class="card-body">
	      <div class="card-text">
	       <p class="text-justify">
	       <strong> Nom:</strong> nass  <br/>
           <strong>Prenom :</strong> bceao  <br/>
		   <strong>Sexe :</strong> M <br/>
           <strong> Age :</strong> 31  <br/>
	       <strong>Diplome en : </strong> bf <br/>
		    <strong>Niveau : </strong> licence <br/>
		  <strong>recherche de la vacation en  :</strong> comptabilite <br/>
		   <em> je ne drague pas mes eleves </em>
	        <br/> <br/> 
	        <a class="btn btn-outline-primary " href=""> Voir le C.V  </a>
      	    <a class="btn btn-outline-warning float-right" href="envoi_message.php?nom=nass &amp;prenom=bceao" > Contactez le  </a> 
	   
	    </p>
	    </div>
	   </div>
	</div>
	
  
  </div>
 
 </section>
 <section class="row">
  <p class="bold">comptabilite </p>
    <div class="card-group mt-4 col-12 gris">
  
  
     <div class="card p-2 col-md-4 col-6">
	    <img class="card-img-top rounded " src="photos/cand1.png" title="">
	     <div class="card-body">
	      <div class="card-text">
	       <p class="text-justify"> <h4>
	       <strong> Nom:</strong> oued  <br/>
           <strong>Prenom :</strong> fatim <br/>
		   <strong>Sexe :</strong> f <br/>
           <strong> Age :</strong> 18 <br/>
	       <strong>Diplome en : </strong> bts<br/>
            recherche un boulot de comptable <br/>			
	        <br/> <br/> 
	        <a class="btn btn-outline-primary " href=""> Voir le C.V  </a>
      	    <a class="btn btn-outline-warning float-right" href="envoi_message.php?nom=fatim &amp;email="> Contactez le  </a> 
	   
	    </p>
	    </div>
	   </div>
	</div>
	<div class="card p-2 col-md-4 col-6">
	    <img class="card-img-top rounded " src="photos/cand1.png" title="">
	     <div class="card-body">
	      <div class="card-text">
	       <p class="text-justify"> <h4>
	       <strong> Nom:</strong> saw  <br/>
           <strong>Prenom :</strong> adama <br/>
		   <strong>Sexe :</strong> m <br/>
           <strong> Age :</strong>38 <br/>
	       <strong>Diplome en : </strong> audit<br/>
            recherche un boulot de audit <br/>			
	        <br/> <br/> 
	        <a class="btn btn-outline-primary " href=""> Voir le C.V  </a>
      	    <a class="btn btn-outline-warning float-right" href="envoi_message.php?nom=fatim &amp;email="> Contactez le  </a> 
	   
	    </p>
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