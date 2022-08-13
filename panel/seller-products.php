<?php
$title = "Products";
include 'header.php';

$brands = $data->select('select * from brands');
$product_categories = $data->select('select * from product_categories');
$products= $data->select("select * from products");

$imageError = '';
 if(isset($_POST['addBrand'])){
    $name=$_POST['name'];
    $catagory=$_POST['category_id'];
    $brand= $_POST['brand_id'];
    $description=$_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $imageError =  "Sorry, only JPG, JPEG & PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    }


    if($uploadOk == 1){
        if (move_uploaded_file($_FILES["image"]["tmp_name"], '../images/product/'.$org_file)) {

            $add = $data->add("INSERT INTO `products`(`name` , `category_id` , `brand_id` , `description` , `stock` , `price`, `Image`) VALUES 
            ('$name','$catagory','$brand','$description','$stock', '$price', '$org_file')");
        //    die($add);
           if($add){
                $_SESSION['flash_success'] = 'Product Added Successfully!';
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
            <div class="col-12">
                <div class="sellers_orders">
                    <div class="heading_wrapper mb-3">
                        <h4>Products</h4>

                    </div>
                    <div class="add-upload-wrapper">
                        <button type="button" class="btn add-labels" data-toggle="modal" data-target="#exampleModal">
                            Add Products
                        </button>
                    </div>
                    <table class="table" id="myTable">
                        <thead>
                            <tr class="topbar">
                                <th>Id</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($data = $products->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $data['id'] ?></td>
                                    <td><?php echo $data['category_id'] ?></td>
                                    <td><?php echo $data['brand_id'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['description'] ?></td>
                                    <td><img src="../images/product/<?php echo $data['image'] ?>"></td>
                                    <td><?php echo $data['stock'] ?></td>
                                    <td><?php echo $data['price'] ?></td>
                                    <td><?php echo $data['created_at'] ?></td>
                                    <td><?= $data['updated_at'] ?></td>
                                    <td>
                                        <a href="#" class="editData" data-id="<?php echo $data['id']?>" data-name="<?php echo $data['name']?>" data-cat="<?= $data[''] ?>"  data-toggle="modal" data-target="#editModal">
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
</section>
<!-- seller dashboard-wrapper end here -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required value="">

                        <label>Select Category</label>
                        <select class="form-control" name="category_id" id="">
                            <?php while($cat =  $product_categories->fetch_assoc()){ ?>
                                <option value="<?= $cat['name'] ?>"><?= $cat['name'] ?></option>
                            <?php } ?> 
                        </select>

                        <label>Select Brand</label>
                        <select class="form-control" name="brand_id" id="">
                            <?php while($brand =  $brands->fetch_assoc()){ ?>
                                <option value="<?= $brand['name'] ?>"><?= $brand['name'] ?></option>
                           <?php } ?> 
                        </select>
                        <label>Description</label>
                        <textarea name="description" class="form-control" required></textarea>

                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control" required value="">

                        <label>price</label>
                        <input type="number" name="price" class="form-control" required value="">

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
</div>
<?php include 'footer.php';?>
