<?php 

// include ("../../inc/fonction.php");

  header( "Content-Type: application/json");
$date=$_GET['date'];

$validation = array();
$validation[0]=1;
$validation[1]=111;

      echo json_encode($validation);





//header('location:../template.php?page=frontoffice/cueillette');



?>