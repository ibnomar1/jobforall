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

 ?>
  <form class=" traitement col-md-10" method="post">
   <p class="text-center favori"> Cochez les cases qui ont deja ete traitees </p>
   <table class="table-bordered">
    <thead class="light">
	 <tr >
	  <td> Id</td>
	  <td> Message </td>
	  <td> CV </td>
	  <td> destinataire</td>
	  <td> date </td>
	  <td> Etat </td>
	 </tr>
	</thead>
	<tbody>
   <?php 
 $liste_dossier=$bdd->query("SELECT * FROM traitement WHERE etat='nontraite'");
 while($liste=$liste_dossier->fetch()){?>
   <tr>
    <td> <input class="form-control" type="number" name="person[<?php echo $liste['id']; ?>][id][]" value="<?php echo $liste['id'];?>" /> </td>
    <td> <?php echo nl2br($liste['message']); ?> </td>
	<td> <?php echo nl2br($liste['cv']); ?> </td>
    <td> <?php echo $liste['destinataire']; ?> </td>
    <td> <?php echo $liste['dte'];?> </td>
    <td> <input class="form-control" type="checkbox" name="person[<?php echo$liste['id']; ?>][etat][]" value="traite" /> </td>
  </tr>
	 
<?php ; } ?>

  </table>
  <br/>
   <input class="btn btn-primary" type="submit" value="Envoyez"/>
  </form>
  
  <?php
  if (isset($_POST['person']))
{  foreach ($_POST['person'] as $personne)
 if(isset($personne['etat']))
	foreach ($personne['etat'] as $personne_etat) foreach($personne['id'] as $personne_id) 
	
	{ 
	$traite="UPDATE traitement SET etat='traite' WHERE id=:identite";
	$finalisation=array("identite"=>$personne_id);
	try {
	$fin=$bdd->prepare($traite);
	$fin->execute($finalisation);
	} catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($finalisation);
	}
	if(isset($traite)){
	
	echo 'Tout fut traite avec success. Merci !';
	} else {
		echo 'vous navez rien choisi';
	}
	}
}
	



		

  ?>
  
  
  
  
 
 
 

 
 
 
 
 
 
 
 
 
 
 <?php
include("pied_de_page.php");
?>