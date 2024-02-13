<?php 

include ("../../inc/fonction.php");
$min=$_GET['min'];
$max=$_GET['max'];


calculepayement($min,$max);



header('location:../template.php?page=frontoffice/paiement')



?>