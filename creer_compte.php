<?php
include("head.php");
?>
<body>
 <div class="container"> 
 <?php
 // chaque feuille a son containeur et son body 
 include("entete.php");
 ?>
 
 <form class="col-md-12 bg-light" method="post" action="confirme_creation.php">
  <p class="text-center bold text-danger" style="font-size:40px"> Creer votre compte pour profiter de nombreuses opportunités </p>
  <p class="bold"> Pour les entreprises et les instituts <a class="btn btn-primary" href="compte_entreprise.php">  cliquez ici </a> </p> <br/>
 
   <div class="form-group row ">
    <label for="nom" class="col-md-3 col-form-label bold"> Nom : </label>
     <div class="col-md-6 col-sx-9" id="voir">
     <input type="text" class="form-control" id="nom" name="nom" required min="2" autocomplete >  
     </div>
	 
   </div>
   <div class="form-group row">
    <label for="prenom" class="col-md-3 col-form-label bold"> Prenom :</label>
     <div class="col-md-6 col-sx-9">
      <input type="text" class="form-control" id="prenom"  name="prenom" required min="2" autocomplete>
     </div>
   </div>
   <div class="form-group row">
    <label for="age" class="col-md-3 col-form-label bold"> sexe  :</label>
     <div class="col-md-6 col-sx-9 form-check form-check-inline">
	  <div class="col-md-6">
     <label class="form-check-label bold"> M </label>
	  <input type="radio" name="sexe" value="M" required />
	  </div>
	  <div class="col-md-6">
	  <label class="form-check-label bold"> F </label>
	  <input type="radio" name="sexe" value="F"  required />
	  </div>
	
    </div>
   </div>
    <div class="form-group row">
    <label for="age" class="col-md-3 col-form-label bold"> Age :</label>
     <div class="col-md-6 col-sx-9">
	  <div class="input-group" >
	   <input type="number" class="form-control" id="age" min="15"  name="age" required >
	    <div class="input-group-append">
	    <span class="input-group-text"> ans </span>
	   </div>
      
     </div>
	  </div>
   </div>
   <div class="form-group row">
    <label for="pays" class="col-md-3 col-form-label bold"> Pays :</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="pays" name="pays">
	   <option> Choisissez votre pays </option>
	   <option>Burkina Faso </option>
	   <option>Benin </option>
	   <option>Cote D'Ivoire </option>
	   <option>Ghana </option>
	   <option>Niger </option>
	   <option>Nigeria </option>
	   <option>Autre </option>
	  </select>
     </div>
   </div>
   <div class="form-group row">
    <label for="pseudo" class="col-md-3 col-form-label bold"> Pseudo :</label>
     <div class="col-md-6 col-sx-9">
      <input type="text" class="form-control" id="pseudo"  name="pseudo" placeholder="optionel">
     </div>
   </div>
   <div class="form-group row">
    <label for="E-mail" class="col-md-3 col-form-label bold"> E-mail :</label>
     <div class="col-md-6 col-sx-9">
      <input type="email" class="form-control" id="email"  name="email" required >
     </div>
   </div>
   <div class="form-group row">
    <label for="mot_de_passe" class="col-md-3 col-form-label bold"> Mot de passe :</label>
     <div class="col-md-6 col-sx-9">
      <input type="password" class="form-control" id="mot_de_passe"  name="passe" required>
     </div>
   </div>
   <div class="form-group row">
    <label for="confirmer" class="col-md-3 col-form-label bold"> confirmer le mot de passe :</label>
     <div class="col-md-6 col-sx-9">
      <input type="password" class="form-control" id="confirmer" name="confirme" required>
     </div>
   </div>
   <br/>
  

  <div class="form-group row">
   <div class="col-md-3">
    <input  type="submit" class="btn btn-primary " value="Envoyer" />
    
  </div>
  <div class="col-md-3">
    <input  type="reset" class="btn btn-warning " value="Reinitialiser" />
    
  </div>
  </div>
  
  
 </form>
 
 
 
 
 
 <?php
include("pied_de_page.php");
?>

