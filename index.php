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
            <div class="col-2">
                <div class="categories my-2">
                    <ul class="list-group">
                        <?php
                        foreach ($categoryArray as $category): ?>
                            <li class='list-group-item'><a
                                    href="movies.php?category=<?php echo strtolower($category) ?>"><?php echo $category ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php include_once 'partials/movieCard.php' ?>
                </div>
            </div>
        </div>
</main>

<?php include_once 'partials/footer.php' ?>