<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$title = 'Profile';
include 'custom.php';
// die($);
// print_r($_SESSION);
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
$email = $_SESSION['username'];
if (isset($_POST['update_profile'])) {
    $name = $_POST['user_name'];
    $contact = $_POST['contact'];
    $img_name = $_FILES['img']['name'];
    $src = $_FILES['img']['tmp_name'];
    $properimg = "images/users/$img_name";
    move_uploaded_file($src, $properimg);
    $update_query = "UPDATE `users` SET `name`='$name',`contact_no`='$contact',`image`='$properimg' WHERE `email` = '$email' ";
    if (mysqli_query($con, $update_query)) {
        $usernewdata = mysqli_query($con, "SELECT * FROM `users` WHERE `email`= '$email'");
        $completedata = mysqli_fetch_assoc($usernewdata);
        $_SESSION['completedata'] = $completedata;
    }
}
if(isset($_POST['update_address'])){
    $address = $_POST['address'];
    $update_query = "UPDATE `users` SET `address`='$address' WHERE `email` = '$email' ";
    if(mysqli_query($con, $update_query)){
        $usernewdata = mysqli_query($con, "SELECT * FROM `users` WHERE `email`= '$email'");
        $completedata = mysqli_fetch_assoc($usernewdata);
        $_SESSION['completedata'] = $completedata;
        sleep(1);
        echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
    }
}
if(isset($_POST['contact_update'])){
    $contact_no = $_POST['contact_no'];
    $update_query = "UPDATE `users` SET `contact_no`='$contact_no' WHERE `email` = '$email' ";
    if(mysqli_query($con, $update_query)){
        $usernewdata = mysqli_query($con, "SELECT * FROM `users` WHERE `email`= '$email'");
        $completedata = mysqli_fetch_assoc($usernewdata);
        $_SESSION['completedata'] = $completedata;
        sleep(1);
        echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
    }
}
include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/profile.css">

<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>my profile</h2>
    </div>
</section>
<section class="inner-section profile-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>Your Profile</h4><button data-bs-toggle="modal" data-bs-target="#profile-edit">edit
                            profile</button>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="profile-image"><a href="#"><img src="<?php echo $completedata['image']; ?>" alt="user"></a></div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group"><label class="form-label">name</label><input class="form-control" readonly type="text" value="<?php echo $completedata['name']; ?>"></div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" value="<?php echo $completedata['email']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="profile-btn"><a href="change-password.php">change pass.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>contact number</h4>
                    </div>
                    <div class="account-content">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card contact active">
                                    <h6>Contact No</h6>
                                    <p><?php echo $completedata['contact_no'] ?></p>
                                    <ul>
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 alert fade show">
                                <div class="profile-card address active">
                                    <h6>Address</h6>
                                    <p><?php echo $completedata['address'] ?></p>
                                    <ul class="user-action">
                                        <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                        <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form" method="post" enctype="multipart/form-data">
                <div class="form-title">
                    <h3>edit profile info</h3>
                </div>
                <div class="form-group"><label class="form-label">profile image</label><input class="form-control" id="profile_img" name="img"  type="file" accept="image/*"></div>
                <div class="form-group"><label class="form-label">name</label><input class="form-control" type="text" name="user_name"  required minlength="4" maxlength="25" value="<?php echo $completedata['name'] ?>"></div>
                <!-- <div class="form-group"><label class="form-label">email</label><input class="form-control" type="" name="email" value="mironcoder@gmail.com"></div> -->
                <div class="form-group"><label class="form-label">Contact No</label><input class="form-control" type="number" name="contact"  required minlength="9" maxlength="23" value="<?php echo $completedata['contact_no'] ?>"></div>
                <button class="form-btn" name="update_profile" type="submit">save profile info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="contact-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form" method="POST">
                <div class="form-title">
                    <h3>Edit Contact Number</h3>
                </div>
                <div class="form-group"><label class="form-label">number</label><input class="form-control" type="number" name="contact_no"   value="<?php echo $completedata['contact_no'] ?>" required minlength=""></div><button class="form-btn" name="contact_update" type="submit">save contact info</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="address-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form" method="POST">
                <div class="form-title">
                    <h3>edit address info</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" required minlength="10" placeholder="" name="address"><?php echo $completedata['address'] ?></textarea>
                </div>
                <button class="form-btn" name="update_address" type="submit">save address info</button>
            </form>
        </div>

    </div>
</div>
</div>


<?php include 'footer-link.php';
include 'footer.php';
?>

<script>
    // Get a reference to our file input
    const fileInput = document.querySelector('input[type="file"]');

    // Create a new File object
    const myFile = new File(['Hello World!'], '<?php echo $completedata['image'] ?>');

    // Now let's create a DataTransfer to get a FileList
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(myFile);
    fileInput.files = dataTransfer.files;
</script>