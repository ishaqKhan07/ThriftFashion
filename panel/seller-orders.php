    <?php
    $title = 'Seller Reviews';
    include 'header.php';
    $get_orders = $data->select("SELECT * FROM `orders`");
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

                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="shipmethods">
                                <div class="heading_wrappers">
                                    <h4>Filters</h4>
                                    <h5>Statu</h5>
                                </div>
                                <!-- <div class="shipment_methods">
                                    <ul class="shipmemntradios">
                                        <li>
                                            <label class="container">All
                                                <input type="radio" checked="checked" name="shipradio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container">Process
                                                <input type="radio" name="shipradio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container">Shipped
                                                <input type="radio" name="shipradio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container">Unshipped
                                                <input type="radio" name="shipradio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="filters">
                                <div class="title">
                                    <!-- <h6>Date Range</h6> -->
                                </div>
                                <div class="input-group">
                                    <form action="" method="post">
                                        <span class="spacer">-</span>
                                        <div class="form-group">
                                            <label for="weekly"></label>
                                            <select id="weekly" class="form-control">
                                                <option selected>last 7 Days</option>
                                                <option>last 14 Days</option>
                                                <option>last 21 Days</option>
                                                <option>last 28 Days</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sellers_orders">
                        <div class="heading_wrapper">
                            <h4>Orders</h4>
                        </div>
                        <div class="table-resposnive">
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
    </section>
    <?php include 'footer.php' ?>