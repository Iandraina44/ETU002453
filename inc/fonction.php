<?php 

include 'connection.php';

function Login($mail,$mdp)  {
    $requette1="SELECT * FROM user WHERE email like '%s'";
    $requette1=sprintf($requette1,$mail);
    echo $requette1;
    $resultat1=mysqli_query(dbconnect(),$requette1);
    $nb=mysqli_num_rows($resultat1);	
    mysqli_free_result($resultat1);
    if ($nb==0) {
        return -1;
    }
    $requette="SELECT * FROM user WHERE email like '%s' AND mdp like sha1('%s')"; 
    $requette=sprintf($requette,$mail,$mdp);
    $resultat=mysqli_query(dbconnect(),$requette);
    $n=mysqli_num_rows($resultat);	
    echo $requette;

    if($n==0){
        return -2;
    }
    while ($valiny=mysqli_fetch_assoc($resultat)) {
        $retour=$valiny['iduser'];
        return $retour;
    }
}

function insertthe($variete, $occupation, $rendement) {
    $requette = "INSERT INTO the VALUES (NULL, '%s', '%s', %s)";
    $requette = sprintf($requette, $variete, $occupation, $rendement);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'the' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'the': " . mysqli_error(dbconnect());
    }
}

function insertparcelle($surface, $idthe) {
    $requette = "INSERT INTO parcelle VALUES (NULL, '%s', '%s')";
    $requette = sprintf($requette, $surface, $idthe);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'parcelle' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'parcelle': " . mysqli_error(dbconnect());
    }
}

function insertcueilleur($nom, $genre, $datenaissance) {
    $requette = "INSERT INTO cueilleur VALUES (NULL, '%s', '%s', '%s')";
    $requette = sprintf($requette, $nom, $genre, $datenaissance);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'cueilleur' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'cueilleur': " . mysqli_error(dbconnect());
    }
}

function insertcategoriedepense($motif) {
    $requette = "INSERT INTO categoriedepense VALUES (NULL, '%s')";
    $requette = sprintf($requette, $motif);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'categoriedepense' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'categoriedepense': " . mysqli_error(dbconnect());
    }
}


function insertsalaire($idcueilleur, $montant) {
    $requette = "INSERT INTO salaire VALUES (NULL, %d, %.2f)";
    $requette = sprintf($requette, $idcueilleur, $montant);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'salaire' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'salaire': " . mysqli_error(dbconnect());
    }
}

function insertcueillette($datecueillette, $idcueilleur, $idparcelle, $poids) {
    $validation=true;
    $poidrestant= poids_restant_parcelle_byid($datecueillette, $datecueillette, $idparcelle);
    if ($poids>$poidrestant) {
        $validation=false;
    }
    else{
        $requette = "INSERT INTO cueillette VALUES (NULL, '%s', %d, %d, %.2f)";
        $requette = sprintf($requette, $datecueillette, $idcueilleur, $idparcelle, $poids);
        $result = mysqli_query(dbconnect(), $requette);
    }
    return $validation;
   
}

function insertdepense($idcategoriedepense, $montant,$date) {
    $requette = "INSERT INTO depense VALUES (NULL, %d, %.2f,'%s')";
    $requette = sprintf($requette, $idcategoriedepense, $montant,$date);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'depense' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'depense': " . mysqli_error(dbconnect());
    }
}

function insertresultat($poidtotalcueillette, $poidrestantparcelle, $coutrevient) {
    $requette = "INSERT INTO resultat VALUES (NULL, %.2f, %.2f, %.2f)";
    $requette = sprintf($requette, $poidtotalcueillette, $poidrestantparcelle, $coutrevient);
    $result = mysqli_query(dbconnect(), $requette);
    if ($result) {
        echo "Insertion dans 'resultat' réussie.";
    } else {
        echo "Erreur lors de l'insertion dans 'resultat': " . mysqli_error(dbconnect());
    }
}

function getStatutPersonne($id){
    $requette1="SELECT * FROM user WHERE iduser='%s' ";
    $requette1=sprintf($requette1,$id);
    $resultat1=mysqli_query(dbconnect(),$requette1);
    $nb=mysqli_num_rows($resultat1);	
    if ($nb==0) {
        return -1;
    }
    while ($valiny=mysqli_fetch_assoc($resultat1)) {
        $retour=$valiny['statut'];
        return $retour;
    }   
    
}


