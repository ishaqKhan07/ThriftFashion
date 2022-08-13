<?php
$title = 'Seller Reviews';
include 'header.php';

$contact_setting = $data->select('select * from contact_setting');
$links_setting = $data->select('select * from quick_links');

if(isset($_POST['contact'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "update contact_setting set support_mail = '$email', phone = $phone ,address = '$address' where id = 1";
    $result = $data->update($query);

    if($result){
        $_SESSION['flash_success'] = 'Data Updated Successfully!';
        $script =  <<< JS
                   location.reload();
                JS;
    }

}

if(isset($_POST['link'])){
    $fb = $_POST['facebook'];
    $twt = $_POST['twitter'];
    $lkd = $_POST['linkedin'];
    $insta = $_POST['instagram'];
    $pnt = $_POST['pinterest'];

    $query = "update quick_links set facebook = '$fb', twitter = '$twt' ,linkedin = '$lkd', instagram = '$insta', pinterest = '$pnt' where id = 1"; 
    $result = $data->update($query);

    if($result){
        ?>
                <script>
                    Swal.fire(
                    'Success!',
                    'Data Updated Successfully!',
                    'success'
                );
                </script>
        <?php
    }
}
?>

<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="bussiness_information">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="headings_warpper">
                                <h4>Contact Information</h4>
                            </div>
                            <form method='post' class="w-100">
                                <?php  while($contact = $contact_setting->fetch_assoc()){ ?>
                                <label>Support Email</label>
                                <input type="email" name="email" value="<?= $contact['support_mail'] ?>" class="form-control mb-2"/>

                                <label>Phone Number</label>
                                <input type="text" name="phone" value="<?= $contact['phone'] ?>" class="form-control mb-2"/>

                                <label>Address</label>
                                <input type="text" name="address" value="<?= $contact['address'] ?>" class="form-control mb-2"/>
            
                                <button type="submit" name="contact" class="btn theme-btn mt-2">Update</button>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="headings_warpper">
                                <h4>Quick Links</h4>
                            </div>
                            <form method='post' class="w-100">
                            <?php  while($links = $links_setting->fetch_assoc()){ ?>
                                <label>Facebook</label>
                                <input type="text" name="facebook" value="<?= $links['facebook'] ?>" class="form-control mb-2"/>

                                <label>Twitter</label>
                                <input type="text" name="twitter" value="<?= $links['twitter'] ?>" class="form-control mb-2"/>

                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" value="<?= $links['linkedin'] ?>" class="form-control mb-2"/>

                                <label>Instagram</label>
                                <input type="text" name="instagram" value="<?= $links['instagram'] ?>" class="form-control mb-2"/>

                                <label>Pinterest</label>
                                <input type="text" name="pinterest" value="<?= $links['pinterest'] ?>" class="form-control mb-2"/>
            
                                <button type="submit" name="link" class="btn theme-btn mt-2">Update</button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bussiness_information">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="headings_warpper">
                                <h4>Change Password</h4>
                            </div>
                            <form method='post' class="w-100">
                                <label>Enter Old Password</label>
                                <input type="password" name="old_password" value="" class="form-control mb-2"/>

                                <label>Enter New Password</label>
                                <input type="password" name="new_password" value="" class="form-control mb-2"/>

                                  <label>Confirm Password</label>
                                <input type="password" name="confirm_password" value="" class="form-control mb-2"/>
            
                                <button type="submit" class="btn theme-btn mt-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>
