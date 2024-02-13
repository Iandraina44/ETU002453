<?php 

include ("../../inc/fonction.php");

$motif=$_GET['motif'];

insertcategoriedepense($motif);

header('location:../template.php?page=backoffice/categoriedepense')



?>


