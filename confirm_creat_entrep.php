<?php
include("head.php");
?>
<body class="gris">
 <div class="container">
<?php include("bd_connection.php");?> 
 <?php
 // chaque feuille a son containeur et son body 
 include("entete.php");
 ?>
<?php 
//la fonction pour securiser les donnees de l\'utilisateur


function clean($donnees) {
	
	$donnees=trim($donnees);
	$donnees=stripslashes($donnees);
	$donnees=htmlspecialchars($donnees);
	return $donnees;
}
$nom=!empty($_POST['nom'])?$_POST['nom']:NULL;
$localite=!empty($_POST['localite'])?$_POST['localite']:NULL;
$domaine=!empty($_POST['domaine'])?$_POST['domaine']:NULL;
$confirme=!empty($_POST['confirme'])?$_POST['confirme']:NULL;
$passe=!empty($_POST['passe'])?$_POST['passe']:NULL;
$email=!empty($_POST['email'])?$_POST['email']:NULL;
// je nettoie les donnees maintenant

$nom=clean($nom);
$localite=clean($localite);
$domaine=clean($domaine);
$confirme=clean($confirme);
$passe=clean($passe);
$email=clean($email);

if(isset($nom) AND isset($localite) AND $localite!=="Choisissez votre Localité" AND 
  isset($email) AND isset($passe) AND isset($confirme) AND $passe==$confirme ) {
$request=$bdd->prepare('SELECT id FROM entreprise WHERE email=:adresse');
		$request->execute(array("adresse"=>$email));
		$result=$request->fetch();
		if(!$result) {
		
  $membre="INSERT INTO entreprise (nom,localite,domaine,email,passe,dte_inscrip) VALUE
  (:nom,:localite,:domaine,:email,:passe,CURDATE())";
   $datas=array(
   ':nom'=>$nom,
   ':localite'=>$localite,
   ':domaine'=>$domaine,
   ':email'=>$email,
   ':passe'=>$passe,
  
   
   );
	 
	try{
		$requete=$bdd->prepare($membre);
		$requete->execute($datas);
	}catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($datas);
		
}
 
	}
if(isset($datas)) {
		echo  '<p class="bold text-danger"> Votre compte a été  creé avec succès. <a class="btn btn-primary" href="login.php">Connectez vous dès maintenant</a> </p>';
	
	}	else {
		echo '<p class="bold text-danger">Desole ! l\'Email choisi existe déja. Reessayez avec un autre</p>';
	}
  } else {
	  echo '<p class="bold text-danger"> Echec ! vous devez renseigner correctement tous les champs </p>';
  }
	
	
	?>






<?php
include("pied_de_page.php");
?>
