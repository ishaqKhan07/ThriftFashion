<?php
include 'custom.php';
$name_error = $name_error1 = $email_error = $password_error = $confirmpassword_error = $number_error = "";
if (isset($_SESSION['usertype'])) {
    header('Location: index.php');
}
if (isset($_POST['submit'])) {
    $firstname = $_POST['username'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $validation = true;
    if (trim(strlen($firstname)) <= 2) {
        $name_error = " **name Must be greater then 5**";
        $validation = false;
    }
    if ($validation == true) {
        if (strlen($email) == "" or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = " **Enter valid Email**";
            $validation = false;
        }
        if ($validation == true) {
            $seeusername = "SELECT * FROM `users` WHERE `email`= '$email'";
            $userquery = mysqli_query($con, $seeusername);
            $tkr = mysqli_num_rows($userquery);
            if (mysqli_num_rows($userquery) >= 1) {
                print_r($userquery);
                $email_error = " *Eail ALready Exist**";
                $validation = false;
                echo "<h1>$email_error</h1>";
            }
        }
    }
    if ($validation == true) {
        if (trim(strlen($contact_no)) <= 10) {
            $number_error = " **name Must be greater then 5**";
            $validation = false;
            echo $number_error;
        }
    }
    if ($validation == true) {
        if (trim(strlen($password)) <= 7) {
            $password_error = " **password must be greater than 8**";
            $validation = false;
            echo $password_error;
        }
        if ($validation == true and $password != $confirmpassword) {
            $confirmpassword_error = " **Password doesnot Match**";
            $validation = false;
            echo $confirmpassword;
        }
        echo $password;
    }
    if ($validation == true) {
        // $otp = rand(1000, 10000);
        $otp = "12345";
        if (mail($email, "verify Your Email", $otp, "easybookingabcd@gmail.com")) {
            $_SESSION['signupdata'] = array($firstname, $email, $contact_no, $password);
            $_SESSION['otp'] = $otp;
            header('Location: otp.php');
        }
    }
}
?>
<?php
include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/user-auth.css">

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Setup A New Account In A Minute</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with facebook</a>
                                </li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with twitter</a></li>
                                <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a></li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with
                                        instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form" method="POST">
                                <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter your name"></div>
                                <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Enter your email"></div>
                                <div class="form-group"><input type="number" class="form-control" name="contact_no" placeholder="Enter your Number"></div>
                                <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Enter your password"></div>
                                <div class="form-group"><input type="password" class="form-control" name="confirmpassword" placeholder="Enter repeat password"></div>
                                <div class="form-check mb-3"><input class="form-check-input" type="checkbox" value="" id="check"><label class="form-check-label" for="check">Accept all the <a href="#">Terms & Conditions</a></label></div>
                                <div class="form-button"><button type="submit" name="submit">register</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Already Have An Account?<a href="login.php">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include 'footer-link.php';
    include 'footer.php';
    ?>