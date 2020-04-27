<?php
session_start();
?>
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
$prenom=!empty($_POST['prenom'])?$_POST['prenom']:NULL;
$age=!empty($_POST['age'])?$_POST['age']:NULL;
$sexe=!empty($_POST['sexe'])?$_POST['sexe']:NULL;
$pays=!empty($_POST['pays'])?$_POST['pays']:NULL;
$localite=!empty($_POST['localite'])?$_POST['localite']:NULL;
$domaine=!empty($_POST['domaine'])?$_POST['domaine']:NULL;
$confirme=!empty($_POST['confirme'])?$_POST['confirme']:NULL;
$passe=!empty($_POST['passe'])?$_POST['passe']:NULL;
$pseudo=!empty($_POST['pseudo'])?$_POST['pseudo']:NULL;
$email=!empty($_POST['email'])?$_POST['email']:NULL;
// je nettoie les donnees maintenant
$age=clean($age);
$nom=clean($nom);
$prenom=clean($prenom);
$sexe=clean($sexe);
$pays=clean($pays);
$localite=clean($localite);
$domaine=clean($domaine);
$confirme=clean($confirme);
$passe=clean($passe);
$pseudo=clean($pseudo);
$email=clean($email);


 if(isset($nom) AND isset($prenom) AND isset($age) AND isset($sexe) AND isset($pays) AND $pays!=="Choisissez votre pays" AND 
    isset($pseudo)  AND isset($email) AND isset($passe) AND isset($confirme) AND $passe==$confirme ) {

		
  $membre="INSERT INTO individu (nom,prenom,age,sexe,pays,pseudo,email,passe,dte_inscrip) VALUES
  (:nom,:prenom,:age,:sexe,:pays,:pseudo,:email,:passe,CURDATE())";
   $datas=array(
   ':nom'=>$nom,
   ':prenom'=>$prenom,
   ':age'=>$age,
   ':sexe'=>$sexe,
   ':pays'=>$pays,
   ':pseudo'=>$pseudo,
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
//apres avoir insere les donnees on reverifie dans la bd pour permettre au user de connecter immediatement
  $requete=$bdd->prepare("SELECT id,email,pseudo FROM individu WHERE email=:addresse AND passe=:mot_de_passe UNION SELECT id,email,nom FROM entreprise WHERE email=:addresse  AND passe=:mot_de_passe");
 $requete->execute(array('addresse'=>$email,'mot_de_passe'=>$passe));
 $result=$requete->fetch();
 if($result or isset($_SESSION['id']) ) {
	 $_SESSION['id']=!empty($result['id'])?$result:NULL;
  $_SESSION['pseudo']=$result['pseudo']??$result['nom'];
  $_SESSION['email']=$result['email'];
  $_SESSION['passe']=!empty($result['id'])?$result:NULL;
  
echo  '<p class="bold text-danger"> Votre compte a été  creé avec succès. <a class="btn btn-primary" href="page_acceuil_connecte.php" >Connectez vous dès maintenant</a> </p>';
  

   
 
	} else {
		echo '<p class="bold text-danger">le pseudo choisi existe deja</p>';
	}
	} else {
		echo '<p class="bold text-danger">renseignez correctement tous les champs</p>';
	}
	
			
	?>






<?php
include("pied_de_page.php");
?>