function getAllThe() {
    $db = dbconnect(); 
    $query = "SELECT * FROM the";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function getAllParcelle() {
    $db = dbconnect(); 
    $query = "SELECT * FROM parcelle";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function getAllCueilleur() {
    $db = dbconnect(); 
    $query = "SELECT * FROM cueilleur";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function getAllCueillette() {
    $db = dbconnect(); 
    $query = "SELECT * FROM cueillette";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function getAllCategorieDepense() {
    $db = dbconnect(); 
    $query = "SELECT * FROM categoriedepense";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function getAllSalaire() {
    $db = dbconnect(); 
    $query = "SELECT * FROM salaire";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result); // Libérer la mémoire après avoir récupéré les données
    }
    return $data;
}

function poids_total_par_parcelle() {
    $db = dbconnect(); 
    $query = "SELECT idparcelle, SUM(poids) AS poids_total
    FROM cueillette
    GROUP BY idparcelle";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}


function poids_total_parcelle() {
    $db = dbconnect(); 
    $query = "SELECT SUM(poids) AS poids_total
    FROM cueillette";
    $result = mysqli_query($db, $query);
    $total_weight = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total_weight = $row['poids_total'];
    }
    return $total_weight;
}

function poids_total_parcelle_date($date_debut, $date_fin) {
    $db = dbconnect(); 
    $query = "SELECT SUM(poids) AS poids_total
              FROM cueillette";

    if ($date_debut !== null && $date_fin !== null) {
        $query .= " WHERE datecueillette BETWEEN '$date_debut' AND '$date_fin'";
    }

    $result = mysqli_query($db, $query);
    $total_weight = 0;
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total_weight = $row['poids_total'];
    }
    
    return $total_weight;
}



function poids_restant_par_parcelle() {
    $db = dbconnect();
    
    $query = "SELECT 
                p.idparcelle, 
                p.surface - COALESCE(SUM(c.poids), 0) AS poids_restant
              FROM 
                parcelle p
              LEFT JOIN 
                cueillette c ON p.idparcelle = c.idparcelle
              GROUP BY 
                p.idparcelle, p.surface";
    
    $result = mysqli_query($db, $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

function poids_restant_parcelle() {
    $db = dbconnect();
    
    $query = "SELECT 
                p.surface - COALESCE(SUM(c.poids), 0) AS poids_restant
              FROM 
                parcelle p
              LEFT JOIN 
                cueillette c ON p.idparcelle = c.idparcelle";
    
    $result = mysqli_query($db, $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids_restant'];
        }
    }
    return $data;
}

function poids_restant_parcelle_byid($min, $max, $idParcelle) {
    $db = dbconnect();

    $query = "SELECT 
                SUM((th.rendement * p.surface * 10000 / th.occupation)) - COALESCE(SUM(c.poids), 0) AS poids_restant
              FROM 
                parcelle p
              JOIN 
                the th ON p.idthe = th.idthe
              LEFT JOIN 
                cueillette c ON p.idparcelle = c.idparcelle
              WHERE 
                c.datecueillette <= '%s'
                AND p.idparcelle = %d
                AND MONTH(c.datecueillette) >= (SELECT idmois FROM saison WHERE idmois <= MONTH('%s') ORDER BY idmois DESC LIMIT 1);";

    $query = sprintf($query, $max, $idParcelle, $max);

    $result = mysqli_query($db, $query);
    $data = array();
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids_restant'];
        }
    }
    
    return $data;
}


function poids_restant_parcelle_date($min, $max) {
    $db = dbconnect();

    
    $query = "SELECT 
    SUM((th.rendement * p.surface * 10000 / th.occupation)) - COALESCE(SUM(c.poids), 0) AS poids_restant
    FROM 
        parcelle p
    JOIN 
        the th ON p.idthe = th.idthe
    LEFT JOIN 
        cueillette c ON p.idparcelle = c.idparcelle
    WHERE 
        c.datecueillette <= '%s'
        AND MONTH(c.datecueillette) >= (SELECT idmois FROM saison WHERE idmois <= MONTH('%s') ORDER BY idmois DESC LIMIT 1);";

    $query=sprintf($query,$max,$max);    

    echo $query;

    $result = mysqli_query($db, $query);
    $data = array();
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids_restant'];
        }
    }
    
    return $data;
}



