<?php include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/user-auth.css">
<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>welcome!</h2>
                            <p>Use your credentials to access</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>login with facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>login with twitter</a></li>
                                <li><a href="#" class="google"><i class="fab fa-google"></i>login with google</a></li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>login with instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form">
                                <div class="form-group"><input type="email" class="form-control" placeholder="Enter your email"></div>
                                <div class="form-group"><input type="password" class="form-control" placeholder="Enter your password"></div>
                                <div class="form-check mb-3"><input class="form-check-input" type="checkbox" value="" id="check"><label class="form-check-label" for="check">Remember Me</label></div>
                                <div class="form-button"><button type="submit">login</button>
                                    <p>Forgot your password?<a href="reset-password.php">reset here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Don't have any account?<a href="register.php">register here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer-link.php';
include 'footer.php';
?>