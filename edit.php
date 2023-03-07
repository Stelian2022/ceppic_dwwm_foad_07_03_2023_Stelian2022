<?php
include './inc/fonctions.php';
include './inc/pdo.php';
include './partials/header.php';
?>
<?php
// dd($_GET['id']);
if (isset($_GET['id']) && is_numeric($_GET['id'])) :
  $id = trim($_GET['id']);
else :
    exit('Le film n\'est pas disponible');
endif;
// dd(getOneMovie($id));
dd(getOneMovie($id));

include './partials/footer.php';
