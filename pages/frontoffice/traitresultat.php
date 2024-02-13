<?php 

include ("../../inc/fonction.php");
$min=$_GET['min'];
$max=$_GET['max'];

$poidstotal=poids_total_parcelle_date($min,$max);
$poidsrestant=poids_restant_parcelle_date($min,$max);
 $poidsrestant;

header('location:../template.php?page=frontoffice/resultat&poidstotal='.$poidstotal.'&poidsrestant='.$poidsrestant[0])



?>