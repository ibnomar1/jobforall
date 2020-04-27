<?php
session_start();
?>

<?php
include("head.php");
?>
<body id="login">
 <div class="container"> 
 <?php
 // chaque feuille a son containeur et son body 
 include("entete.php");
 ?>
 <?php  
include("bd_connection.php");
?>

 <form class="col-md-6 login" method="post">
 <p id="mauvais_passe" class="text-center favori text-danger" style="font-size:40px"> Connectez vous pour aller plus loin </p>
 
  <div class="form-group row">
   <label for="pseudo" class="col-md-4 col-form-label"> pseudo ou E-mail </label>
    <div class="col-md-8">
   <input type="text" class="form-control" id="pseudo" name="email">
    </div>
  </div>
  <div class="form-group row">
   <label for="mot_de_passe" class="col-md-4 col-form-label"> Mot de Passe :</label>
    <div class="col-md-8">
   <input type="password" class="form-control" id="mot_de_passe" name="passe">
    </div>
  </div>

  <div class="form-group row">
   <div class="col">
   <input type="submit" id="button" class="btn btn-primary" value="soumettre"/>
   <p>Pas de compte ? Donc  <a class="btn btn-warning " href="creer_compte.php"> Creez en ! </a> </p>
  </div>
  </div>
  <div class="form-group row">
   <div class="col-6">
    <a class="btn btn-danger" href="#"> Mot de passe oublier ? </a>
   </div>
  </div>
 </form>
 
 
 <?php 
 function clean($donnees) {
	
	$donnees=trim($donnees);
	$donnees=stripslashes($donnees);
	$donnees=htmlspecialchars($donnees);
	return $donnees;
 }
 $email=!empty($_POST['email'])?$_POST['email']:NULL;
 $passe=!empty($_POST['passe'])?$_POST['passe']:NULL;
 $email=clean($email);
 $passe=clean($passe);
 
?>
<script> 
var passe=document.getElementById('mauvais_passe');
var button=document.getElementById('button');
 var myLogin= function() {
<?php	
 $requete=$bdd->prepare("SELECT id,pseudo,email,pays,statut  FROM individu WHERE email=:addresse AND passe=:mot_de_passe UNION SELECT id,nom,email,localite,statut FROM entreprise WHERE email=:addresse  AND passe=:mot_de_passe");
 $requete->execute(array('addresse'=>$email,'mot_de_passe'=>$passe));
 $result=$requete->fetch();
 if($result or isset($_SESSION['id'] )) {
	 
		$_SESSION['id']=$result['id'];
		$_SESSION['pseudo']=$result['pseudo']??$result['nom'];
		$_SESSION['email']=$result['email'];
		$_SESSION['pays']=$result['pays']??$result['localite'];
		$_SESSION['statut']=$result['statut'];
	 

 header('location:page_acceuil.php');
 
 } else {
?> 
passe.innerHTML="Desole ! le mot de passe et l'email ne correspondent pas";
<?php
 }
 ?>
};

button.onclick=myLogin;


 </script>

 <?php
include("pied_de_page.php");
?>