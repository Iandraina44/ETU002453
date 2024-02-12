<?php

include ("../../inc/fonction.php");

$nomvariete=$_GET['nomvariete'];
$occupation=$_GET['occupation'];
$rendement=$_GET['rendement'];

insertthe($nomvariete,$occupation,$rendement);

echo "tafiditra";

header('location:../template.php?page=backoffice/variete')


?>