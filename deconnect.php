<?php 
session_start();
?>
<?php
include("head.php");
?>

<body>
 <div class="container"> 

<?php
session_destroy();

echo 'vous etes deconnecte';
header('location:index.php');

?>



<?php
include("pied_de_page.php");
?>