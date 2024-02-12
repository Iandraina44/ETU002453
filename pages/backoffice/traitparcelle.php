<?php 

include ("../../inc/fonction.php");

$surface=$_GET['surface'];
$variete=$_GET['variete'];

insertparcelle($surface,$variete);

header('location:../template.php?page=backoffice/parcelle')



?>


