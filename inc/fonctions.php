<?php

declare(strict_types=1);


//fonction dd
function dbug($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 300px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
}

function dd($valeur)
{
    echo "<pre style='background-color:green;overflow: auto;height: 400px;color:white;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}

//fonction pour effacer les chams formulaire
function cleanData($valeur)
{
    if (!empty($valeur) && isset($valeur)) :
        $valeur = htmlentities($valeur);
        $valeur = trim($valeur);

        return $valeur;
    else :
        return false;
    endif;
}
function textData($valeur)
{
    $valeur = preg_match('/^[a-z-A-Z]*$/', $valeur);
    return $valeur;
}
function getOneMovie($valeur)
{
    global $conn;
    $sqlRequest = "SELECT * FROM movies_full WHERE id= :valeur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetch();
}
function getLimitMovies($valeur)
{
    global $conn;
    $sqlRequest = "SELECT * FROM movies_full LIMIT :valeur";
    $resultat = $conn->prepare($sqlRequest);
    $resultat->bindValue(':valeur', $valeur, PDO::PARAM_INT);
    $resultat->execute();
    return $resultat->fetchAll();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Supprimez les variables associées aux champs du formulaire
    unset($_POST['login']);
    unset($_POST['email']);
    unset($_POST['pwd']);
    
    // Redirigez l'utilisateur vers la page d'inscription (register) avec les champs vides
    header("Location: index.php");
    exit();
  }