<?php
include 'custom.php';
$name_error = $name_error1 = $email_error = $password_error = $confirmpassword_error = $number_error = "";
if (isset($_SESSION['usertype'])) {
    header('Location: index.php');
}
if(isset($_SESSION['username'])){
    header('Location: profile.php');
}
if (isset($_POST['submit'])) {
    $firstname = $_POST['username'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $validation = true;
    if (trim(strlen($firstname)) <= 3) {
        $name_error = " **name Must be greater then 3**";
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
        if (trim(strlen($contact_no)) <= 7) {
            $number_error = " **number Must be greater then 7**";
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
        }
    }
    if ($validation == true) {
        // $otp = rand(1000, 10000);
        $otp = "12345";
        // if (mail($email, "verify Your Email", $otp, "easybookingabcd@gmail.com")) {
            $_SESSION['signupdata'] = array($firstname, $email, $contact_no, $password);
            $_SESSION['otp'] = $otp;
            header('Location: otp.php');
        // }
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
                <div class="col-6 col-sm-9 col-md-7 col-lg-6 col-xl-5 col-xs-12">
                    <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Setup A New Account In A Minute</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form" method="POST">
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $name_error;} ?></small>
                                    <input type="text" class="form-control" name="username" value="<?php if(isset($_POST['submit'])){echo $firstname;} ?>" placeholder="Enter your name" required minlength="4" maxlength="45"></div>
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $email_error;} ?></small>
                                    <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $email;} ?>" placeholder="Enter your email"  minlength="3" maxlength="122" required>
                                </div>
                                <div class="form-group">
                                <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $number_error;} ?></small>
                                    <input type="number" class="form-control" name="contact_no" value="<?php if(isset($_POST['submit'])){echo $contact_no;} ?>" placeholder="Enter your Number" minlength="8" maxlength="20" required  >
                                </div>
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $password_error;} ?></small>
                                    <input type="password" class="form-control" name="password" value="<?php if(isset($_POST['submit'])){echo $password;} ?>" placeholder="Enter your password"  minlength="7" maxlength="35" required>
                                </div>
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $confirmpassword_error;} ?></small>
                                    <input type="password" class="form-control" name="confirmpassword" value="<?php if(isset($_POST['submit'])){echo $confirmpassword;} ?>" placeholder="Enter repeat password" minlength="7" maxlength="35" required>
                                </div>
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