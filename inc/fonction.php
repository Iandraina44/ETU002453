<?php 

include 'connection.php';

function Login($mail,$mdp)  {
    $requette1="SELECT * FROM employe WHERE email like '%s' ";
    $requette1=sprintf($requette1,$mail);
    echo $requette1;
    $resultat1=mysqli_query(dbconnect(),$requette1);
    $nb=mysqli_num_rows($resultat1);	
    mysqli_free_result($resultat1);
    if ($nb==0) {
        return -1;
    }
    $requette="SELECT * FROM employe WHERE email like '%s' AND mdp like sha1('%s') "; 
    $requette=sprintf($requette,$mail,$mdp);
    $resultat=mysqli_query(dbconnect(),$requette);
    $n=mysqli_num_rows($resultat);	
    if($n==0){
        return -2;
    }
    while ($valiny=mysqli_fetch_assoc($resultat)) {
        $retour=$valiny['id'];
        return $retour;
    }
}

?>