function calculer_cout_revient_par_kg($date_debut, $date_fin) {
    $db = dbconnect();
    
    $query = "SELECT 
                SUM(d.montant) / SUM(c.poids) AS cout_revient_par_kg
              FROM 
                depense d
              LEFT JOIN 
                cueillette c ON d.datedepense = c.datecueillette
              WHERE 
                d.datedepense BETWEEN ? AND ?";
    
    $stmt = mysqli_prepare($db, $query);
    mysqli_stmt_bind_param($stmt, "ss", $date_debut, $date_fin);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $cout_revient_par_kg = 0;
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $cout_revient_par_kg = $row['cout_revient_par_kg'];
    }
    
    mysqli_stmt_close($stmt);
    return $cout_revient_par_kg;
}

function sumDep() {
    $query = "SELECT SUM(montant) AS total FROM depense ";
   
    $result = mysqli_query(dbconnect(), $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
        mysqli_free_result($result);
        return $total;
    } else {
        return 0;
    }
}

function totalSalaireCueilleurs() {
    $db = dbconnect();

    $query = "SELECT SUM(montant) AS total_salaire
              FROM salaire
              WHERE idceuilleur IN (SELECT DISTINCT idceuilleur FROM cueillette)";

    $result = mysqli_query($db, $query);

    $totalSalaire = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalSalaire = $row['total_salaire'];
    }

    return $totalSalaire;
}

function sumPoidsCueillis() {
    $db = dbconnect();

    $query = "SELECT SUM(poids) AS total_poids
              FROM cueillette";

    $result = mysqli_query($db, $query);

    $totalPoids = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $totalPoids = $row['total_poids'];
    }

    return $totalPoids;
}

function prixRevientParKg() {
    $totalDepenses = sumDep();
    $salaire= totalSalaireCueilleurs();
    $totalDepenses=$totalDepenses+$salaire;

  $totalPoidsCueillis = sumPoidsCueillis();

    if ($totalPoidsCueillis != 0) {

        $prixRevientParKg = $totalDepenses / $totalPoidsCueillis;
        return $prixRevientParKg;
    } else {
        return "Impossible de calculer le prix de revient par kg, aucun poids cueilli.";
    }
}




function deleteSaison($idMois) {
    $query = "DELETE FROM saison WHERE idmois = %d";
    $query = sprintf($query, $idMois);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Deletion from 'saison' successful.";
    } else {
        echo "Error deleting from 'saison': " . mysqli_error(dbconnect());
    }
}

function deleteSaisonAll() {
    $query = "DELETE FROM saison";
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "All records deleted from 'saison'.";
    } else {
        echo "Error deleting from 'saison': " . mysqli_error(dbconnect());
    }
}

function insertSaison($idMois) {
    $query = "INSERT INTO saison (idmois) VALUES (%d)";
    $query = sprintf($query, $idMois);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'saison' successful.";
    } else {
        echo "Error inserting into 'saison': " . mysqli_error(dbconnect());
    }
}

function selectAllSaison() {
    $db = dbconnect(); 
    $query = "SELECT * FROM saison";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
        return $data;
    } else {
        echo "Error selecting from 'saison': " . mysqli_error($db);
        return [];
    }
}

function insertdeletesaison($tab){
    deleteSaisonAll();

    foreach($tab as $idMois) {
        insertSaison($idMois);
    }
}

function insertPrixthe( $prixthe) {
    $query = "INSERT INTO prixthe  VALUES (null, '%s')";
    $query = sprintf($query, $prixthe);
    echo $query;
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'prixthe' successful.";
    } else {
        echo "Error inserting into 'prixthe': " . mysqli_error(dbconnect());
    }
}

function selectAllPrixthe() {
    $db = dbconnect(); 
    $query = "SELECT * FROM prixthe";
    $result = mysqli_query($db, $query);
    $data = array(); 
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }
    return $data;
}

function insertPaiement($datecueillette, $nom, $poidcueilli, $bonus, $malus, $paiement) {
    $query = "INSERT INTO paiement (datecueillette, nom, poidcueilli, bonus, mallus, paiement) VALUES ('%s', '%s', %.2f, %.2f, %.2f, %.2f)";
    $query = sprintf($query, $datecueillette, $nom, $poidcueilli, $bonus, $malus, $paiement);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'paiement' successful.";
    } else {
        echo "Error inserting into 'paiement': " . mysqli_error(dbconnect());
    }
}

