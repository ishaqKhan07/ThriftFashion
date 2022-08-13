<?php
include 'custom.php';
$email_error = "";
$password_error = "";
if (!isset($_SESSION['username'])) {
    if (isset($_POST['submit'])) {
        $enteremail = $_POST['email'];
        $enterpassword = $_POST['password'];
        $validation = true;
        if (strlen($enteremail) == "" or !filter_var($enteremail, FILTER_VALIDATE_EMAIL)) {
            $email_error = " **Enter valid Email**";
            $validation = false;
        }
        if ($validation == true) {
            if (strlen($enterpassword) <= 6) {
                $password_error = "** Password must be greater then 6 latter **";
                $validation = false;
            }
        }
        if ($validation == true) {
            $selectquery = "SELECT * FROM `users` WHERE `email` = '$enteremail'";
            $selectdata = mysqli_query($con, $selectquery);
            $total_user = mysqli_num_rows($selectdata);
            if ($total_user == 1) {
                $fetceddata = mysqli_fetch_assoc($selectdata);
                if (password_verify($enterpassword, $fetceddata['password'])) {
                    $_SESSION['completedata'] = $fetceddata;
                    $_SESSION['username'] = $enteremail;
                    if($enteremail == "admin@admin.com"){
                        header('Location: panel/seller-home.php');
                    }
                    else{
                    header('Location: index.php');
                    }
                }
                else{
                    $password_error = "** You Enter Wrong Password **";
                }
            }
        }
    }
}
else{
    header('Location: index.php');
}
?>
<?php include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/user-auth.css">

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5    col-xl-5 col-lg-16 col-md-6 col-sm-8   ">
                    <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>welcome!</h2>
                            <p>Use your credentials to access</p>
                        </div>
                        <div class="user-form-group">
                            <form class="user-form" method="POST">
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $email_error;} ?></small>
                                    <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['submit'])){echo $enteremail;} ?>" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <small class="d-block text-end"><?php if(isset($_POST['submit'])){echo $password_error;} ?></small>
                                    <input type="password" class="form-control" name="password" value="<?php if(isset($_POST['submit'])){echo $enterpassword;} ?>" placeholder="Enter your password">
                                </div>
                                <div class="form-check mb-3"><input class="form-check-input" type="checkbox" value="" id="check"><label class="form-check-label" for="check">Remember Me</label></div>
                                <div class="form-button"><button type="submit" name="submit">login</button>
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