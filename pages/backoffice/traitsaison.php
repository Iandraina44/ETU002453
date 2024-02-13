<?php 

include ("../../inc/fonction.php");

$list=array();

foreach($_GET['check_list'] as $selected){
$list[]=$selected;
}

var_dump($list);

insertdeletesaison($list);

header('location:../template.php?page=backoffice/saison')



?>