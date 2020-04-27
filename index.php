<?php
session_start();
?>

<?php 
include("head.php");

?>
<body class="couverture">
 <div class="container">
  <?php if(isset($_SESSION['id']) AND isset($_SESSION['statut']) AND $_SESSION['statut']=="admin" ){
  include("entete_admin.php");
  } elseif(isset($_SESSION['id'])) {
 include("entete_connect.php");
  } else {
include("entete.php");
  }	  
?>  
  
 
   <p class="favori display-3 text-center slogan ">Regardez l'avenir,confiant !<br/>
   Decrochez votre job <a href="page_acceuil.php" class="btn btn-secondary btn-lg" style="font-family:Arial Black"> ici et maintenant  </a>
   </p>
   
  
<?php
include("pied_de_page.php");
?>