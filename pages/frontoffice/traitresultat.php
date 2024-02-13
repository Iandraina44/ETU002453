<?php 

include ("../../inc/fonction.php");
$min=$_GET['min'];
$max=$_GET['max'];

$poidstotal=poids_total_parcelle_date($min,$max);
$poidsrestant=poids_restant_parcelle_date($min,$max);
$cpderevient=prixRevientParKg();
$depenses=sumDepenses($min,$max);
 $benefices=calculateBenefice($min,$max);
 $ventes=TotalVentes($min,$max);


// echo $poidstotal;
// var_dump($poidsrestant);
//  echo $cpderevient;
//  echo $depenses;
// echo $benefices;
// echo $ventes;

header('location:../template.php?page=frontoffice/resultat&poidstotal='.$poidstotal.'&poidsrestant='.$poidsrestant[0].'&prixrevient='.$cpderevient.'&ventes='.$ventes.'&benefices='.$benefices."&depenses=".$depenses)



?>