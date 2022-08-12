<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
include 'custom.php';
if (isset($_SESSION['otp'])) {
    if (isset($_POST['submit'])) {
        $userdata = $_SESSION['signupdata'];
        $otp = $_SESSION['otp'];
        $userotp =  $_POST['otp'];
        if (trim($userotp) == $otp) {
            $username = $userdata['0'];
            $email = $userdata['1'];
            $contact_no = $userdata['2'];
            $password = $userdata['3'];
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            // echo $firstname . $lastname . $email . $category . $password;
            $inserteddata = "INSERT INTO `users` (`name`,`contact_no`,`email`,`password`) VALUES ('$username', '$contact_no', '$email', '$hashedpassword')";
            if (mysqli_query($con, $inserteddata)) {
                $usernewdata = mysqli_query($con, "SELECT * FROM `users` WHERE `email`= '$email'");
                $completedata = mysqli_fetch_assoc($usernewdata);
                $_SESSION['username'] = $email;
                $_SESSION['completedata'] = $completedata;
                unset($_SESSION['otp']);
                header('Location: index.php');
            }
        } else {
            $otperror = "<script>swal('Enter Valid OTP!')<script>";
        }
    }
}
else {
    header('Location: signup.php');
}
include 'header.php';
?>
<link rel="stylesheet" href="css/user-auth.css">


<!--============== Signup Form Start ==============-->
<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-xl-5 col-lg-6 col-md-8 col-sm-10   ">
                <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>Join Now!</h2>
                        <p>Setup A New Account In A Minute</p>
                    </div>
                    <div class="user-form-group">

                        <form class="user-form" method="POST">
                            <div class="form-group"><input type="text" class="form-control" name="otp" placeholder="Enter your name"></div>
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
<!--============== Signup Form End ==============-->

<?php
include 'footer-link.php';
include 'footer.php';
?>