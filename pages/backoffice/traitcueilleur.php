<?php 

include ("../../inc/fonction.php");

$nom=$_GET['nom'];
$datenaissance=$_GET['datenaissance'];
$genre=$_GET['genre'];

insertcueilleur($nom,$genre,$datenaissance);

header('location:../template.php?page=backoffice/cueilleur')



?>


