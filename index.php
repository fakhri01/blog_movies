<?php

require './libs/variables.php';
require './libs/functions.php';
?>

<?php include_once './partials/head.php' ?>
<?php include_once './partials/header.php' ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="categories my-2">
                    <ul class="list-group">
                        <?php
                        for ($i = 0; $i < count($categoryArray); $i++) {
                            echo "<li class='list-group-item'>$categoryArray[$i]</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php include_once './partials/movieCard.php' ?>
                </div>
            </div>
        </div>
</main>

<?php include_once './partials/footer.php' ?>