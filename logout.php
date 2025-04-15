<?php 


setcookie("username", $user, time() - 60 * 60);
setcookie("login", false, time() - 60 * 60);

$prevPage = $_SERVER["HTTP_REFERER"] ?? 'index.php';


header("Location: $prevPage");