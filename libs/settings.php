<?php

declare(strict_types=1);

$host = "localhost";
$user = "root";
$password = "";
$db_name = "blog_movies";

$connection = mysqli_connect($host, $user, $password, $db_name);
mysqli_set_charset($connection, 'UTF8');

if (mysqli_connect_errno() > 0) {
    die("Error: " . mysqli_connect_errno());
}

?>