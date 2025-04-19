<div class="col-10">
    <div class="row">
        <?php
        $res = selectBlog();
        while ($row = mysqli_fetch_assoc($res)):
            if ($row["isActive"]):
                ?>
                <div class='card m-2 col-md-3' style='width: 18rem;'>
                    <img src="<?php echo $row['imageUrl']; ?>" class='card-img-top' alt="<?php echo $row['title']; ?>">
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo safeDecodeAndShorten(ucwords($row['title']), 35); ?></h5>
                        <p class='card-text'><?php echo safeDecodeAndShorten($row["description"]); ?></p>
                        <a href="details.php?title=<?php echo $row['slug']; ?>" class='btn btn-primary'>Read More</a>
                        <a href="edit-blog.php?title=<?php echo $row['slug']; ?>" class='btn btn-secondary'>Edit Blog</a>
                        <div class='mt-2'>
                            <span class='badge bg-dark'>Genre: <?php echo ucwords($row["category_name"]); ?></span>
                            <span class='badge bg-warning'><?php echo $row["imdb_rating"]; ?></span>
                        </div>
                    </div>
                </div>
            <?php
            endif;
        endwhile;
        ?>
    </div> 
</div>