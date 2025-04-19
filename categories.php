<?php

require 'libs/functions.php';
require 'libs/variables.php';


if ($_SERVER["REQUEST_METHOD"] === "POST" and isset($_POST["editCategory"])) {
    $id = $_POST["id"] ?? null;
    $categoryName = htmlspecialchars(trim($_POST["categoryName"])) ?? null;
    $isActive = isset($_POST["isActive"]) ? 1 : 0;



    if ($id !== null) {
        if ($categoryName !== '') {
            updateCategory($id, $categoryName, $isActive);
            $errorMessage = 'Category updated succesfully!';
            $errorType = 'success';
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $errorMessage = 'Category name must be filled!';
            $errorType = 'warning';
        }
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["deleteCategory"])) {
    $id = $_POST["id"] ?? null;
    if ($id !== null) {
        deleteCategory($id);
        $errorMessage = "Category deleted!";
        $errorType = 'danger';
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["addCategory"])) {
    $categoryName = htmlspecialchars(trim($_POST["categoryName"])) ?? null;
    $isActive = isset($_POST["isActive"]) ? 1 : 0;
    if ($categoryName !== '' and $categoryName !== null) {
        addCategory($categoryName, $isActive);
        $errorMessage = "Category added successfully!";
        $errorType = 'success';
    } else {
        $errorMessage = 'An error occurred!';
        $errorType = 'danger';
    }
}

?>
<?php include_once 'partials/head.php' ?>
<?php include_once 'partials/header.php' ?>
<main>
    <h1 class="text-center my-3">Create/Edit/Delete Categories</h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                data-bs-target="#addCategoryModal">
                <i class="bi bi-plus-lg me-2"></i>
                Add Category
            </button>
        </div>
        <?php include 'partials/addCategoryModal.php'; ?>

        <?php if ($errorMessage): ?>
            <div class="alert alert-<?php echo $errorType ?> text-center" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif ?>
        <table class="table w-50 m-auto mb-5">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Active</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = selectCategories();
                $num = 1;
                while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $num; ?></td>
                        <td class="w-100"><?php echo ucfirst($row["category_name"]); ?></td>
                        <td class="fs-5"><?php if ($row["isActive"]): ?> <i class=" bi bi-check-lg"></i><?php else: ?><i
                                    class="bi bi-x"></i><?php endif; ?></td>
                        <td><button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editCategory<?php echo $row["id"]; ?>">Edit</button></td>
                        <td><button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target='#deleteCategory<?php echo $row["id"]; ?>'>Delete</button></td>
                        <?php include 'partials/category-delete-modal.php' ?>
                        <?php include 'partials/category-edit-modal.php' ?>
                    </tr>
                    <?php $num++; endwhile; ?>
            </tbody>
        </table>
    </div>
</main>




<?php include_once 'partials/footer.php' ?>