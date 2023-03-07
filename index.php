<?php

//Liter les films
include './inc/fonctions.php';
include './inc/pdo.php';
// dd($conn);
// var_dump($conn);
// $resultat = $conn->prepare("SELECT * FROM movies_full WHERE title like '%vadrouille%'");
// $sqlRequest = "SELECT * FROM movies_full LIMIT 30";
// $resultat = $conn->prepare($sqlRequest);
// $resultat->execute();
// $films = $resultat->fetchAll();

// dd(getLimitMovies(2));
// $i = 1;
// foreach (getLimitMovies(5) as $film) {
//     echo $i . '<br>';
//     echo $film['title'] . '<br>';
//     echo $film['genres'] . '<br>';
//     echo $film['cast'] . '<br>';
//     echo $film['plot'] . '<br>';
//     echo '<hr>';
//     $i++;
// }
include './view/index.view.php';
