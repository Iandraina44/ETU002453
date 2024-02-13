<?php 

include ("../../inc/fonction.php");

$datecueillette=$_GET['datecueillette'];
$idcueilleur=$_GET['idcueilleur'];
$idparcelle=$_GET['idparcelle'];
$poids=$_GET['poids'];


insertcueillette($datecueillette,$idcueilleur,$idparcelle,$poids);


header('location:../template.php?page=frontoffice/cueillette')



?>