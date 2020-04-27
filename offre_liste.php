<?php
session_start();
?>
<?php
include("head.php");
?>
<body class="bg-light">
 <div class="container-fluid"> 
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
 
 
 

<section class="m-4">
<p id="enseignement" class="bold">  Enseignement </p>
<?php 
$request=$bdd->query('SELECT * FROM offre WHERE interet="enseignant"');
 while ($data=$request->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data['ville']; ?><br/>
	 <strong>recherche:</strong>un(e) enseignant(e) en <?php echo $data['matiere']; ?> <br/>
	 <strong>Criteres:</strong> 
	 
	 </p>
	 <p>
	<strong> <?php echo $data['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data['nom'];?> &amp;email=<?php echo$data['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php ;
 }
 $request->CloseCursor();
 ?>
</section>
<section class="m-4">
<p id="secretariat" class="bold">  Secretariat </p>
<?php 
$request_sec=$bdd->query('SELECT * FROM offre WHERE interet="secretaire"');
 while ($data_sec=$request_sec->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_sec['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_sec['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_sec['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_sec['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_sec['ville']; ?><br/>
	 <strong>recherche:</strong> un(e) secretaire <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_sec['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_sec['nom'];?> &amp;email=<?php echo$data_sec['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_sec['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
<?php 
;}
$request_sec->CloseCursor();
 ?>
</section>
<section class="m-4">
<p id="sante" class="bold">  sante </p>
<?php 
$request_sant=$bdd->query('SELECT * FROM offre WHERE interet="agent de sante"');
 while ($data_sant=$request_sant->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_sant['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_sant['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_sant['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_sant['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_sant['ville']; ?><br/>
	 <strong>recherche:</strong> un agent de sante <br/>
	 <strong>Criteres:</strong> 
	 
	 </p>
	 <p>
	<strong> <?php echo $data_sant['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_sant['nom'];?> &amp;email=<?php echo$data_sant['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_sant['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
<?php 
;}
$request_sant->CloseCursor();
 ?>
</section>
<section class="m-4">
<p id="commercial" class="bold">  commercial </p>
<?php 
$request_com=$bdd->query('SELECT * FROM offre WHERE interet="commercial"');
 while ($data_com=$request_com->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_com['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_com['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_com['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_com['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_com['ville']; ?><br/>
	 <strong>recherche:</strong> enseignant en <?php echo $data_com['matiere']; ?> <br/>
	 <strong>Criteres:</strong> 
	 
	 </p>
	 <p>
	<strong> <?php echo $data_com['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_com['nom'];?> &amp;email=<?php echo$data_com['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_com['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php ;
 }
 $request_com->CloseCursor();
 ?>
</section>

<section class="m-4">
<p id="menagerie" class="bold">  menagere/aide-maison  </p>
<?php 
$request_men=$bdd->query('SELECT * FROM offre WHERE interet="menagere/aide-maison"');
 while ($data_men=$request_men->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_men['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_men['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_men['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_men['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_men['ville']; ?><br/>
	 <strong>recherche:</strong> une menagere <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_men['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_men['nom'];?> &amp;email=<?php echo$data_men['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_men['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php 
;}
$request_men->CloseCursor();
 ?>
</section>
<section class="m-4">
<p id="comptable" class="bold">  comptable  </p>
<?php 
$request_comp=$bdd->query('SELECT * FROM offre WHERE interet="comptable"');
 while ($data_comp=$request_comp->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_comp['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_comp['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_comp['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_comp['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_comp['ville']; ?><br/>
	 <strong>recherche:</strong> comptable <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_comp['message']; ?> </strong>
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_comp['nom'];?> &amp;email=<?php echo$data_comp['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_comp['id']; ?>
	 </p>
    
    </div>
  </div>
 </div>
<?php 
;}
$request_comp->CloseCursor();
 ?> 
</section>
<section class="m-4">
<p id="restauration" class="bold">  restauration  </p>
<?php 
$request_cuis=$bdd->query('SELECT * FROM offre WHERE interet="cuisinier"');
 while ($data_cuis=$request_cuis->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_cuis['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_cuis['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_cuis['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_cuis['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_cuis['ville']; ?><br/>
	 <strong>recherche:</strong> cuisinier(e) <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_cuis['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_cuis['nom'];?> &amp;email=<?php echo$data_cuis['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_cuis['id']; ?>
	 </p>
    
    </div>
  </div>
 </div>
<?php 
;}
$request_cuis->CloseCursor();
 ?> 
</section>
<section class="m-4">
<p id="gestion/gerance" class="bold">  gestion/gerance  </p>
<?php 
$request_ger=$bdd->query('SELECT * FROM offre WHERE interet="gestionnaire/gerant(e)"');
 while ($data_ger=$request_ger->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_ger['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_ger['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_ger['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_ger['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_ger['ville']; ?><br/>
	 <strong>recherche:</strong> gestionnaire/gerant(e) <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_ger['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_ger['nom'];?> &amp;email=<?php echo$data_ger['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_ger['id']; ?>
	 </p>
    
    </div>
  </div>
 </div>
<?php 
;}
$request_ger->CloseCursor();
 ?> 
</section>
<section class="m-4">
<p id="caissier" class="bold">  caissier  </p>
<?php 
$request_cais=$bdd->query('SELECT * FROM offre WHERE interet="caissier"');
 while ($data_cais=$request_cais->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_cais['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_cais['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_cais['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_cais['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_cais['ville']; ?><br/>
	 <strong>recherche:</strong> caissier <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_cais['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_cais['nom'];?> &amp;email=<?php echo$data_cais['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_cais['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php 
;}
$request_cais->CloseCursor();
 ?>
</section>
<section class="m-4">
<p id="travaux manuels" class="bold">  Ouvrier  </p>
<?php 
$request_ouv=$bdd->query('SELECT * FROM offre WHERE interet="ouvrier"');
 while ($data_ouv=$request_ouv->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_ouv['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_ouv['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_ouv['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_ouv['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_ouv['ville']; ?><br/>
	 <strong>recherche:</strong>  un ouvrier en <?php $data_ouv['matiere'] ?> <br/> 
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_ouv['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_ouv['nom'];?> &amp;email=<?php echo$data_ouv['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_ouv['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php 
;}
$request_ouv->CloseCursor();
 ?>
</section>
</section>
<section class="m-4">
<p id="vigile" class="bold">  Vigile  </p>
<?php 
$request_vig=$bdd->query('SELECT * FROM offre WHERE interet="vigile"');
 while ($data_vig=$request_vig->fetch()) {	 
?>
 <div class="row">
  <div class="media col-md-10 col-xs-12 gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_vig['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_vig['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_vig['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_vig['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_vig['ville']; ?><br/>
	 <strong>recherche:</strong> caissier <br/>
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_vig['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_vig['nom'];?> &amp;email=<?php echo$data_vig['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_vig['id']; ?>
	 </p>
    
    </div>
  </div>
 </div> 
 <?php 
;}
$request_vig->CloseCursor();
 ?>
</section>

<section class="m-4">
<p id="autres" class="bold">  Autres   </p>
<?php 
$request_autre=$bdd->query('SELECT * FROM offre WHERE interet="Autre"');
 while ($data_autre=$request_autre->fetch()) {	 
?>
 <div class="row">
  <div class="media col-10  gris p-3 m-auto">
   <img class="d-flex align-self-left img-fluid col-md-6" src="<?php echo $data_autre['photo']; ?>">
    <div class="media-body">
	 <P>
	 <strong>Nom:</strong> <?php echo $data_autre['nom']; ?> <br/>
	 <strong>domaine d'intervention:</strong> <?php echo $data_autre['domaine']; ?> <br/>
	 <strong>pays:</strong> <?php echo $data_autre['pays']; ?> &nbsp &nbsp <strong>ville : </strong> <?php echo $data_autre['ville']; ?><br/>
	 <strong>recherche:</strong>  <?php $data_autre['choix'] ?> <br/> 
	 <strong>Criteres:</strong> 
	 </p>
	 <p>
	<strong> <?php echo $data_autre['message']; ?> </strong> 
	 </P>
	 <p> 
	 <a class="btn btn-warning" href="envoi_message.php?nom=<?php echo $data_autre['nom'];?> &amp;email=<?php echo$data_autre['email'];?>" > Contactez nous </a>
	 </p>
	 <p style="font-family:Baskerville Old Face">
	 Code de l'offre : <?php echo $data_autre['id']; ?>
	 </p>
    
    </div>
  </div>
 </div>
<?php 
;}
$request_autre->CloseCursor();
 ?> 
</section>
 <?php 
 include('footer.php');
 ?>


<?php
include("pied_de_page.php");








