<?php

require 'libs/variables.php';
require 'libs/functions.php';
$title = "Home";
?>

<?php include_once 'partials/head.php' ?>
<?php include_once 'partials/header.php' ?>
<main>
    <div class="container">
        <div class="row">
            <?php include_once 'partials/category-menu.php' ?>
            <div class="col-10">
                <div class="row">
                    <?php include_once 'partials/movieCard.php' ?>
                </div>
            </div>
        </div>
</main>
<?php include_once 'partials/footer.php' ?>