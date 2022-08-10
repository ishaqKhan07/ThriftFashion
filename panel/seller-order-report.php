
<?php 
$title = 'Seller Reviews';
include 'header.php'
?>

<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="seller-earning_report">
                    <div class="earning_reports">
                        <div class="heading_wrapper">
                            <h4>Order Report Overview</h4>
                            <p class="earning_date">(02 / 01 / 30 / 01)</p>
                        </div>
                        <div class="show_date_by_range">
                            <label>Show data by date range</label>
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn" type="button">Show</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="profile_status">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="statusDv shipped">
                                    <div class="property">
                                        <h4>Shipped</h4>
                                    </div>
                                    <div class="value">
                                        <p>0 %</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statusDv unshipped">
                                    <div class="property">
                                        <h4>Unshipped</h4>
                                    </div>
                                    <div class="value">
                                        <p>0 %</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statusDv returned">
                                    <div class="property">
                                        <h4>Returned</h4>
                                    </div>
                                    <div class="value">
                                        <p>0 %</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="statusDv processing">
                                    <div class="property">
                                        <h4>Processing</h4>
                                    </div>
                                    <div class="value">
                                        <p>0 %</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">

                                <div class="content-wrapper mb-5 mt-5">
                                    <h3>Total Order of 2022</h3>
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>