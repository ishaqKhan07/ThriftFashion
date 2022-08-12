
<?php 
$title = 'Seller Reviews';
include 'header.php'
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
                                <h2>950</h2>
                                <img src="img/total-orders.svg" alt="" style="width: 13%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Products</h6>
                            <div class="stats-and-number">
                                <h2>150</h2>
                                <img src="img/total-products.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Customer</h6>
                            <div class="stats-and-number">
                                <h2>45</h2>
                                <img src="img/total-user.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dashboard-stats-wrapper">
                            <h6 class="item-label">Total Email Sent</h6>
                            <div class="stats-and-number">
                                <h2>140</h2>
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
                                    <thead>
                                        <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Billing Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Items</th>
                                            <th scope="col">Shipment Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>
                                        <tr>
                                            <th class="num" scope="row">#12345</th>
                                            <td class="name">Koizuma Massage</td>
                                            <td class="price">$550</td>
                                            <td class="item">2</td>
                                            <td class="shipment">Unshipped</td>
                                            <td class="details"><a href="#">View Details</a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="button-wrapper">
                                <a class="text-right" href="#">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>