<div class="col-2">
    <div class="categories my-2">
        <ul class="list-group">
            <?php
            $res = selectCategories();

            while ($row = mysqli_fetch_assoc($res)): ?>
                <li class='list-group-item'><a
                        href="blog.php?category=<?php echo strtolower($row['category_name']) ?>"><?php echo ucfirst($row['category_name']) ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>