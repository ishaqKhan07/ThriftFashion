<?php
$title = "Products";
include 'header.php';

$brands = $data->select('select * from brands');
$product_categories = $data->select('select * from product_categories');


 if(isset($_POST['addBrand'])){
    $name=$_POST['name'];
    $catagory_id=$_POST['catagory_id'];
    $brand_id=$_POST['brand_id'];
    $description=$_POST['description'];
    $stock=$_POST['stock'];
    $img= $_FILES['image'];

    $ds="images/$img";
    

    move_uploaded_file($src, $ds);

    $q= "INSERT INTO `products`(`name` , `catagory_id` , `brand_id` , `description` , `stock` , `Image`) VALUES 
    ('$name','$catagory_id','$brand_id','$descripton','$stock','$ds')";
    mysqli_query($con,$q);
}
?>
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="sellers_orders">
                    <div class="heading_wrapper mb-3">
                        <h4>Products</h4>

                    </div>
                    <div class="add-upload-wrapper">
                        <button type="button" class="btn add-labels" data-toggle="modal" data-target="#exampleModal">
                            Add Brand
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn" type="button" data-toggle="modal"
                                        data-target="#exampleModalCenter">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                            <tr>
                                <td class="orderid">Active</td>
                                <td class="billingname">Koizuma Massage Gun </td>
                                <td class="amount">CA12345</td>
                                <td class="items">
                                    <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                </td>
                                <td class="shipmentstatus">Mon 11 July</td>
                                <td class="details">$300 </td>
                                <td class="Available">10 </td>
                                <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                <td class="Detailsu">
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
                        </tbody>
                    </table>
                    <div class="paginations_results">
                        <div class="showing_results">
                            <p>Showing <b>7</b> of over 50 <b>results</b></p>
                        </div>
                        <ul class="paginations">
                            <li class="arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                            <li class="pagi">1</li>
                            <li class="pagi">2</li>
                            <li class="pagi">3</li>
                            <li class="pagi">..</li>
                            <li class="pagi">90</li>
                            <li class="arrow right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
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

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h4 class="">Add product</h4>
                <form action="https://demos-clients-websites.com/monkey-market/seller-payment.php">
                    <div class="modal-body">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required value="">

                        <label>Select Category</label>
                        <select class="form-control" name="category_id" id="">
                            <?php while($cat =  $product_categories->fetch_assoc()){ ?>
                                <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                            <?php } ?> 
                        </select>

                        <label>Select Brand</label>
                        <select class="form-control" name="brand" id="">
                            <?php while($brand =  $brands->fetch_assoc()){ ?>
                            <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
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
<?php include 'footer.php'?>