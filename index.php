<?php

$categoryArray = [
    "Drama",
    "Action",
    "Musical",
    "Adventure"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies App</title>
</head>

<body>
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
                <?php include_once './partials/movieCard.php' ?>
            </div>
        </div>
    </main>
</body>

</html>