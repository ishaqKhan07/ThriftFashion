
<?php 
$title = 'Seller Reviews';
include 'header.php'
?>


<!-- seller dashboard-wrapper starts here -->
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="seller_sidebar">
                    <div class="seller_profile">
                        <div class="img_box">
                            <figure><img src="img/cat12.png" alt=""></figure>
                        </div>
                        <div class="seller_content">
                            <h4 class="name">John Doe</h4>
                            <span class="type">Seller</span>
                        </div>
                    </div>
                    <div class="personal_information">
                        <div class="headings_warpper">
                            <h3>Personal Information</h3>
                            <a href="#" class="edit_btn">Edit</a>
                        </div>
                        <div class="info_box">
                            <div class="detail lname">
                                <p class="property">Last Name:</p>
                                <span class="value">Doe</span>
                            </div>
                            <div class="detail age">
                                <p class="property">Age:</p>
                                <span class="value">13</span>
                            </div>
                            <div class="detail city">
                                <p class="property">City</p>
                                <span class="value">Houston</span>
                            </div>
                            <div class="detail country">
                                <p class="property">Country</p>
                                <span class="value">USA</span>
                            </div>
                            <div class="detail phone">
                                <p class="property">Phone</p>
                                <span class="value">12-345-67890</span>
                            </div>
                            <div class="detail email">
                                <p class="property">Email</p>
                                <span class="value">john@examplecom</span>
                            </div>
                            <div class="detail company_name">
                                <p class="property">Company / <br>  Business name</p>
                                <span class="value">Monkey market</span>
                            </div>
                            <div class="detail Btype">
                                <p class="property">Business Type</p>
                                <span class="value">Koizuma Massage</span>
                            </div>
                            <div class="detail designation">
                                <p class="property">Designation</p>
                                <span class="value">Sales Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 pl-5">
                <div class="row pb-4 for-background">
                    <div class="col-md-8">
                        <div class="all_totals">
                            <div class="total_sales totals">
                                <span class="heading">Total sales</span>
                                <h3 class="price">$50</h3>
                            </div>
                            <div class="total_orders totals">
                                <span class="heading">Total Orders</span>
                                <h3 class="price">950</h3>
                            </div>
                            <div class="total_sales totals">
                                <span class="heading">Total Balance</span>
                                <h3 class="price">$50</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="average_rating">
                            <div class="title">
                                <h4>Customer Average Rating</h4>
                            </div>
                            <div class="stars_ratings">
                                <ul class="stars">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </ul>
                                <div class="rating_count">
                                    <p>4 out of 5</p>
                                </div>
                            </div>
                            <p>Based on 5419 reviews</p>
                        </div>
                    </div>
                </div>
                <div class="bussiness_information">
                    <div class="headings_warpper">
                        <h4>Business information</h4>
                        <a href="#" class="edit-btn">Edit</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bussiness_info_box">
                                <div class="detail bname">
                                    <p class="property">Business name</p>
                                    <span class="value">Koizuma Massage</span>
                                </div>
                                <div class="detail TLnum">
                                    <p class="property">Trade LIcence Number</p>
                                    <span class="value">J1S234-987</span>
                                </div>
                                <div class="detail Bcnum">
                                    <p class="property">Business Contact Number</p>
                                    <span class="value">+971-324-4856879</span>
                                </div>
                                <div class="detail bemail">
                                    <p class="property">Email</p>
                                    <span class="value">info@johnyphones.com</span>
                                </div>
                                <div class="detail owner_name">
                                    <p class="property">Owner Name</p>
                                    <span class="value">John Anderson</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bussiness_info_box">
                                <div class="detail Bnum">
                                    <p class="property">Business Contact Number</p>
                                    <span class="value">+971-124-21345678</span>
                                </div>
                                <div class="detail btype">
                                    <p class="property">Business Type</p>
                                    <span class="value">Retailer</span>
                                </div>
                                <div class="detail Baddress">
                                    <p class="property">Head Office Address</p>
                                    <span class="value">Suit# 200A lorem Tower<br />
                                        ipsum road. DX12345</span>
                                </div>
                                <div class="detail pcategroy">
                                    <p class="property">Main Products Catagories</p>
                                    <span class="value">Koizuma Massage Gun </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bank_information">
                    <div class="heading_wrapper pb-4">
                        <h4>Bank Info</h4>
                        <p>Edit bank Info</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="BankName">Bank Name</label>
                                <input type="text" id="BankName" class="form-control" placeholder="Lorem ipsum">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="BranchName">Branch Name</label>
                                <input type="text" id="BranchName" class="form-control" placeholder="Lorem ipsum">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="HolderName">Holder Name</label>
                                <input type="text" id="HolderName" class="form-control" placeholder="Lorem ipsum">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="AccountNo">Account No</label>
                                <input type="text" id="AccountNo" class="form-control" placeholder="Lorem ipsum">
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <button class="update_btn btn">Update</button>
                        <button class="cancel_btn btn">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>