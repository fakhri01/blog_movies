<?php

if (isset($_POST['login'])) {
    $user = $_POST["user"];
    $pass = $_POST["password"];

    if ($user == user and $pass == pass) {
        setcookie("user", $user, time() + 60 * 60);
        setcookie("login", true, time() + 60 * 60);
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        echo "<div class=\"alert alert-danger mb-0 \" role=\"alert\">
                Username or password is wrong!
            </div>";
    }
}
// if(isset($_POST['signup'])){
//     echo 'signup';
// }

?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <?php if (!isset($_COOKIE["login"])): ?>
                    <div>
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#authModal">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login / Sign Up
                        </button>
                    </div>
                <?php else: ?>
                    <div class="dropdown text-end">
                        <button
                            class="btn btn-outline-secondary btn-sm dropdown-toggle d-flex align-items-center mx-auto mx-lg-0"
                            type="button" data-bs-toggle="dropdown">
                            <span class="me-2 fw-bold"><?php echo $_COOKIE["user"] ?></span>
                            <i class="bi bi-person-circle fs-5"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

<?php include 'login-signup-modal.php'; ?>