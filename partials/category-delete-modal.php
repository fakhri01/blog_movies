<div class="modal fade" id='deleteCategory<?php echo $row["id"]; ?>' tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to you want to delete <?php echo ucfirst($row["category_name"]); ?>?
            </div>
            <div class="modal-footer">
                <form method="Post">
                    <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                    <button type="submit" name="deleteCategory" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>