<?php

if (isset($_POST['add_soft_cat'])) {
    $return_msg = $obj->add_soft_cat($_POST);
}

$cat_data = $obj->display_soft_cat();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $catID = $_GET['id'];
        $dltMsg = $obj->delete_soft_cat($catID);
    }
}

?>

<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-info border-radius-lg py-3 d-flex justify-content-between">
                        <h6 class="text-white text-capitalize ps-3 mt-2">Software Category</h6>
                        <button class="btn btn-white my-0 mr-3" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus text-info"></i> Add Category</button>
                    </div>
                </div>

                <?php if (isset($return_msg)) { ?>

                    <div class="alert alert-success alert-dismissible text-white text-center m-3" role="alert">
                        <span class=""><?php echo $return_msg; ?></span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <div class="card-body p-4 input-border">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php while ($category = mysqli_fetch_assoc($cat_data)) { ?>

                                    <tr>
                                        <td><?php echo $category['id'] ?></td>
                                        <td><?php echo $category['cat_name'] ?></td>
                                        <td><?php echo $category['cat_desc'] ?></td>
                                        <td class="btn-group">
                                            <a href="#" class="btn bg-gradient-info my-0 px-3"><i class="fas fa-edit"></i></a>
                                            <a href="?status=delete&&id=<?php echo $category['id'] ?>" class="btn bg-gradient-danger my-0 px-3" onclick="return confirm('Do you really want to delete this software category?')"><i class="fas fa-trash"></i></a>
                                        </td>

                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add software category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="" for="Category name">Category name</label>
                                        <input name="cat_name" class="form-control p-2" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="">Description</label>
                                        <textarea name="cat_desc" class="p-2 form-control" id="" class="form-control" cols="" rows="7" required></textarea>
                                    </div>

                                    <div class="text-right">
                                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                                        <button name="add_soft_cat" type="" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
        <div class="toast-header border-0">
            <i class="material-icons text-success me-2">check</i>
            <span class="me-auto font-weight-bold">Successful</span>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body">
            <?php echo $return_msg; ?>
        </div>
    </div>
</div>