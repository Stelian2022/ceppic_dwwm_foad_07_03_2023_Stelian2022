<?php
include './inc/fonctions.php';
include './inc/pdo.php';
include './partials/header.php';
?>
<div id="card">



    <table>
        <thead>
            <tr>
                <th class="headTab">id</th>
                <th class="headTab">Titre</th>
                <th class="headTab">Genre</th>
                <th class="headTab">Anée</th>
                <th class="headTab">Actions</th>

            </tr>

        </thead>

        <tbody>

            <?php
            foreach (getLimitMovies(5) as $film) {
            ?>
                <tr>
                    <td class="tab"><?= $film['id'] ?></td>
                    <td class="tab"> <?= $film['title'] ?></td>
                    <td class="tab"><?= $film['genres'] ?></td>
                    <td class="tab"><?= $film['year'] ?></td>
                    <td class="tab"><a href="./edit.php?id=<?= $film['id'] ?>" class="button"> Edit</button>
                            <a href="./edit.php?id=<?= $film['id'] ?>" class="button"> Supression</button>


                    </td>
                </tr>


                <?php
                ?>

            <?php } ?>
        </tbody>
</div>