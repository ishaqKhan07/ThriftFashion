
<?php 
$title = 'Seller Reviews';
include 'header.php'
?>


<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="products_adding">
                    <div class="heading_wrapper">
                        <h3>Add New Products</h3>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="general_info">General Info</label>
                                    <input type="text" class="form-control" id="general_info" placeholder="Product">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select_category">Select category</label>
                                    <select id="select_category" class="form-control">
                                        <option selected>Mobile Tablet & Accessories</option>
                                        <option>Mobile</option>
                                        <option>Tablet</option>
                                        <option>Accessories</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sub_category">Select Sub catagory</label>
                                    <select id="sub_category" class="form-control">
                                        <option selected>Massagge Gun</option>
                                        <option>Massagge Gun1</option>
                                        <option>Massagge Gun2</option>
                                        <option>Massagge Gun3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="BrandName">Brand Name</label>
                                <input type="text" id="BrandName" class="form-control" placeholder="Massage GUn">
                            </div>
                            <div class="col-md-6">
                                <label for="Unit">Unit</label>
                                <input type="text" id="Unit" class="form-control" placeholder="PC">
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group checkboxex">
                                    <label class="container">Color variation
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="attribute">Attribute</label>
                                    <select class="form-control" id="attribute">
                                        <option selected>Select</option>
                                        <option>Lorem1</option>
                                        <option>Lorem2</option>
                                        <option>Lorem3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <hr>
                            <div class="col-md-6">
                                <div class="files_flex">
                                    <div class="custom-file">
                                        <label>Add Pictures</label>
                                        <input type="text" placeholder="Upload pictures" class="form-control">
                                        <input type="file" class="custom-file-input" id="attachments" multiple
                                            onchange="javascript:updateList()">
                                    </div>
                                    <ul id="fileList" class="file-list"></ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="files_flex">
                                    <div class="custom-file">
                                        <label>Add Thumbnail</label>
                                        <input type="text" placeholder="Upload pictures" class="form-control">
                                        <input type="file" class="custom-file-input" id="attachments-two" multiple
                                            onchange="javascript:updateListtwo()">
                                    </div>
                                    <ul id="fileList-two" class="file-list"></ul>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="UnitPrice">Unit Price</label>
                                    <input type="number" placeholder="00" class="form-control" id="UnitPrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PurchasePrice">Purchase Price</label>
                                    <input type="number" placeholder="00" class="form-control" id="PurchasePrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tax">Tax <span class="colored">percent (%)</span></label>
                                    <input type="number" placeholder="00" class="form-control" id="tax">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="discount">Discount</label>
                                    <input type="number" placeholder="00" class="form-control" id="discount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" placeholder="00" class="form-control" id="quantity">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="flat">Flat</label>
                                    <input type="number" placeholder="00" class="form-control" id="flat">
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="product_boost">
                                    <div class="form-group checkboxex">
                                        <label class="container">Boost Product
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group radios_btn">
                                        <label class="container">Boost Product for 3 days for £1.99
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group radios_btn">
                                        <label class="container">Boost Product for 1 month for £9.99
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="text-editor">
                                    <label>Product Details</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="bottom_bar">
                                    <div class="checkbox">
                                        <input type="checkbox" class="form-control" id="forcheck">
                                        <label for="forcheck">I Confirm that the product and it specifications are
                                            correct and same as product</label>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn">Submit</button>
                                        <button class="btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>