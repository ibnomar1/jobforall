<?php
session_Start();
include("head.php");
?>
<body>
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
 <?php
 // chaque feuille a son containeur et son body 
 include("entete_connect.php");
 ?>
<?php 
 $error = NULL;
$filename = NULL;
if (isset($_FILES['cv']) &&
$_FILES['cv']['error'] === 0) {
$cvname = $_FILES['cv']['name'];
$cvpath = getcwd() . '/reception/' . $cvname; 
// On déplace le fichier depuis le répertoire temporaire vers $targetpath
if (move_uploaded_file($_FILES['cv']['tmp_name'], $cvpath)) { // Si ça fonctionne
$error = 'OK'; 
} else { // Si ça ne fonctionne pas
$error = "Échec de l'enregistrement !";
}
} 
else {
$error = 'Aucun fichier réceptionné !'; 
}

if (isset($_FILES['photo']) &&
$_FILES['photo']['error'] === 0) {
$photoname = $_FILES['photo']['name'];
$photopath = getcwd() . '/reception/' . $photoname;
// On déplace le fichier depuis le répertoire temporaire vers $targetpath
if ( is_uploaded_file( $_FILES['photo']['tmp_name']) && move_uploaded_file($_FILES['photo']['tmp_name'], $photopath) ) { // Si ça fonctionne
$error = 'OK'; 
} else { // Si ça ne fonctionne pas
$error = "Échec de l'enregistrement !";
}
} else {
$error = 'Aucune photo réceptionnée !'; 
}



$nom=!empty($_POST['nom'])?$_POST['nom']:NULL;
$prenom=!empty($_POST['prenom'])?$_POST['prenom']:NULL;
$sexe=!empty($_POST['sexe'])?$_POST['sexe']:NULL;
$age=!empty($_POST['age'])?$_POST['age']:NULL;
$niveau=!empty($_POST['niveau'])?$_POST['niveau']:NULL;
$domaine=!empty($_POST['domaine'])?$_POST['domaine']:NULL;
$niveau=!empty($_POST['niveau'])?$_POST['niveau']:NULL;
$interet=!empty($_POST['interet'])?$_POST['interet']:NULL;
$niveau=!empty($_POST['niveau'])?$_POST['niveau']:NULL;
$matiere=!empty($_POST['matiere'])?$_POST['matiere']:NULL;
$choix=!empty($_POST['choix'])?$_POST['choix']:NULL;
$pays=!empty($_POST['pays'])?$_POST['pays']:NULL;
$phone=!empty($_POST['phone'])?$_POST['phone']:NULL;
$email=!empty($_POST['email'])?$_POST['email']:NULL;
$message=nl2br(!empty($_POST['message'])?$_POST['message']:NULL);
$ville=!empty($_POST['ville'])?$_POST['ville']:NULL;
$photoname = !empty($_FILES['photo']['name'])?$_FILES['photo']['name']:'avatar.jpg';// les variables ci-dessus ne sont pas accessibles
//au cas ou la photo n'existe pas, on prend l'avatar
$photopath = 'reception/' . $photoname;
$cvname=!empty($_FILES['cv']['name'])?$_FILES['cv']['name']:'cvdefaut.txt';
$cvpath = 'reception/' . $cvname;
//insertion du CV




if(isset($nom) AND isset($prenom) AND isset($sexe) AND isset($age) AND isset($niveau) AND $niveau!=="Choisissez un niveau" AND isset($domaine) AND
 $domaine!=="quel est votre domaine d'etude ?" AND isset($interet) AND $interet!=="votre centre d'interet" AND 
 isset($pays) AND isset($phone) AND isset($message) AND isset($email) AND isset($ville)) {

   $demande="INSERT INTO demande (nom,prenom,age,sexe,niveau,domaine,interet,matiere ,choix,pays,ville,email,phone,cv,photo,message,dte) VALUES
  (:nom,:prenom,:age,:sexe,:niveau,:domaine,:interet,:matiere,:choix,:pays,:ville,:email,:phone,:cv,:photo,:message,CURDATE())";
   $datas=array(
   ':nom'=>$nom,
   ':prenom'=>$prenom,
   ':age'=>$age,
   ':sexe'=>$sexe,
   ':niveau'=>$niveau,
   ':domaine'=>$domaine,
   ':interet'=>$interet,
   ':matiere'=>$matiere,
   ':choix'=>$choix,
   ':pays'=>$pays,
   ':ville'=>$ville,
   ':email'=>$email,
   ':phone'=>$phone,
   ':message'=>$message,
   ':cv'=>$cvpath,
   ':photo'=>$photopath,
   
   );
	 
	try{
		$requete=$bdd->prepare($demande);
		$requete->execute($datas);
	}catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($datas);
		
}

echo '<p class="bold"> Votre demande a ete envoye avec succes. vous pouvez le consultez dans la page des demande
<a href="demande_emploi.php">  ici  </a> </p>';

 } else {
echo '<p class="bold"> Echec de l\'envoi. Reessayez et assurer d\'avoir remplir correctment tous les champs </p>';
 } 	 



?>




 <?php
include("pied_de_page.php");
?>