<?php 

include ("../../inc/fonction.php");

$idcueilleur=$_GET['idcueilleur'];
$pmin=$_GET['pmin'];
$bonus=$_GET['bonus'];
$malus=$_GET['malus'];

insertRemuneration($idcueilleur,$pmin,$bonus,$malus);

header('location:../template.php?page=backoffice/configuration')



?>