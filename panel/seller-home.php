<?php
    $title = 'Seller Reviews';
    include 'header.php';
    $get_orders = $data->select("SELECT * FROM `orders` ORDER BY `id` DESC LIMIT 6");


    $total_orders = $data->select("SELECT `id` FROM `orders`");
    $total_products = $data->select("SELECT `id` FROM `products`");
    $total_customers = $data->select("SELECT `id` FROM `users`");
    $total_feedback = $data->select("SELECT `id` FROM `feedback`");

    $orders = mysqli_num_rows($total_orders);
    $products = mysqli_num_rows($total_products);
    $customers = mysqli_num_rows($total_customers);
    $feedback = mysqli_num_rows($total_feedback);


    if (isset($_POST['orderstatus'])) {
        $uniqueid = $_POST['statusid'];
        $newstatus = $_POST['orderstatus'];
        $change_status = $data->select("UPDATE `orders` SET `status`='$newstatus' WHERE `id` = '$uniqueid'");
        $get_orders = $data->select("SELECT * FROM `orders`");
    }
?>

<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Orders </h6>
                            <div class="stats-and-number">
                                <h2><?php echo $orders; ?></h2>
                                <img src="img/total-orders.svg" alt="" style="width: 13%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Products</h6>
                            <div class="stats-and-number">
                                <h2><?= $products  ?></h2>
                                <img src="img/total-products.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Customer</h6>
                            <div class="stats-and-number">
                                <h2><?= $customers  ?></h2>
                                <img src="img/total-user.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Email Sent</h6>
                            <div class="stats-and-number">
                                <h2><?= $feedback  ?></h2>
                                <img src="img/total-email.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- seller dashboard stats ends here -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="recent-orders-wrapper">
                            <div class="content-wrapper">
                                <h5>Recent Orders</h5>
                            </div>
                            <div class="table-responsive">
                            <table class="table">
                                <thead class="topbar">
                                    <th class="orderid">Order ID</th>
                                    <th class="billingname">Buyer</th>
                                    <th class="amount">Brand</th>
                                    <th class="items">Price</th>
                                    <th class="shipmentstatus">Quantity</th>
                                    <th class="details">Address</th>
                                    <th class="details">status</th>
                                </thead>
                                <tbody>
                                    <?php while ($all_data = $get_orders->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $all_data['id'] ?></td>
                                            <td><?php echo $all_data['username'] ?></td>
                                            <td><?php echo $all_data['brand_name'] ?></td>
                                            <td><?php echo $all_data['total_price'] ?></td>
                                            <td><?php echo $all_data['qty'] ?></td>
                                            <td><?php echo $all_data['address'] ?></td>
                                            <td>
                                                <form method="post" name="update_form">
                                                    <input type="hidden" name="statusid" value="<?php echo $all_data['id']; ?>">
                                                    <select name="orderstatus" id="" onchange="this.form.submit()">
                                                        <option <?php print ($all_data['status'] == "Pending") ? "selected" : ""; ?> value="Pending">Pending</option>
                                                        <option <?php print ($all_data['status'] == "Dispatch") ? "selected" : ""; ?> value="Dispatch">Dispatch</option>
                                                        <option <?php print ($all_data['status'] == "Delivered") ? "selected" : ""; ?> value="Delivered">Delivered</option>
                                                    </select>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                            <div class="button-wrapper">
                                <a class="text-right" href="seller-orders.php">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>