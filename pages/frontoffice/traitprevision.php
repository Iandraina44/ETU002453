<?php 

include ("../../inc/fonction.php");

  //header( "Content-Type: application/json");
$date=$_GET['date'];

$validation = array();
// $validation[0]=poids_restant_parcelle_date($date, $date);
$validation=assembleResultats($date);




      echo json_encode($validation);





//header('location:../template.php?page=frontoffice/cueillette');



?>