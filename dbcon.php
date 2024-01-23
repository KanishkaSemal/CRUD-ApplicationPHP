<<?php 
  

     define("HOSTNAME", "localhost");
     define("USERNAME", "kani");
     define("PASSWORD", "Shemal@12");
     define("DATABASE", "crud application");


     $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

     if(!$connection){
     	die("Connection Failed");

     }

   

 ?>