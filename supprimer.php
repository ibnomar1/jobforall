<?php
session_start();
?>
<?php
include("head.php");
?>
<body class="bg-light">
 <div class="container"> 
  <?php include("bd_connection.php");?> 
 <?php
 // chaque feuille a son containeur et son body 
 
  if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?> 

<?php
$table=!empty($_GET['type'])?$_GET['type']:NULL;
?>
       <p class="bold text-center"> Listes des <?php echo $table;?> </p>
<form class="col-md-10" method="post">
   <p class="text-center favori"> Cochez les cases que vous voulez supprimer </p>
   <table class="table-bordered">
    <thead class="light">
	 <tr >
	  <td> Id</td>
	  <td> nom </td>
	  <td> prenom </td>
	  <td> interet/domaine </td>
	  <td> Email </td>
	  <td> dte de publication</td>
	  <td> Supprimer </td>
	 </tr>
	</thead>
	<tbody>
<?php
if($table=="individu") {
	
$request=$bdd->query("SELECT * FROM individu");	
} elseif ($table=="entreprise"){
	$request=$bdd->query("SELECT * FROM entreprise");	
} elseif ($table=="offre") {
	$request=$bdd->query("SELECT * FROM offre");	
} elseif ($table=="demande") {
	$request=$bdd->query("SELECT * FROM demande");	
}

while ($data=$request->fetch()) {?>
   <tr>
    <td> <input class="form-control" type="number" name="person[<?php echo $data['id']; ?>][id][]" value="<?php echo $data['id'];?>" /> </td>
    <td> <?php echo $data['nom']; ?> </td>
	<td> <?php echo !empty($data['prenom'])?$data['prenom']:NULL; ?> </td>
	<td> <?php echo !empty($data['interet'])?$data['interet']:$data['domaine']??NULL; ?> </td>
	<td> <?php echo $data['email']; ?> </td>
    <td> <?php echo !empty($data['dte'])?$data['dte']:NULL; ?> </td>
    <td> <input class="form-control" type="checkbox" name="person[<?php echo$data['id']; ?>][etat][]" value="etat" /> </td>
  </tr>
	 
<?php ; }
$request->CloseCursor();
 ?>

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

	if($table=="individu"){
	$supprime="DELETE  FROM individu WHERE id=:identite";
	$finalisation=array("identite"=>$personne_id);
	} elseif ($table=="entreprise"){
		$supprime="DELETE  FROM entreprise WHERE id=:identite";
	$finalisation=array("identite"=>$personne_id);
	} elseif($table=="offre"){
		
		$supprime="DELETE  FROM offre WHERE id=:identite";
	$finalisation=array("identite"=>$personne_id);
	} elseif($table=="demande"){
	$supprime="DELETE  FROM demande WHERE id=:identite";
	$finalisation=array("identite"=>$personne_id);	
		
	}
	try {
	$fin=$bdd->prepare($supprime);
	$fin->execute($finalisation);
	} catch(Exception $e) {
		
		echo "Erreur ! ".$e->getMessage();
		echo "Les datas : " ;
		print_r($finalisation);
	}
	
	}
} if(isset($supprime)){
	
	echo 'vous venez de supprimer des noms avec succes.Appuyez sur F5 pour actualiser la liste Merci !<br/>';
	} else {
		echo 'vous n\'avez rien coche';
	}
 ?>


<?php
include("pied_de_page.php");

