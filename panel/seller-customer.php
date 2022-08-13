
<?php 
$title = 'Seller Reviews';
include 'header.php';


$users = $data->select("select * from users where role_id = 2");
?>


<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="customer-wrapper">
                    <div class="content-wrapper">
                        <h4>Customers</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                    <th>Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($user = $users->fetch_assoc()){ ?>
                                <tr>
                                    <td><?= $user['id']; ?></td>
                                    <td><img +width="50" height="50" src="../images/<?= $user['image']; ?>"/></td>
                                    <td><?= $user['name']; ?></td>
                                    <td><?= $user['email']; ?></td>
                                    <td><?= $user['created_at']; ?></td>
                                    <td><?= $user['updated_at']; ?></td>
                                </tr>

                                <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>