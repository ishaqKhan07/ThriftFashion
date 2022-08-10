
<?php 
$title = 'Seller Reviews';
include 'header.php'
?>


<section class="dashboard">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="customer-wrapper">
                    <div class="content-wrapper">
                        <h4>Leads</h4>
                        <button class="add-labels">Add</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Customer Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>example.@gmail.com</td>
                                    <td>+923456789</td>
                                    <td>
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
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>example.@gmail.com</td>
                                    <td>+923456789</td>
                                    <td>
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
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>example.@gmail.com</td>
                                    <td>+923456789</td>
                                    <td>
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
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>example.@gmail.com</td>
                                    <td>+923456789</td>
                                    <td>
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
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>example.@gmail.com</td>
                                    <td>+923456789</td>
                                    <td>
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
                    <div class="button-wrapper text-right">
                        <button class="text-right">See All</button>
                    </div>
                </div>
                <div class="edit-customer-form">
                    <div class="content-wrapper">
                        <h4>Add Lead</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-10">
                            <form action="#">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="FirstName">First Name</label>
                                        <input type="text" placeholder="Lorem ipsum" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="FirstName">Last Name</label>
                                        <input type="text" placeholder="Lorem ipsum" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="FirstName">Email</label>
                                        <input type="email" placeholder="Lorem ipsum" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="FirstName">Phone Number</label>
                                        <input type="number" placeholder="Lorem ipsum" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea name="" placeholder="Lorem ipsum" class="form-control" id="" cols="30"
                                        rows="6"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-send">Send</button>
                                    <button class="btn btn-cancel">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>