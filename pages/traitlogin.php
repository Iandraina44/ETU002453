<?php

include ('../inc/fonction.php');
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];

$log=Login($mail,$mdp);
if ($log<0) {
    header('location:login.php?error='.$log);
}
else{
    session_start();
    $_SESSION['iduser']=$log;
    header('location:accueil.php');
}

?>