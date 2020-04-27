<?php
include("head.php");
?>
<body class="bg-light">
 <div class="container"> 
  
<?php include("bd_connection.php");?> 
  
 <?php 
 /* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;


/* Include the Composer generated autoload.php file. */
require 'C:\wamp64\composer\vendor\autoload.php';
 
?> 




<form class="col-md-12 bg-light" enctype="multipart/form-data" method="post" action="reception_cv.php">
  <div class="form-group row">
    <label for="interest" class="col-md-3 col-form-label bold"> Interested by  :</label>
     <div class="col-md-6">
      <select class="custom-select" id="interest" name="interest">
	   <option> make a choice </option>
	   <option> teaching </option>
	   <option> others </option>
	   
	  </select>
     </div>
   </div>
   <div class="form-group row d-none" id="sub_row">
    <label for="subject" class="col-md-3 col-form-label bold"> subject:</label>
     <div class="col-md-6">
      <input type="text"   class="form-control " id="subject" name="subject" required >
     </div>
   </div>
   <div class="col-md-3">
    <input  type="submit" class="btn btn-primary " value="Send" />
    
  </div>
  
  </form>


<script>
 var interest=document.getElementById('interest'),
 subject=document.getElementById('sub_row');
 
 document.onmousemove=function(){if(interest.value=="teaching"){
	 subject.className="form-group row d-block";
 } else {subject.className="d-none";}
 } ;
 
 
 </script>


  
  <?php
  include("pied_de_page.php");
  ?>
 

  
  
  


