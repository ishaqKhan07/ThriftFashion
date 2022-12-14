
<?php

if (isset($_POST['subscribe'])) {
    $email=$_POST['email'];
    
    $sub="INSERT INTO `newsletter`
        ( `email`) VALUES
        ('$email')";
        mysqli_query($connect,$sub);
}    



?>
<section class="news-part" style="background: url(images/banner/news_letter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Subscribe us </h2>
                        <p>To get latest updates</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form" method="POST">
                        <input type="email" name="email" placeholder="Enter Your Email Address">
                    <button type="submit" name="subscribe"><span>
                        <i class="icofont-ui-email"></i>Subscribe</span></button>
                                </form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                        <h5>Fast Delivery Service</h5>
                        <p>As soon as the order is confirmed, our delivery deparment comes in action and try to deliver the product as fast as they can.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                        <h5>Clean and Tidy Products</h5>
                            <p>Our Products goes through a complete process where each product is hand-washed and dried to give them a new look.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                        <h5>instant support team</h5>
                            <p>We have a 24hr service for the customers where they can ask their questions and queries regarding any product or service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                        <h5>quickly return policy</h5>
                            <p>We have a three days return policy where the customer can return therir product in case of any fault.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xl-4">
                    <div class="footer-widget"><a class="footer-logo" href="#"><img src="images/logo/logo1.png"
                                alt="logo"></a>
                        <p class="footer-desc">We believe no item should be thrown away - especially when it could be worn again. By giving clothes a second life, we???re powering the circular economy for fashion.</p>
                        <ul class="footer-social">
                            <?php
                                 while ($link = mysqli_fetch_assoc($links)){
                            ?>
                                <li><a class="icofont-facebook" href="<?= $link['facebook'] ?>"></a></li>
                                <li><a class="icofont-twitter" href="<?= $link['twitter'] ?>"></a></li>
                                <li><a class="icofont-linkedin" href="<?= $link['linkedin'] ?>"></a></li>
                                <li><a class="icofont-instagram" href="<?= $link['instagram'] ?>"></a></li>
                                <li><a class="icofont-pinterest" href="<?= $link['pinterest'] ?>"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-xl-4">
                    <div class="footer-widget contact">
                        <h3 class="footer-title">contact us</h3>
                        <div class="navbar-info-group">
                        <ul class="footer-contact">
                        <?php
                            while ($con = mysqli_fetch_assoc($contact)) {
                        ?>
                                <li><i class="icofont-ui-email moiz"></i>
                                <p><?= $con['support_mail'] ?></p>
                            </li>
                            <li><i class="icofont-ui-touch-phone"></i>
                                <p><?= $con['phone'] ?></p>
                            </li>
                            <li><i class="icofont-location-pin"></i>
                                <p><?= $con['address'] ?></p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-8 col-xl-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">quick Links</h3>
                        <div class="footer-links">
                            <ul>
                            <li><a href="home-standard.php">home</a></li>
                                <li><a href="about.php">About US</a></li>
                                <li><a href="contact.php">Contact US</a></li>
                                <li><a href="blog-grid.php">Blogs</a></li>
                            </ul>
                            <ul>
                                <li><a href="brand-list.php">Brand List</a></li>
                                <li><a href="shop-4column.php">Shop</a></li>
                                <li><a href="faq.php">FAQ's</a></li>
                                <li><a href="privacy.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">Thrift Fashion</a></p>
                        <div class="footer-card"><a href="#"><img src="images/logo/logo1.png" alt="payment"></a><a
                                href="#"><img src="images/payment/jpg/02.jpg" alt="payment"></a><a href="#"><img
                                    src="images/payment/jpg/03.jpg" alt="payment"></a><a href="#"><img
                                    src="images/payment/jpg/04.jpg" alt="payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</footer>