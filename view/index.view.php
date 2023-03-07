<?php 
include './partials/header.php';
include './partials/footer.php';
?>
<?php
$i = 1;
foreach (getLimitMovies(5) as $film) {
?>
    <?= $i ?> <br>
    <?= $film['title'] ?><br>
    <?= $film['genres'] ?><br>
    <?= $film['cast'] ?><br>
    <?= $film['plot'] ?> <br>
    <hr>
    <?php

    $i++; ?>
<?php } ?>

<?php
// include '../partials/footer.php'; ?>