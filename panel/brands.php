
<?php
$title = 'Brands';
include 'header.php';

$brands = $data->select("select * from brands");

$imageError = '';
if(isset($_POST['addBrand'])){
    $name = $_POST['name'];

    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $org_file  = time().'.'.$imageFileType;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check == false) {
        $imageError = "File is not an image.";
        $uploadOk = 0;
    }
    if($uploadOk == 1){
        if ($_FILES["image"]["size"] > 500000) {
            $imageError = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    }
    if($uploadOk == 1){
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $imageError =  "Sorry, only JPG, JPEG & PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    }



    if($uploadOk == 1){
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

            $add = $data->add("insert into brands (`name`,`image`) values ('$name' , '$org_file') ");
            if($add){
                $_SESSION['flash_success'] = 'Brand Added Successfully!';
                $script =  <<< JS
                   location.reload();
                JS;
            }

        } else {
            $imageError =  "Sorry, there was an error uploading your file.";
        }
    }

}

?>

<section class="dashboard">
    <div class="container-fluid">
        <?php if(!empty($imageError)){ ?>
            <div class="alert alert-danger"><?= $imageError; ?></div>
        <?php } ?>
        <div class="row">

            <div class="col-lg-12">
                <div class="customer-wrapper">
                    <div class="content-wrapper">
                        <h4>Brands</h4>
                        <button type="button" class="btn add-labels" data-toggle="modal" data-target="#exampleModal">
                            Add Brand
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Updated_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                while ($brand = $brands->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $brand['id']; ?></td>
                                        <td><?= $brand['name']; ?></td>
                                        <td><img src="images/<?= $brand['image']; ?>"></td>
                                        <td><?= $brand['created_at']; ?></td>
                                        <td><?= $brand['updated_at']; ?></td>
                                        <td>
                                            <div class="button-wrap">
                                                <button class="edit">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button>
                                                <button class="edit">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required value="">

                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="addBrand" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'?>