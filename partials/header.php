<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>view</title>
</head>
<?php
var_dump($_SESSION['login']);
?>

<body>
    <div class="header">
        <h1>Movies</h1>
        <nav>
            <ul>
                <?php if (($_SESSION['login'])) { ?>
                    <li>
                        <a href="./login/deconnexion.php">Deconnection</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="./login/deconnexion.php">Connection</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>