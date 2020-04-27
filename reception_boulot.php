<?php
session_Start();
include("head.php");
?>
<body>
 <div class="container"> 
 <?php include("bd_connection.php");?> 
 <?php
 // chaque feuille a son containeur et son body 
 include("entete_connect.php");
 ?>
<?php 
//la reception d'une photo de l'entreprise 
 $error = NULL;
$filename = NULL;
if (isset($_FILES['photo']) &&
$_FILES['photo']['error'] === 0) {
$photoname = $_FILES['photo']['name'];
$photopath = getcwd() . '/reception/' . $photoname; 
// On déplace le fichier depuis le répertoire temporaire vers $targetpath
if (move_uploaded_file($_FILES['photo']['tmp_name'], $photopath)) { // Si ça fonctionne
$error = 'OK'; 
} else { // Si ça ne fonctionne pas
$error = "Échec de l'enregistrement !";
}
} 
else {
$error = 'Aucun fichier réceptionné !'; 
}

//definitions des variabeles des inputs

$nom=!empty($_POST['nom'])?$_POST['nom']:NULL;
$domaine=!empty($_POST['domaine'])?$_POST['domaine']:NULL;
$choix=!empty($_POST['choix'])?$_POST['choix']:NULL;
$interet=!empty($_POST['interet'])?$_POST['interet']:NULL;
$matiere=!empty($_POST['matiere'])?$_POST['matiere']:NULL;
$pays=!empty($_POST['pays'])?$_POST['pays']:NULL;
$ville=!empty($_POST['ville'])?$_POST['ville']:NULL;
$email=!empty($_POST['email'])?$_POST['email']:NULL;
$phone=!empty($_POST['phone'])?$_POST['phone']:NULL;
$message=!empty($_POST['message'])?$_POST['message']:NULL;
$photoname=!empty($_FILES['photo']['name'])?$_FILES['photo']['name']:'poster.jpg';
$photopath = 'reception/' . $photoname;

if(isset($nom) AND isset($domaine) AND $domaine!=="quel est votre domaine d'intervention ?" AND isset($interet) AND $interet!=="que recherchez vous ?" AND 
 isset($pays)  AND isset($phone) AND isset($message) AND isset($email) AND isset($ville)) {

   $offre="INSERT INTO offre (nom,domaine,interet,matiere,choix,pays,ville,email,phone,photo,message,dte) VALUES
  (:nom,:domaine,:interet, :matiere,:choix,:pays,:ville,:email,:phone,:photo,:message,CURDATE())";
   $dats=array(
   ':nom'=>$nom,
   ':domaine'=>$domaine,
   ':interet'=>$interet,
   ':pays'=>$pays,
   ':ville'=>$ville,
   ':email'=>$email,
   ':phone'=>$phone,
   ':message'=>$message,
   ':photo'=>$photopath,
   ':matiere'=>$matiere,
   ':choix'=>$choix,// au cas ou la personne choisi autre chose
   
   );
	 
	try{
		$request=$bdd->prepare($offre);
		$request->execute($dats);
	}catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($dats);
		
}



 }
 if(isset($dats)) {
	 echo '<p class="bold"> Votre offre a ete envoye avec succes. vous pouvez le consultez dans la rubriques des offre
 </p>';
 }

 else {
echo '<p class="bold"> Echec de l\'envoi. Reessayez et assurer d\'avoir remplir correctment tous les champs </p>';
 } 	 









include("pied_de_page.php");
?>