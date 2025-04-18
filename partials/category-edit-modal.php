<div class="modal fade" id='editCategory<?php echo $row["id"]; ?>' tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <div class="mb-3">
                        <label for="categoryName<?= $row['id'] ?>" class="form-label">Category Name</label>
                        <input type="text" name="categoryName" value="<?= htmlspecialchars($row['category_name']) ?>"
                            class="form-control" id="categoryName<?= $row['id'] ?>">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="isActive" class="form-check-input" id="isActive<?= $row['id'] ?>"
                            <?= $row["isActive"] ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="isActive<?= $row['id'] ?>">Active</label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="editCategory" value="1" class="btn btn-primary">Save
                            changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>