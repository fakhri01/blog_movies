<?php
function description($movie)
{
    global $descriptionCharacterLimit;
    return strlen($movie['description']) > $descriptionCharacterLimit ?
        substr(ucwords($movie['description']), 0, $descriptionCharacterLimit) . '...'
        : ucwords($movie['description']);
}

$descriptionCharacterLimit = 75;

function insertBlog(string $title, string $description, string $imageUrl, string $slug, float $imdb_rating, string $release_date, int $running_time, bool $isActive)
{
    require 'settings.php';

    // Escape strings
    $title = mysqli_real_escape_string($connection, $title);
    $description = mysqli_real_escape_string($connection, $description);
    $imageUrl = mysqli_real_escape_string($connection, $imageUrl);
    $slug = mysqli_real_escape_string($connection, $slug);
    $release_date = mysqli_real_escape_string($connection, $release_date);

    $isActive = $isActive ? 1 : 0;

    $query = "INSERT INTO `blog` (`title`, `description`, `imageUrl`, `slug`, `imdb_rating`, `release_date`, `running_time`, `isActive`)
              VALUES ('$title', '$description', '$imageUrl', '$slug', $imdb_rating, '$release_date', $running_time, $isActive)";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    }

    mysqli_close($connection);
    return $result;
}