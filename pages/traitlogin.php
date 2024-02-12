<?php

include ('../inc/fonction.php');
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

$log=Login($mail,$mdp);
if ($log<0) {
    header('location:login.php?error='.$log);
}
else{
    $statut =getStatutPersonne($log);
    session_start();
    $_SESSION['iduser']=$log;
    $_SESSION['statut']=$statut;
    header('location:template.php?page=accueil');
}

?>