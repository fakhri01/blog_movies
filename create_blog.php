<?php
require 'libs/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = controlInput($_POST["description"]);
    $imageUrl = $_POST["imageUrl"];
    $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $title), '-'));
    ;
    $imdb_rating = floatval($_POST["imdb_rating"]);
    $release_date = $_POST["release_date"];
    $running_time = intval($_POST["running_time"]);
    $isActive = isset($_POST["isActive"]) ? true : false;
    $category_id = intval($_POST["category_id"]);
    insertBlog($title, $description, $imageUrl, $slug, $imdb_rating, $release_date, $running_time, $isActive, $category_id);

}

?>

<?php
include_once 'partials/head.php';
include_once 'partials/header.php';
?>


<h1 class="text-center my-3">Create New Blog Post</h1>

<div class="container">
    <form method="POST" class="p-4 border rounded bg-light">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="imageUrl" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="imageUrl" name="imageUrl">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Genre</label>
            <select class="form-select" id="inputGroupSelect01" name="category_id">
                <option selected>Choose...</option>
                <?php $result = selectCategories();
                while ($c_row = mysqli_fetch_assoc($result)):
                    ?>
                    <option value="<?php echo $c_row["id"] ?>">
                        <?php echo ucwords($c_row["category_name"]) ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="imdb_rating" class="form-label">IMDB Rating</label>
            <input type="number" step="0.1" min="0" max="10" class="form-control" id="imdb_rating" name="imdb_rating"
                required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>

        <div class="mb-3">
            <label for="running_time" class="form-label">Running Time (minutes)</label>
            <input type="number" class="form-control" id="running_time" name="running_time" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="1" id="isActive" name="isActive">
            <label class="form-check-label" for="isActive">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php include_once 'partials/ckeditor.php' ?>
<?php include_once 'partials/footer.php' ?>