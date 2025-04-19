<?php

$title = "Movies";

require 'libs/variables.php';
require 'libs/functions.php';


?>

<?php include 'partials/head.php' ?>
<?php include 'partials/header.php' ?>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="movies.php" method="GET" class="input-group w-50 mx-auto my-3">
                    <input type="text" name="query" class="form-control" placeholder="Search movies..."
                        aria-label="Search">
                    <button class="btn btn-outline-primary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php include_once 'partials/category-menu.php'; ?>
            <?php include_once 'partials/movieCard.php'; ?>
        </div>
    </div>
</main>


<?php include 'partials/footer.php' ?>