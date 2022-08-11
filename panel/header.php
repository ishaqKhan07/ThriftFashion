<?php 
    include 'connect.php';
    session_start();
    $data = new db();
?>

<!DOCTYPE html>
<html lang="en">



<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?='Thrift Fashion | ' . $title ?></title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Bootstrap CSS -->
<!-- Slick Slider CDN -->
<link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
<!-- Slick Slider CDN -->
<!-- Animte.css CDN -->
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!-- Animte.css CDN -->
<!-- FontAwesome CDN -->
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- FontAwesome CDN -->
<!--    Custom CSS-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/seller-home.css">
<link rel="stylesheet" href="css/seller-reviews.css">
<!--    Custom CSS-->
<link rel="stylesheet" href="css/seller-products.css">
<link rel="stylesheet" href="css/seller-payment.css">
<link rel="stylesheet" href="css/seller-account.css">
<link rel="stylesheet" href="css/seller-add-product.css">
<link rel="stylesheet" href="css/seller-customer.css">
<link rel="stylesheet" href="css/seller-earning-report.css">
<link rel="stylesheet" href="css/seller-home.css">
<link rel="stylesheet" href="css/seller-order-detail.css">
<link rel="stylesheet" href="css/seller-orders.css">
<link rel="stylesheet" href="css/seller-earning-report.css">
<link rel="stylesheet" href="css/seller-leads.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<header id="seller-header">
    <div class="mob">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <a href="index-2.php" class="header-name">Thrift Fashion</a>
                </div>
                <div class="col-6 text-right">
                    <div class="canvas-icon">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <div class="seller-header-wrapper">
                        <a href="index-2.php" class="header-name">Thrift Fashion</a>
                        
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 align-self-center ">
                    <div class="profile-wrapper">
                        
                        
                        <div class="user-img">
                            <div class="dropdown">
                                <button class="btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/profile.png" alt="">
                                    <span class="pro-name">
                                        <h6>Hello User <br> Happy Selling</h6>
                                    </span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Log Out</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seller-header-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <ul>
                            <li class="nav-item">
                                <a href="seller-home.php" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-customer.php" class="nav-link">Customer</a>
                            </li>
                            <li class="nav-item">
                                <a href="brands.php" class="nav-link">Brands</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-reviews.php" class="nav-link">Reviews & Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-products.php" class="nav-link">Products</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-orders.php" class="nav-link">My Orders</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="seller-order-report.php">Order Reports</a>
                                    <a class="dropdown-item" href="seller-earning-report.php">Earning Reports</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="seller-account.php" class="nav-link">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header">
        <div class="cancel">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <ul class="mobile-nav">
            <li>
                <form action="#" class="mr-2 ml-2">
                    <input type="search" class="form-control" placeholder="search">
                </form>
            </li>
            <li class="nav-item"><a href="#">Dashboard</a></li>
            <li class="nav-item"><a href="#">Customer</a></li>
            <li class="nav-item"><a href="#">Leads</a></li>
            <li class="nav-item"><a href="#">Reviews & Feedback</a></li>
            <li class="nav-item"><a href="#">Products</a></li>
            <li class="nav-item"><a href="#">My Orders</a></li>
            <li class="nav-item"><a href="#">Campaigns</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="seller-order-report.php">Order Reports</a>
                    <a class="dropdown-item" href="seller-earning-report.php">Earning Reports</a>
                </div>
            </li>
            <li class="nav-item"><a href="#">My Accounts</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="img/profile.png" alt="">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="seller-order-report.php">logout</a>
                </div>
            </li>
            <li class="nav-item"><a href="#"><img src="img/message.png" alt=""></a></li>
            <li class="nav-item"><a href="#"><img src="img/flag.png" alt=""></a></li>
        </ul>
    </div>

</header>