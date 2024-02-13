<?php 

include ("../../inc/fonction.php");

$categorie=$_GET['categorie'];
$montant=$_GET['montant'];
$datedepense=$_GET['datedepense'];


insertdepense( $categorie,$montant,$datedepense);   

header('location:../template.php?page=frontoffice/depense')



?>


