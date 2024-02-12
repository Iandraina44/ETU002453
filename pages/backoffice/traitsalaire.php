<?php 

include ("../../inc/fonction.php");

$idcueilleur=$_GET['idcueilleur'];
$montant=$_GET['montant'];

insertsalaire($idcueilleur,$montant);

header('location:../template.php?page=backoffice/salaire')



?>