
<?php
$title = 'Brands';
include 'header.php';

$brands = $data->select("select * from brands");

$imageError = '';
if(isset($_POST['addBrand'])){
    $name = $_POST['name'];

    $target_dir = "../images/brands/";
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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $imageError =  "Sorry, only JPG, JPEG & PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    }



    if($uploadOk == 1){
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $org_file)) {

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

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $editQuery = $data->select("UPDATE `brands` SET `name` = '$name'  WHERE `id` = '$id'"); 
    if($editQuery){
            $_SESSION['flash_success'] = 'Brand updated Successfully!';
            $script =  <<< JS
               location.reload();
            JS;
        }

}

if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $deleteQuery = $data->select("DELETE FROM `brands` WHERE `id` = '$id'");
    if($deleteQuery){
        $_SESSION['flash_success'] = 'Brand delete Successfully!';
        $script =  <<< JS
           location.reload();
        JS;
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
                                        <td><img width="80" src="../images/brands/<?= $brand['image']; ?>"></td>
                                        <td><?= $brand['created_at']; ?></td>
                                        <td><?= $brand['updated_at']; ?></td>
                                        <td>
                                            <a href="#" class="editData" data-id="<?php echo $brand['id']?>" data-name="<?php echo $brand['name']?>"  data-toggle="modal" data-target="#editModal">
                                                <img src="images/icons/edit.png"/>
                                            </a>
                                            <form method="post" style="display:contents!important;">
                                                <input type="hidden" value="<?= $brand['id'] ?>" name="id"/>
                                                <button style="background-color:transparent!important; border:none;" type="submit" name="delete" onclick=" confirm(' you want to delete?');">
                                                <img src="images/icons/delete.png"/>
                                                </button>                                                 
                                            </form>
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
                    <button type="submit" name="addBrand" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Brands</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                        <label>Name</label>
                        <input type="hidden" value="" name="id" id="updateId"/>
                        <input type="text" id="updateName" name="name" class="form-control" required>
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" required value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'?>

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