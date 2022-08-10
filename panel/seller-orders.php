    
<?php 
$title = 'Seller Reviews';
include 'header.php'
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
                                <div class="shipment_methods">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="filters">
                                <div class="title">
                                    <!-- <h6>Date Range</h6> -->
                                </div>
                                <div class="input-group">
                                    <div class="form-group">
                                        <label for="Fromdate"></label>
                                        <input type="text" id="Fromdate" class="form-control" placeholder="From Date">
                                    </div>
                                    <span class="spacer">-</span>
                                    <div class="form-group">
                                        <label for="ToDate"></label>
                                        <input type="text" id="ToDate" class="form-control" placeholder="To Date">
                                    </div>
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
                                <tr class="topbar">
                                    <th class="orderid">Order ID</th>
                                    <th class="billingname">Billing Name</th>
                                    <th class="amount">Amount</th>
                                    <th class="items">Item</th>
                                    <th class="shipmentstatus">Shipment Status</th>
                                    <th class="details">Details</th>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">#12345</td>
                                    <td class="billingname">Lorem Ipsum</td>
                                    <td class="amount">$550</td>
                                    <td class="items">2</td>
                                    <td class="shipmentstatus">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Unshipped
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="details">
                                        <div class="action_detail">
                                            <button onclick="location.href='seller-order-detail.html';" class="view_detail_btn">View Details</button>
                                            <button class="print_order_btn">Print Order</button>
                                        </div>
                                    </td>
                                </tr>
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
    <?php include 'footer.php'?>