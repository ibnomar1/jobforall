<?php session_start(); ?>
<?php
include("head.php");
?>
<body class="gris">
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
 
 
 $nom_demandeur=!empty($_GET['nom'])?$_GET['nom']:NULL;
 $prenom_demandeur=!empty($_GET['prenom'])?$_GET['prenom']:NULL;
 $email_demandeur=!empty($_GET['email'])?$_GET['email']:NULL;
 ?>
 
 
 
 <form class="col-md-8 col-sx-12 m-auto" method="post" enctype="multipart/form-data" >
 <p class="text-center bold"> Envoi un message a <?php echo $nom_demandeur.'  '.$prenom_demandeur;  ?></p>
  <div class="form-group row">
 <label for="adresse"  class="col-md-4 col-form-label"> Mettez votre adresse Email  ici : </label> 
   <div class="col-md-8">
    <input class="form-control" type="email" name="adresse" id="adresse" required />
   </div>
  </div>
   <div class="form-group row">
 <label for="telephone"  class="col-md-4 col-form-label"> Vous pouvez ajouter un numero de Telephone  ici : </label> 
   <div class="col-md-8">
    <input class="form-control" type="number" name="telephone" id="telephone" required />
   </div>
  </div>
  <div class="form-group row">
   <label for="message"  class="col-md-4 col-form-label" > Votre  message ici  : </label> 
    <div class="col-md-8">
   <textarea class="form-control"  id="message" name="message"  rows="8" cols="40"> </textarea> <br/>
    </div>
  </div>
  <?php 
  if(!isset($prenom_demandeur)){echo 
  '<div class="form-group row">
   <label for="cv"  class="col-md-4 col-form-label" > ajoutez votre CV  : </label> 
    <div class="col-md-8">
   <input type="file"  class="form-control" name="cv" id="cv" /> <br/>
    </div>
  </div>';
   
  }
  ?>
 <input  class="btn btn-primary form-control" type="submit" value="Envoyez"/>
 
 
 
 </form>
 
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

 $message=nl2br(!empty($_POST['message'])?$_POST['message']:NULL);
 $adresse_offreur=!empty($_POST['adresse'])?$_POST['adresse']:NULL;
 $phone_offreur=!empty($_POST['telephone'])?$_POST['telephone']:NULL;
 $cvname=!empty($_FILES['cv']['name'])?$_FILES['cv']['name']:'cvdefaut.txt';
$cvpath = 'reception/' . $cvname;
 
 if(!empty($message) ){
	 
	 $message_complet=$message."\n".' source : '. $adresse_offreur."\n". $phone_offreur."\n".$_SESSION['pseudo'];
	 
	  $selection="INSERT INTO traitement (message,cv,destinataire,dte) VALUES (:message,:cv,:demandeur,CURDATE())";
	  $complement=array(
                ':message'=>$message_complet,
                ':demandeur'=>$email_demandeur,
				':cv'=>$cvpath
				 );
	 
	try{
		$request=$bdd->prepare($selection);
		$request->execute($complement);
	}catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($complement);
		
}
 echo 'votre message a ete envoye avec success.Merci !'; 

 }

 
 
 
 ?>
 
 
 
  <?php
include("pied_de_page.php");
?>