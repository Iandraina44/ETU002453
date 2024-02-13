<?php 

include ("../../inc/fonction.php");

  header( "Content-Type: application/json");
$datecueillette=$_GET['datecueillette'];
$idcueilleur=$_GET['idcueilleur'];
$idparcelle=$_GET['idparcelle'];
$poids=$_GET['poids'];
$validation = insertcueillette($datecueillette,$idcueilleur,$idparcelle,$poids);
if ($validation) {
    $response = "success";
      echo json_encode($response);
}
if (!$validation) {
    $response = "failed";
      echo json_encode($response);
}
//echo $response;





//header('location:../template.php?page=frontoffice/cueillette');



?>