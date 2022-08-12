<?php
include 'custom.php';
$old_password_error = $new_password_error = $confirm_password_error = "";
if (isset($_SESSION['username'])) {
    $complete = $_SESSION['completedata'];
    $email = $complete['email'];
    if (isset($_POST['submit'])) {
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        $validation = true;
        if ($validation == true) {
            if (strlen($oldpassword) <= 6) {
                $old_password_error = "** You Enter Wrong Password **";
                $validation = false;
                echo "step 1";
            }
        }
        if ($validation == true) {
            $selectquery = "SELECT * FROM `users` WHERE `email` = '$email'";
            $selectdata = mysqli_query($con, $selectquery);
            $total_user = mysqli_num_rows($selectdata);
            if ($total_user == 1) {
                $fetceddata = mysqli_fetch_assoc($selectdata);
                if (password_verify($oldpassword, $fetceddata['password'])) {
            
                    if ($validation == true) {
                        if (trim(strlen($newpassword)) <= 7) {
                            $new_password_error = " **password must be greater than 8**";
                            $validation = false;
                        }
                        if ($validation == true and $newpassword != $confirmpassword) {
                            $confirm_password_error = " **Password doesnot Match**";
                            $validation = false;
                            echo "step 3";
                        }
                        if ($validation == true) {
                            $hashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
                            $newpass = "UPDATE `users` SET `password`='$hashedpassword' WHERE `email`='$email'";
                            if (mysqli_query($con, $newpass)) {
                                echo "<script> alert('passwonwfnsdjknvk') </script>";
                                header('Location: index.php');
                            }
                        }
                    }
                }
                else{
                    $old_password_error = "** You Enter Wrong Password **";
                }
            }
        }
    }
}
include 'header.php';
?>

<link rel="stylesheet" href="css/user-auth.css">

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="user-form-logo"><a href="index.php"><img src="images/logo.png" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>any issue?</h2>
                            <p>Make sure your current password is strong</p>
                        </div>
                        <form class="user-form" method="post">
                            <div class="form-group">
                                <small class="text-end d-block"><?php if(isset($_POST['submit'])){echo $old_password_error;} ?></small>
                                <input type="password" class="form-control" value="<?php if(isset($_POST['submit'])){echo $oldpassword;} ?>" name="oldpassword" placeholder="Old password">
                            </div>
                            <div class="form-group">
                                <small class="text-end d-block"><?php if(isset($_POST['submit'])){echo $new_password_error;} ?></small>    
                                <input type="password" class="form-control" value="<?php if(isset($_POST['submit'])){echo $newpassword;} ?>" name="newpassword" placeholder="Current password">
                            </div>
                            <div class="form-group">
                                <small class="text-end d-block"><?php if(isset($_POST['submit'])){echo $confirm_password_error;} ?></small>    
                                <input type="password" class="form-control" value="<?php if(isset($_POST['submit'])){echo $confirmpassword;} ?>" value="" name="confirmpassword" placeholder="reapet password">
                            </div>
                            <div class="form-button"><button type="submit" name="submit">change password</button></div>
                        </form>
                    </div>
                    <div class="user-form-remind">
                        <p>Go Back To<a href="login.php">login here</a></p>
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