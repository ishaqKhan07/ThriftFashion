<?php include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/orderlist.css">
    <section class="inner-section single-banner" style="background: url(images/banner/banner2.jpg) no-repeat center;">
        <div class="container">
            <h2>Order History</h2>
        </div>
    </section>
    <section class="inner-section orderlist-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="orderlist-filter">
                        <h5>total order <span>- (4)</span></h5>
                        <div class="filter-short"><label class="form-label">short by:</label><select class="form-select">
                                <option value="all" selected>all order</option>
                                <option value="recieved">recieved order</option>
                                <option value="processed">processed order</option>
                                <option value="shipped">shipped order</option>
                                <option value="delivered">delivered order</option>
                            </select></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#01</h5>
                            <h5>order recieved</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order recieved</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order processed</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order shipped</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order delivered</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-scroll">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">brand</th>
                                                    <th scope="col">quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#02</h5>
                            <h5>order Processed</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order recieved</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order processed</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order shipped</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order delivered</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-scroll">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">brand</th>
                                                    <th scope="col">quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#03</h5>
                            <h5>order shipped</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order recieved</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order processed</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order shipped</span></li>
                                            <li class="order-track-item"><i class="icofont-close"></i><span>order delivered</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-scroll">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">brand</th>
                                                    <th scope="col">quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderlist">
                        <div class="orderlist-head">
                            <h5>order#04</h5>
                            <h5>order delivered</h5>
                        </div>
                        <div class="orderlist-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="order-track">
                                        <ul class="order-track-list">
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order recieved</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order processed</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order shipped</span></li>
                                            <li class="order-track-item active"><i class="icofont-check"></i><span>order delivered</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>order id</h6>
                                            <p>14667</p>
                                        </li>
                                        <li>
                                            <h6>Total Item</h6>
                                            <p>6 Items</p>
                                        </li>
                                        <li>
                                            <h6>Order Time</h6>
                                            <p>7th February 2021</p>
                                        </li>
                                        <li>
                                            <h6>Delivery Time</h6>
                                            <p>12th February 2021</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="orderlist-details">
                                        <li>
                                            <h6>Sub Total</h6>
                                            <p>$10,864.00</p>
                                        </li>
                                        <li>
                                            <h6>discount</h6>
                                            <p>$20.00</p>
                                        </li>
                                        <li>
                                            <h6>delivery fee</h6>
                                            <p>$49.00</p>
                                        </li>
                                        <li>
                                            <h6>Total<small>(Incl. VAT)</small></h6>
                                            <p>$10,874.00</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="orderlist-deliver">
                                        <h6>Delivery location</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-scroll">
                                        <table class="table-list">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">brand</th>
                                                    <th scope="col">quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>01</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Fresh Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>02</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Radhuni Masala</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>5</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>03</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Pran Prio</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>2</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>04</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Real Food</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>3</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-serial">
                                                        <h6>05</h6>
                                                    </td>
                                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                                    <td class="table-name">
                                                        <h6>product name</h6>
                                                    </td>
                                                    <td class="table-price">
                                                        <h6>$19<small>/kilo</small></h6>
                                                    </td>
                                                    <td class="table-brand">
                                                        <h6>Rdhuni Company</h6>
                                                    </td>
                                                    <td class="table-quantity">
                                                        <h6>7</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-arrow-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">65</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    
    <?php include 'footer-link.php';
include 'footer.php';
?>