<?php
include("head.php");
?>
<body>
 <div class="container"> 
 <?php
 // chaque feuille a son containeur et son body 
 include("entete.php");
 ?>
 
 <form class="col-md-12 bg-light" method="post" action="confirm_creat_entrep.php">
  <p class="text-center bold text-danger" style="font-size:40px"> Creer votre compte pour profiter de nombreuses mains d'oeuvres </p>
  <br/>
 
   <div class="form-group row ">
    <label for="nom" class="col-md-3 col-form-label bold"> Nom: </label>
     <div class="col-md-6 col-sx-9">
     <input type="text" class="form-control" id="nom" placeholder="nom de l'entreprise ou de l'institut" name="nom">
     </div>
   </div>
   <div class="form-group row">
    <label for="pays" class="col-md-3 col-form-label bold"> Localité:</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="pays" name="localite">
	   <option> Choisissez votre Localité </option>
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
    <label for="pays" class="col-md-3 col-form-label bold"> Domaine:</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="pays" name="domaine">
	   <option> Choisissez votre domaine d'intervention </option>
	   <option>Education </option>
	   <option>Sante</option>
	   <option>Mines et Carriere </option>
	   <option>L'Informatique </option>
	   <option>Banque et Finance </option>
	   <option>benevolat </option>
	   <option>commerce</option>
	   <option>restauration </option>
	   <option>mode et couture </option>
	    <option>Travaux manuels </option>
	   <option>Autre </option>
	  </select>
     </div>
   </div>
 
   <div class="form-group row">
    <label for="E-mail" class="col-md-3 col-form-label bold"> E-mail :</label>
     <div class="col-md-6 col-sx-9">
      <input type="email" class="form-control" id="email" name="email">
     </div>
   </div>
   <div class="form-group row">
    <label for="mot_de_passe" class="col-md-3 col-form-label bold"> Mot de passe :</label>
     <div class="col-md-6 col-sx-9">
      <input type="password" class="form-control" id="mot_de_passe" name="passe">
     </div>
   </div>
   <div class="form-group row">
    <label for="confirmer" class="col-md-3 col-form-label bold"> confirmer :</label>
     <div class="col-md-6 col-sx-9">
      <input type="password" class="form-control" id="confirmer" name="confirme">
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
  <br/>
  
  
 </form>
 
 
 
 
 
 <?php
include("pied_de_page.php");
?>