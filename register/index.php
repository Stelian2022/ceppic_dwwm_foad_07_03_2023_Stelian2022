<?php
require '../inc/fonctions.php';
require '../inc/pdo.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // Supprimez les variables associées aux champs du formulaire
    unset($_POST['login']);
    unset($_POST['email']);
    unset($_POST['pwd']);
    
    // Redirigez l'utilisateur vers la page d'inscription (register) avec les champs vides
    header("Location: index.php");
    exit();
  }
// Récupération des données du formulaire
$pseudo = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['pwd'];

// Hashage du mot de passe
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Récupération de la date et heure actuelles
$created_at = date('Y-m-d H:i:s');

// Insertion des données dans la base de données
$requete = $conn->prepare('INSERT INTO user (login, email, pwd, created_at) VALUES (?, ?, ?, ?)');
$requete->execute([$pseudo, $email, $password_hash, $created_at]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <h1>Formulaire inscription</h1>
    <form action="" method="post">
    <label for="login">Pseudo :</label>
    <input type="text" id="login" name="login" required>
    
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    
    <label for="pwd">Mot de passe :</label>
    <input type="password" id="pwd" name="pwd" required>
    
    <input type="submit" value="S'inscrire">
</form>


</body>

</html>