//  poids cueillette anle bandy entre deux date
//  comparena aminy poids minimale atao fois anle nbr ana jour 
//  calcul paiement 

 function selectPoidsCueillette($dateDebut, $dateFin, $idCueilleteur) {
    $query = "SELECT poids FROM cueillette WHERE datecueillette BETWEEN '%s' AND '%s' AND idceuilleur = %d";
    $query = sprintf($query, $dateDebut, $dateFin, $idCueilleteur);
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['poids'];
        }
        mysqli_free_result($result);
    }
    return $data;
}

function selectDateCueillette($dateDebut, $dateFin, $idCueilleteur) {
    $query = "SELECT datecueillette FROM cueillette WHERE datecueillette BETWEEN '%s' AND '%s' AND idceuilleur = %d";
    $query = sprintf($query, mysqli_real_escape_string(dbconnect(), $dateDebut), mysqli_real_escape_string(dbconnect(), $dateFin), $idCueilleteur);
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row['datecueillette'];
        }
        mysqli_free_result($result);
    }
    return $data;
}



function selectRemuneration($id) {
    $query = "SELECT * FROM remuneration WHERE idceuilleur = $id";
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }
    return $data;
}

function selectallRemuneration() {
    $query = "SELECT * FROM remuneration  ";
    $result = mysqli_query(dbconnect(), $query);
    $data = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
    }
    return $data;
}

function deleteAllRemuneration() {
    $query = "DELETE FROM remuneration";
    $db = dbconnect();
    $result = mysqli_query($db, $query);
}




function insertRemuneration($idCueilleur, $poidsMinimum, $bonus, $malus) {
    $query = "INSERT INTO remuneration VALUES (%d, %.2f, %.2f, %.2f)";
    $query = sprintf($query, $idCueilleur, $poidsMinimum, $bonus, $malus);
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        echo "Insertion into 'remuneration' successful.";
    } else {
        echo "Error inserting into 'remuneration': " . mysqli_error(dbconnect());
    }
}

function selectNomCueilleur($idCueilleur) {
    $query = "SELECT nom FROM cueilleur WHERE idcueilleur = $idCueilleur";
    $result = mysqli_query(dbconnect(), $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        mysqli_free_result($result);
        return $nom;
    } else {
        return "Cueilleur non trouvé";
    }
}

function selectSalairesByIdCueilleur($idCueilleur) {
    $db = dbconnect();

    $query = "SELECT * FROM salaire WHERE idceuilleur = %d";
    $query = sprintf($query, $idCueilleur);

    $result = mysqli_query($db, $query);

    $salaires = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $salaires[] = $row;
        }
        mysqli_free_result($result);
    }

    return $salaires;
}


function calculepayement($dateDebut, $dateFin) {
    $cueilleurs = getAllCueilleur();
    $paid=0;
    for ($i = 0; $i < count($cueilleurs); $i++) {
        $remuneration = selectRemuneration($cueilleurs[$i]['idcueilleur']);
        if (empty($remuneration)) {
            echo "Aucune donnée de rémunération trouvée pour le cueilleur avec l'ID : {$cueilleurs[$i]['idcueilleur']}";
            continue;
        }
        $poidsCueillette = selectPoidsCueillette($dateDebut, $dateFin, $cueilleurs[$i]['idcueilleur']);
        $paiementTotal = 0;
        $nombreJours = count($poidsCueillette);
        $poidsMinimum = $remuneration[0]['poidminimum'];
        $salaireall = selectSalairesByIdCueilleur($cueilleurs[$i]['idcueilleur']);
        $salaire = $salaireall[0]['montant'];
        $bonus = $remuneration[0]['bonus'];
        $malus = $remuneration[0]['malus'];
        for ($j = 0; $j < $nombreJours; $j++) {
            if ($poidsCueillette[$j] < $poidsMinimum) { 
                $paiement = $salaire - ($salaire * $malus / 100);
            } else {
                $paiement = $salaire + ($salaire * $bonus / 100);
            }
            $paiementTotal += $paiement;
        }
        $paiementTotal = max(0, $paiementTotal);
        $nom = selectNomCueilleur($cueilleurs[$i]['idcueilleur']);
        $paid=$paid+$paiementTotal;
        deleteAllRemuneration();
        insertPaiement($dateDebut, $nom, $poidsCueillette, $bonus, $malus, $paiementTotal);
        
    }
    return $paid;
}



