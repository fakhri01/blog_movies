<?php
foreach ($movies as $movieList):
    foreach ($movieList as $movie): ?>
        <div class='card m-2 col-3' style='width: 18rem;'>
            <img src="<?php echo $movie['images'][0] ?>" class='card-img-top' alt="<?php echo $movie['title'] ?>">
            <div class='card-body'>
                <h5 class='card-title'><?php echo ucwords($movie['title']) ?></h5>
                <p class='card-text'><?php echo (description($movie)) ?></p>
                <a href="details.php?title=<?php echo slug($movie['title']) ?>" class='btn btn-primary'>Read More</a>
                <div class='mt-2'>
                    <span class='badge bg-primary'>Genre: <?php echo $movie['genre'] ?></span>
                    <span class='badge bg-warning'><?php echo $movie["imdb_rating"] ?></span>
                </div>
            </div>
        </div>
        <?php
    endforeach;
endforeach;
?>