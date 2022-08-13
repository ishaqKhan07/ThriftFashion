<?php
$title = 'Product Categories';
include 'header.php';

$product_category = $data->select("select * from product_categories");
if (isset($_POST['addCategories'])) {
    $name = $_POST['name'];

    $add = $data->add("insert into product_categories (`name`) values ('$name')");
    if ($add) {
        if ($add) {
            $product_category = $data->select("select * from product_categories");
            $_SESSION['flash_success'] = 'Category Added Successfully!';
            $script =  <<< JS
               location.reload();
            JS;
        }
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $editQuery = $data->select("UPDATE `product_categories` SET `name` = '$name'  WHERE `id` = '$id'");
    if ($editQuery) {
        $product_category = $data->select("select * from product_categories");
        $_SESSION['flash_success'] = 'Category updated Successfully!';
        $script =  <<< JS
               location.reload();
            JS;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $deleteQuery = $data->select("DELETE FROM `product_categories` WHERE `id` = '$id'");
    if ($deleteQuery) {
        $product_category = $data->select("select * from product_categories");
        $_SESSION['flash_success'] = 'Category delete Successfully!';
        $script =  <<< JS
           location.reload();
        JS;
    }
}

?>

<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="customer-wrapper">
                    <div class="content-wrapper">
                        <h4>Products Categories</h4>
                        <button type="button" class="btn add-labels" data-toggle="modal" data-target="#exampleModal">
                            Add Categories
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Updated_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($product_categories = $product_category->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $product_categories['id']; ?></td>
                                        <td><?= $product_categories['name']; ?></td>
                                        <td><?= $product_categories['created_at']; ?></td>
                                        <td><?= $product_categories['updated_at']; ?></td>
                                        <td>
                                            <a href="#" class="editData" data-id="<?php echo $product_categories['id'] ?>" data-name="<?php echo $product_categories['name'] ?>" data-toggle="modal" data-target="#editModal">
                                                <img src="images/icons/edit.png" />
                                            </a>
                                            <form method="post" style="display:contents!important;">
                                                <input type="hidden" value="<?= $product_categories['id'] ?>" name="id" />
                                                <button style="background-color:transparent!important; border:none;" type="submit" name="delete">
                                                    <img src="images/icons/delete.png" />
                                                </button>
                                            </form>
                                            <a href="">

                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required value="">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="addCategories" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>






<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <label>Name</label>
                    <input type="hidden" value="" name="id" id="updateId" />
                    <input type="text" id="updateName" name="name" class="form-control" required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script>
    $(document).ready (function(){
        var id;
        var name;
        $( ".editData" ).on( "click", function(){
             id =  $(this).attr("data-id");
             name = $(this).attr("data-name");

            
            $('#updateId').val(id);
            $('#updateName').val(name);
        });

    });
</script>