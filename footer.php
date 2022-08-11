<<<<<<< HEAD
<?php

if (isset($_POST['subscribe'])) {
    $email=$_POST['email'];
    
    $sub="INSERT INTO `newsletter`
        ( `email`) VALUES
        ('$email')";
        mysqli_query($connect,$sub);
}    



?>
<section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
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
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
=======
>>>>>>> 27690e51a4ce0768bf5733aacbc1472e1c83c836
<footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget"><a class="footer-logo" href="#"><img src="images/logo.png"
                                alt="logo"></a>
                        <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam
                            assumenda dolor perspiciatis sit ipsum dolor amet.</p>
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
                <div class="col-sm-6 col-xl-3">
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
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">quick Links</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Best Seller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Carrer</a></li>
                                <li><a href="#">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Download App</h3>
                        <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem
                            obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                        <div class="footer-app"><a href="#"><img src="images/google-store.png" alt="google"></a><a
                                href="#"><img src="images/app-store.png" alt="app"></a></div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">Mironcoder</a></p>
                        <div class="footer-card"><a href="#"><img src="images/payment/jpg/01.jpg" alt="payment"></a><a
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