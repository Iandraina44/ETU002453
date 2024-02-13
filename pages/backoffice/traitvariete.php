<?php

include ("../../inc/fonction.php");

$nomvariete=$_GET['nomvariete'];
$occupation=$_GET['occupation'];
$rendement=$_GET['rendement'];
$prix=$_GET['prix'];


insertthe($nomvariete,$occupation,$rendement);
insertPrixthe($prix);


echo "tafiditra";

header('location:../template.php?page=backoffice/variete')


?>