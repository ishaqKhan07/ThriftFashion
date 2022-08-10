<?php include 'header.php'?>
<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="shipmethods">
                            <div class="heading_wrappers">
                                <h4>Filters</h4>
                                <h5>Status</h5>
                            </div>
                            <div class="shipment_methods">
                                <ul class="shipmemntradios">
                                    <li>
                                        <label class="container">All
                                            <input type="radio" checked="checked" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Process
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Shipped
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container">Unshipped
                                            <input type="radio" name="shipradio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filters">
                            <div class="title">
                                <!-- <h6>Date Range</h6> -->

                            </div>
                            <div class="input-group ">
                                <div class="form-group">
                                <label for="Fromdate"></label>
                                    <input type="text" id="Fromdate" class="form-control" placeholder="From date">
                                </div>
                                <span class="spacer">-</span>
                                <div class="form-group">
                                    <label for="ToDate"></label>
                                    <input type="text" id="ToDate" class="form-control" placeholder="To Date">
                                </div>
                                <span class="spacer">-</span>
                                <div class="form-group">
                                    <label for="weekly"></label>
                                    <select id="weekly" class="form-control">
                                        <option selected>last 7 Days</option>
                                        <option>last 14 Days</option>
                                        <option>last 21 Days</option>
                                        <option>last 28 Days</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sellers_orders">
                    <div class="heading_wrapper mb-3">
                        <h4>Products</h4>

                    </div>
                    <div class="add-upload-wrapper mb-5">
                        <button class="add-products" onclick="location.href='seller-add-product.php'">Add</button>
                        <button class="upload-products"> <img src="img/upload-products.svg" alt=""> Upload</button>
                    </div>
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr class="topbar">
                                    <th scope="col" class="Status">Status</th>
                                    <th scope="col" class="billingname">Product Name</th>
                                    <th scope="col" class="amount">SKU number</th>
                                    <th scope="col" class="Image">Image</th>
                                    <th scope="col" class="shipmentstatus">Date</th>
                                    <th scope="col" class="Price">Price</th>
                                    <th scope="col" class="Stock">Stock Available</th>
                                    <th scope="col" class="Featured">Featured</th>
                                    <th scope="col" class="Details">Details</th>
                                    <th scope="col" class="Action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn" type="button" data-toggle="modal"
                                            data-target="#exampleModalCenter">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="orderid">Active</td>
                                    <td class="billingname">Koizuma Massage Gun </td>
                                    <td class="amount">CA12345</td>
                                    <td class="items">
                                        <img src="img/products-table-img.png" class="pro-table-img" alt="">
                                    </td>
                                    <td class="shipmentstatus">Mon 11 July</td>
                                    <td class="details">$300 </td>
                                    <td class="Available">10 </td>
                                    <td class="Boost"> <button class="btn boost-btn">Boost</button> </td>
                                    <td class="Detailsu"><button class="btn details-btn">View Details</button> </td>
                                    <td class="Detailsu">
                                        <div class="button-wrap">
                                            <button class="edit">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="paginations_results">
                        <div class="showing_results">
                            <p>Showing <b>7</b> of over 50 <b>results</b></p>
                        </div>
                        <ul class="paginations">
                            <li class="arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                            <li class="pagi">1</li>
                            <li class="pagi">2</li>
                            <li class="pagi">3</li>
                            <li class="pagi">..</li>
                            <li class="pagi">90</li>
                            <li class="arrow right-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- seller dashboard-wrapper end here -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <h4 class="">Boost Product</h4>
                <form action="https://demos-clients-websites.com/monkey-market/seller-payment.php">
                    <div class="form-check mb-3 mt-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Boost Product for 3 days for £1.99
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Boost Product for 1 month for £9.99
                        </label>
                    </div>
                    <div class="form-group d-flex">
                        <button class="btn pay-now " onclick="location.href='seller-payment.html';">Pay Now</button>
                        <button class="btn cancel">Cancel</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php include 'footer.php'?>