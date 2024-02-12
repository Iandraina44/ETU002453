<?php 
include 'fonction.php';

//test login
    // $email="admin@gmail.com";
    // $mdp="admin";
    // $rep =Login($email,$mdp);
    // echo $rep;

// test insert
    // Insertion dans la table 'the'
    // insertthe("Variete de thé1", "Occupation", 10);
    ?><br><?php
    // Insertion dans la table 'parcelle'
    // insertparcelle("Surface de la parcelle", 1);
    ?><br><?php
    // Insertion dans la table 'cueilleur'
    // insertcueilleur("Nom du cueilleur", "homme", "2024-02-12");
    ?><br><?php
    // Insertion dans la table 'categoriedepense'
    // insertcategoriedepense("Motif de dépense");
    ?><br><?php
    // Insertion dans la table 'salaire'
    // insertsalaire(1, 1000.50);
    ?><br><?php
    // Insertion dans la table 'cueillette'
    // insertcueillette("2024-02-12", 1, 1, 50.25);
    ?><br><?php
    // Insertion dans la table 'depense'
    // insertdepense(1, 500.75);
    ?><br><?php
    // Insertion dans la table 'resultat'
    // insertresultat(100, 50, 200.50);
    ?><br><?php

    echo "Poids total cueilli sur toutes les parcelles : " . poids_total_parcelle() . " kg";
    ?><br><?php

    // Test de la fonction poids_restant_par_parcelle
    echo "Poids restant sur chaque parcelle : <br>";
    $poids_restants = poids_restant_par_parcelle();
    $num_parcelles = count($poids_restants);
    for ($i = 0; $i < $num_parcelles; $i++) {
        echo "Parcelle " . $poids_restants[$i]['idparcelle'] . ": " . $poids_restants[$i]['poids_restant'] . " kg<br>";
    }

?>