function selectAllPaiement() {
    $db = dbconnect();

    $query = "SELECT * FROM paiement";

    $result = mysqli_query($db, $query);

    $paiements = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $paiements[] = $row;
        }
    }

    return $paiements;
}


function sumDepenses($dateDebut, $dateFin) {
    $query = "SELECT SUM(montant) AS total FROM depense WHERE datedepense BETWEEN '%s' AND '%s'";
    $query = sprintf($query, $dateDebut, $dateFin);
    $result = mysqli_query(dbconnect(), $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $total = $row['total'];
        mysqli_free_result($result);
        return $total;
    } else {
        return 0;
    }
}

function totalDepenses($dateDebut, $dateFin) {
    $totalDepenses = 0;
    $sumdep=sumDepenses($dateDebut,$dateFin);
    $totalsalaire =calculepayement($dateDebut, $dateFin) ;
    $totalDepenses=$totalsalaire+$sumdep;
    return $totalDepenses;
}


function TotalVentes($dateDebut, $dateFin) {
    $query = "SELECT SUM(c.poids * pt.prixthe) AS montant_total_ventes
              FROM cueillette c
              JOIN parcelle p ON c.idparcelle = p.idparcelle
              JOIN prixthe pt ON p.idthe = pt.idthe
              JOIN the t ON p.idthe = t.idthe
              WHERE c.datecueillette BETWEEN '$dateDebut' AND '$dateFin'";
    $result = mysqli_query(dbconnect(), $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalSales = $row['montant_total_ventes'];
        mysqli_free_result($result);
        return $totalSales;
    } else {
        echo "Erreur lors de l'exécution de la requête : " . mysqli_error(dbconnect());
        return false;
    }
}

function calculateBenefice($dateDebut, $dateFin) {
    $totalVentes = TotalVentes($dateDebut, $dateFin);
    $totalDepenses = totalDepenses($dateDebut, $dateFin);
    $benefice = $totalVentes - $totalDepenses;
    return $benefice;
}

function poids_restant_byparcelle_date($min, $max) {
    $db = dbconnect();

    $query = "SELECT 
                p.idparcelle,
                SUM((th.rendement * p.surface * 10000 / th.occupation)) - COALESCE(SUM(c.poids), 0) AS poids_restant
              FROM 
                parcelle p
              JOIN 
                the th ON p.idthe = th.idthe
              LEFT JOIN 
                cueillette c ON p.idparcelle = c.idparcelle
              WHERE 
                c.datecueillette <= '%s'
                AND MONTH(c.datecueillette) >= (SELECT idmois FROM saison WHERE idmois <= MONTH('%s') ORDER BY idmois DESC LIMIT 1)
              GROUP BY
                p.idparcelle;";

    $query = sprintf($query, $max, $max);

    $result = mysqli_query($db, $query);
    $data = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$row['idparcelle']] = $row['poids_restant'];
        }
    }

    return $data;
}


function getNom($id) {
    $db = dbconnect();

    if (!$db) {
        return "Erreur de connexion à la base de données";
    }
    $query = sprintf("SELECT variete, occupation FROM the WHERE idthe = %d", $id);
    $result = mysqli_query($db, $query);
    if ($result && mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        $data = array(
            'nom' => $row['variete'],
            'occupation' => $row['occupation']
        );

        mysqli_free_result($result);
        return $data;
    } else {

        return "Aucune variété trouvée pour cet ID";
    }
}


function assembleResultats($date) {
    $poidsRestant = poids_restant_byparcelle_date($date, $date);
    $parcelles = getAllParcelle();
    $resultats = array();
    foreach ($parcelles as $parcelle) {
        $idParcelle = $parcelle['idparcelle'];
        $nomVarieteEtOccupation = getNom($parcelle['idthe']);
        $surface = $parcelle['surface'];
        if(isset($poidsRestant[$idParcelle])){
            $poidsRestantParcelle = $poidsRestant[$idParcelle];
        }else{
            $poidsRestantParcelle = 0;
        }
        $nombreDePieds = $surface / $nomVarieteEtOccupation['occupation'];
        $detailsParcelle = array(
            'id' => $parcelle['idparcelle'],
            'nom_variete' => $nomVarieteEtOccupation['nom'],
            'surface' => $surface,
            'poids_restant' => $poidsRestantParcelle,
            'nombre_de_pieds' => $nombreDePieds
        );
        $resultats[] = $detailsParcelle;
    }
    return $resultats;
}








?>