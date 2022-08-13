
<?php 
$title = 'Seller Reviews';
include 'header.php';
$get_feedback = $data->select("SELECT * FROM `feedback` LIMIT 5");
if(isset($_POST['seemore'])){
$get_feedback = $data->select("SELECT * FROM `feedback`"); 
}
?>

<!-- css file -->
<!-- seller dashboard-wrapper starts here -->
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="cutomer-res">
                    <div class="content-wrapper">
                        <h3>Customer Reviews</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Feedback</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($data = $get_feedback->fetch_assoc()){ ?>
                                    <tr>
                                        <td><p><?php echo $data['id'] ?></p></td>
                                        <td><p><?php echo $data['product_name'] ?></p></td>
                                        <td><p><?php echo $data['username'] ?></p></td>
                                        <td><p><?php echo $data['feedback'] ?></p></td>
                                        <td><p><?php echo $data['created_at'] ?></p></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <form method="post" class="mt-5 text-center">
            <button name="seemore" class="btn btn-outline-primary" type="submit">See All</button>
        </form>
    </div>
</section>
<!-- seller dashboard-wrapper end here -->

<?php include 'footer.php'?>
</body>
</html>