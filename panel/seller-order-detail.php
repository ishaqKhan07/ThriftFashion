

<?php 
$title = 'Seller Reviews';
include 'header.php'
?>

<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="order_details">
                    <div class="order-no">
                        <p>Order #12345 was placed on 5 feb 2022</p>
                    </div>
                    <div class="about-order">
                        <div class="title">
                            <h4>Order Detail</h4>
                        </div>
                        <div class="product detailed">
                            <div class="property">
                                <p>Product :</p>
                            </div>
                            <div class="value">
                                <img src="img/pro-detail.png" alt="">
                            </div>
                        </div>
                        <div class="product-name detailed">
                            <div class="property">
                                <p>Product Name :</p>
                            </div>
                            <div class="value">
                                <p>Koizuma Massage Gun </p>
                            </div>
                        </div>
                        <div class="subtotal detailed">
                            <div class="property">
                                <p>Sub Total :</p>
                            </div>
                            <div class="value">
                                <p>$ 8.00</p>
                            </div>
                        </div>
                        <div class="shipping detailed">
                            <div class="property">
                                <p>Shipping</p>
                            </div>
                            <div class="value">
                                <p>$ 2</p>
                            </div>
                        </div>
                        <div class="payment-method detailed">
                            <div class="property">
                                <p>Payment method</p>
                            </div>
                            <div class="value">
                                <p>Bank transfer</p>
                            </div>
                        </div>
                        <div class="net-total detailed">
                            <div class="property">
                                <p>Total</p>
                            </div>
                            <div class="value">
                                <p>$ 10.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <a href="seller-payment.html" class="print_order btn">Print Order</a>
                        <a href="seller-orders.html" class="print_order btn">Back</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include 'footer.php'?>