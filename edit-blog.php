<?php
require 'libs/functions.php';

if (!isset($_GET["title"])) {
    header("Location: error404.php");
}

$title = $_GET["title"];
$result = selectBlogByTitle($title);
$row = mysqli_fetch_assoc($result);

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
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row["title"] ?>"
                required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>
                <?php echo $row["description"] ?>
            </textarea>
        </div>

        <div class="mb-3">
            <label for="imageUrl" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="imageUrl" name="imageUrl" value="<?php echo $row["imageUrl"] ?>">
        </div>

        <div class="mb-3">
            <label for="imdb_rating" class="form-label">IMDB Rating</label>
            <input type="number" step="0.1" min="0" max="10" class="form-control" id="imdb_rating" name="imdb_rating"
                value="<?php echo $row["imdb_rating"] ?>" required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date"
                value="<?php echo $row["release_date"] ?>" required>
        </div>

        <div class="mb-3">
            <label for="running_time" class="form-label">Running Time (minutes)</label>
            <input type="number" class="form-control" id="running_time" name="running_time"
                value="<?php echo $row["running_time"] ?>" required>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="isActive" name="isActive" <?php echo $row["isActive"] ? 'checked' : ''; ?>>
            <label class="form-check-label" for="isActive">Active</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php include_once 'partials/ckeditor.php' ?>
<?php include_once 'partials/footer.php' ?>