<?php
require 'libs/functions.php';

if (!isset($_GET["title"])) {
  header('Location: error404.php');
}

$title = $_GET["title"];
$result = selectBlogByTitle($title);
$row = mysqli_fetch_assoc($result);

if (!$row) {
  header('Location: error404.php');
}

?>
<?php include 'partials/head.php' ?>
<?php include 'partials/header.php' ?>


<div class="container py-5">
  <!-- Movie Details -->
  <div class="row mb-4 bg-white p-4 rounded shadow-sm">
    <div class="col-md-4">
      <img src="<?php echo $row["imageUrl"] ?: 'images/placeholder.png' ?>" class="img-fluid rounded"
        alt="<?php echo $row["title"] ?>">
    </div>
    <div class="col-md-8">
      <h2 class="mb-3"><?php echo $row["title"] ?></h2>
      <p><strong>Release Date:</strong> <?php echo $row["release_date"] ?></p>
      <p><strong>Running Time:</strong> <?php echo $row["running_time"] ?> mins</p>
      <p><strong>Rating:</strong> <?php echo number_format($row["imdb_rating"], 1) ?> / 10</p>
      <p class="mt-4"><?php echo htmlspecialchars_decode($row["description"]) ?></p>

      <div class="d-flex align-items-center gap-4 mt-3">
        <div>
          <i class="bi bi-heart-fill text-danger me-1"></i> <span>128</span>
        </div>
        <div>
          <i class="bi bi-chat-left-text-fill text-primary me-1"></i> <span>45</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Comments Section -->
  <div class="bg-white p-4 rounded shadow-sm">
    <h4 class="mb-4">Comments</h4>

    <!-- Add Comment -->
    <form class="mb-4">
      <div class="mb-3">
        <textarea class="form-control" rows="3" placeholder="Write a comment..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>

    <!-- Existing Comments -->
    <div class="mb-3 border-bottom pb-3">
      <strong>Jane Doe</strong>
      <p class="mb-1">Absolutely loved the atmosphere and soundtrack!</p>
      <small class="text-muted">2 hours ago</small>
    </div>
    <div class="mb-3 border-bottom pb-3">
      <strong>John Smith</strong>
      <p class="mb-1">Best Batman movie yet. Pattinson killed it.</p>
      <small class="text-muted">5 hours ago</small>
    </div>
  </div>
</div>


<?php include 'partials/footer.php' ?>