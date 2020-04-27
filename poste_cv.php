<?php
session_Start();
include("head.php");
?>
<body>
 <div class="container"> 
 <?php if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?>  
 

 
 <form class="col-md-12 bg-light" enctype="multipart/form-data" method="post" action="reception_cv.php">
  <p class="text-center bold text-danger" style="font-size:40px"> Envoyez votre demande d'emploi </p>
 
   <div class="form-group row ">
    <label for="nom" class="col-md-3 col-form-label bold"> Nom : </label>
     <div class="col-md-6">
     <input type="text" class="form-control" id="nom" name="nom" required >
     </div>
   </div>
   <div class="form-group row">
    <label for="prenom" class="col-md-3 col-form-label bold"> Prenom :</label>
     <div class="col-md-6">
      <input type="text" class="form-control" id="prenom" name="prenom" required >
     </div>
   </div>
   <div class="form-group row">
    <label for="age" class="col-md-3 col-form-label bold"> sexe  :</label>
     <div class="col-md-6  form-check form-check-inline">
	  <div class="col-md-6">
     <label class="form-check-label bold"> M </label>
	  <input type="radio" name="sexe" value="M" required  />
	  </div>
	  <div class="col-md-6">
	  <label class="form-check-label bold"> F </label>
	  <input type="radio" name="sexe" value="F" required />
	  </div>
	
    </div>
   </div>
    <div class="form-group row">
    <label for="age" class="col-md-3 col-form-label bold"> Age :</label>
     <div class="col-md-6">
	  <div class="input-group" >
	   <input type="number" class="form-control" id="age" min="16"  name="age">
	    <div class="input-group-append">
	    <span class="input-group-text"> ans </span>
	   </div>
      
     </div>
	  </div>
   </div>
   <div class="form-group row">
    <label for="domaine" class="col-md-3 col-form-label bold"> Domaine d'etude:</label>
     <div class="col-md-6">
      <select class="custom-select" id="domaine" name="domaine">
	   <option> quel est votre domaine d'etude ? </option>
	   <option> Litterature </option>
	   <option> Science  </option>
	   <option> informatique </option>
	   <option>Banque et Finance  </option>
	   <option> commerce </option>
	   <option> hotellerie </option>
	   <option> restauration </option>
	   <option> couture </option>
	   <option> Travaux manuels  </option>
	   <option> Neant  </option>
	   <option>Autre </option>
	  </select>
     </div>
   </div>

   <div class="form-group row" id="niveau_block">
    <label for="etude" class="col-md-3 col-form-label bold"> Niveau d'etude :</label>
     <div class="col-md-6">
      <select class="custom-select" id="etude" name="niveau">
	   <option> Choisissez un niveau </option>
	   <option> CEP </option>
	   <option> BEPC  </option>
	   <option> BEPE  </option>
	   <option>BAC </option>
	   <option>BAC+1 </option>
	   <option>BAC+2 </option>
	   <option>BAC+3 </option>
	   <option>BAC+4 </option>
	   <option>BAC+5 </option>
	   <option> Neant </option>
	  </select>
     </div>
   </div>
      <div class="form-group row">
    <label for="interet" class="col-md-3 col-form-label bold"> Interesse(e) par  :</label>
     <div class="col-md-6">
      <select class="custom-select" id="interet" name="interet">
	   <option> votre centre d'interet </option>
	   <option> Enseignement </option>
	   <option> comptabilite </option>
	   <option> Secretariat </option>
	   <option>Administration</option>
	   <option>Banque et Finance  </option>
	   <option> hotellerie </option>
	   <option> restauration </option>
	   <option> couture </option>
	   <option> travaux manuels </option>
	   <option> menagerie </option>
	   <option> vigile </option>
	   <option> Stage </option>
	   <option> Autre </option>
	  </select>
     </div>
   </div>
    <div class="form-group row" id="sub_row">
    <label for="matiere" class="col-md-3 col-form-label bold"> Matiere :</label>
    <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="matiere" name="matiere">
	   <option> Choisissez la matiere </option>
	   <option> Anglais </option>
	   <option> Allemand </option>
	   <option> Francais </option>
	   <option>Histoire/geo</option>
	   <option> Math </option>
	   <option> Physique-Chimie </option>
	   <option>Philosophie </option>
	   <option> Compabilite</option>
	    <option> droit </option>
		<option> Matieres techniques </option>
	  </select>
     </div>
   </div>
    <div class="form-group row" id="choix_block">
    <label for="choix" class="col-md-3 col-form-label bold"> precisez votre interet :</label>
     <div class="col-md-6">
      <input type="text"   class="form-control" id="choix" name="choix">
     </div>
   </div>
   <div class="form-group row">
    <label for="pays" class="col-md-3 col-form-label bold"> Pays :</label>
     <div class="col-md-6 col-sx-9">
       <input type="text" class="form-control" id="pays" name="pays"  required >
     </div>
   </div>
   <div class="form-group row">
    <label for="pays" class="col-md-3 col-form-label bold"> ville :</label>
     <div class="col-md-6 col-sx-9">
       <input type="text" class="form-control" id="pays" name="ville" required >
     </div>
   </div>
   <div class="form-group row">
    <label for="E-mail" class="col-md-3 col-form-label bold"> E-mail :</label>
     <div class="col-md-6 col-sx-9">
      <input type="email" class="form-control" name="email" id="email">
     </div>
   </div>
   <div class="form-group row">
    <label for="phone" class="col-md-3 col-form-label bold"> Numero de Telephone :</label>
     <div class="col-md-6 col-sx-9">
      <input type="number" class="form-control" name="phone" id="phone" required>
     </div>
   </div>
   <div class="form-group row">
    <label for="CV" class="col-md-3 col-form-label bold"> Ajouter votre C.V :</label>
     <div class="col-md-6 col-sx-9">
      <input type="file" class="form-control" name="cv" id="cv">
     </div>
   </div>
   <div class="form-group row">
    <label for="photo" class="col-md-3 col-form-label bold"> Ajouter une photo :</label>
     <div class="col-md-6 col-sx-9">
      <input type="file" class="form-control" id="photo" name="photo">
     </div>
   </div>
   <div class="form-group row">
    <label for="message" class="col-md-3 col-form-label bold"> Votre message :</label>
     <div class="col-md-6 col-sx-9">
      <textarea id="message" name="message" rows="6" cols="25" max="150"> Laissez un petit mot </textarea> 
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
 include('footer.php');
 ?>
 
 <script>
 var interet=document.getElementById('interet'),
 subject=document.getElementById('sub_row'),
 choix=document.getElementById('choix_block');
 
 document.onmousemove=function(){if(interet.value!=="Enseignement" && interet.value=="Autre"){
	 subject.className=" d-none"; choix.className="form-group row";
 } else if (interet.value!=="Autre" && interet.value=="Enseignement"){
	 subject.className="form-group row"; choix.className="d-none";
 }
 
 else {subject.className="d-none"; choix.className="d-none";}
 } ;
 
 
 
 
 </script>
 
 
 
 
 
 <?php
include("pied_de_page.php");
?>