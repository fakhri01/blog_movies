<?php

$res = selectBlog();

while ($row = mysqli_fetch_assoc($res)): ?>
    <?php if($row["isActive"]): ?>
    <div class='card m-2 col-3' style='width: 18rem;'>
        <img src="<?php echo $row['imageUrl'] ?>" class='card-img-top' alt="<?php echo $row['title'] ?>">
        <div class='card-body'>
            <h5 class='card-title'><?php echo (shortenText(ucwords($row['title']), 35)) ?></h5>
            <p class='card-text'><?php echo (shortenText($row["description"], 75)) ?></p>
            <a href="details.php?title=<?php echo $row['slug'] ?>" class='btn btn-primary'>Read More</a>
            <div class='mt-2'>
                <!-- <span class='badge bg-primary'>Genre: <?php echo $row['genre'] ?></span> -->
                <span class='badge bg-warning'><?php echo $row["imdb_rating"] ?></span>
            </div>
        </div>
    </div>
    <?php
    endif;
endwhile;
?>