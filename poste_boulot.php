<?php
session_start();
?>
<?php
include("head.php");
?>
<body class="bg-light">
 <div class="container"> 
  <?php include("bd_connection.php");?> 
 <?php if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?>  
 
 <form class="col-md-12 bg-light" enctype="multipart/form-data" method="post" action="reception_boulot.php">
  <p class="text-center bold text-danger" style="font-size:40px"> Offrez un boulot </p>
 
   <div class="form-group row ">
    <label for="nom" class="col-md-3 col-form-label bold"> Nom : </label>
     <div class="col-md-6 col-sx-9">
     <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'entreprise ou de l'institut">
     </div>
   </div>
  <div class="form-group row">
    <label for="domaine" class="col-md-3 col-form-label bold"> Domaine d'intervention:</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="domaine" name="domaine">
	   <option> quel est votre domaine d'intervention ? </option>
	   <option> Enseignement </option>
	   <option> Sante </option>
	   <option> Gestion  </option>
	   <option> informatique </option>
	   <option>Banque et Finance  </option>
	   <option> Marketing </option>
	   <option> commerce </option>
	   <option> hotelerie </option>
	   <option> restauration </option>
	   <option> couture </option>
	   <option> securite </option>
	   <option> travaux manuels </option>
	   <option>Autre </option>
	  </select>
     </div>
   </div>
   <div class="form-group row">
    <label for="interet" class="col-md-3 col-form-label bold"> A la recherche de   :</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="interet" name="interet">
	   <option> que recherchez vous ? </option>
	   <option> Enseignant </option>
	   <option> comptable </option>
	   <option> agent de sante </option>
	   <option> Secretaire </option>
	   <option> commercial </option>
	   <option>menagere/aide-maison </option>
	   <option>caissier</option>
	   <option> gestionnaire/gerant(e)</option>
	    <option> cuisinier </option>
		<option> vigile </option>
		<option> ouvrier </option>
	   <option> Autre </option>
	  </select>
     </div>
   </div>
   <div class="form-group row" id="mat_block" >
    <label for="nom" class="col-md-3 col-form-label bold"> Choisissez  la matiere : </label>
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
    <label for="choix" class="col-md-3 col-form-label bold"> precisez ce que vous recherchez : </label>
     <div class="col-md-6 col-sx-9">
     <input type="text" class="form-control" id="choix" name="choix">
     </div>
   </div>
   <div class="form-group row">
    <label for="pays" class="col-md-3 col-form-label bold"> Pays :</label>
     <div class="col-md-6 col-sx-9">
      <select class="custom-select" id="pays" name="pays">
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
    <div class="form-group row ">
    <label for="ville" class="col-md-3 col-form-label bold"> Ville : </label>
     <div class="col-md-6 col-sx-9">
     <input type="text" class="form-control" id="ville" name="ville" >
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
      <input type="number" class="form-control" name="phone" id="phone">
     </div>
   </div>
   <div class="form-group row">
    <label for="photo" class="col-md-3 col-form-label bold"> Ajouter une photo de l'entreprise :</label>
     <div class="col-md-6 col-sx-9">
      <input type="file" class="form-control" id="photo" name="photo">
     </div>
   </div>
   <div class="form-group row">
    <label for="message" class="col-md-3 col-form-label bold"> Votre message :</label>
     <div class="col-md-6 col-sx-9">
      <textarea id="message" name="message" rows="6" cols="25" max="150"> plus de details ici </textarea> 
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
 subject=document.getElementById('mat_block'),
 choix=document.getElementById('choix_block');
 
 document.onmousemove=function(){if(interet.value!=="Enseignant" && interet.value=="Autre"){
	 subject.className=" d-none"; choix.className="form-group row";
 } else if (interet.value!=="Autre" && interet.value=="Enseignant"){
	 subject.className="form-group row"; choix.className="d-none";
 }
 
 else {subject.className="d-none"; choix.className="d-none";}
 } ;
 
 
 
 
 
	  
 </script>
 
 
 
 
 
 
 <?php
include("pied_de_page.php");
?>