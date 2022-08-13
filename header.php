<?php include 'header-link.php';
include 'connect.php';

$data = new db();

$contactSettings = $data->select('select * from contact_setting');
$contact = $data->select('select * from contact_setting');
$links = $data->select('select * from quick_links');
if(isset($_SESSION['username'])){
    $completedata = $_SESSION['completedata'];
}


?>
<div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to Ecomart in Your Dream Online Store!</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="header-top-select">
                    <div class="header-select"><i class="icofont-world"></i><select class="select">
                            <option value="english" selected>english</option>
                            <option value="bangali">bangali</option>
                            <option value="arabic">arabic</option>
                        </select></div>
                    <div class="header-select"><i class="icofont-money"></i><select class="select">
                            <option value="english" selected>doller</option>
                            <option value="bangali">pound</option>
                            <option value="arabic">taka</option>
                        </select></div>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                <ul class="header-top-list">
                    <li><a href="faq.php">need help</a></li>
                    <li><a href="contact.php">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <img src="images/user.png" alt="user">
                </button>
                <a href="home-standard.php">
                    <img src="images/logo.png" alt="logo">
                </a><button class="header-src">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <a href="home-standard.php" class="header-logo">
                <img src="images/logo.png" alt="logo"></a>
            
            <form class="header-form">
                <input type="text" placeholder="Search anything...">
                <button>
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="header-widget-group">
                <a href="wishlist.php" class="header-widget" title="Wishlist">
                    <i class="fas fa-heart"></i>
                    <sup>0</sup>
                </a>
                <button class="header-widget header-cart" title="Cartlist">
                    <i class="fas fa-shopping-basket"></i>
                    <sup>9+</sup>
                </button>
                <?php
                     if(isset($_SESSION['username'])){            
                ?>
                        <a href="profile.php" class="header-widget" title="My Account">
                        <img src="<?php echo $completedata['image']  ?>" alt="user">
                        <span><?= $completedata['name']  ?></span>
                <?php }else{ ?> 
                        <a href="login.php" class="header-widget" title="My Account">
                        <img src="images/user.png" alt="user">
                        <span>Login</span> 
                <?php } ?>                 
            </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item"><a class="navbar-link" href="index.php">home</a>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="shop.php">shop</a>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="brand-list.php">Brand List</a>
                        </li>

                        <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">pages</a>
                            <ul class="dropdown-position-list">
                                <li><a href="about.php">about us</a></li>
                                <li><a href="contact.php">contact us</a></li>
                                <li><a href="faq.php">faqs</a></li>
                                <li><a href="privacy.php">privacy policy</a></li>
                                <li><a href="profile.php">my profile</a></li>

                            </ul>
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">authentic</a>
                            <ul class="dropdown-position-list">
                                <li><a href="login.php">login</a></li>
                                <li><a href="register.php">register</a></li>
                                <li><a href="reset-password.php">reset password</a></li>
                                <li><a href="change-password.php">change password</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="blogs.php">blogs</a>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <?php
                            while ($con = mysqli_fetch_assoc($contactSettings)){
                        ?>
                        <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                            <p><?= $con['phone'] ?></p>
                        </div>
                        <div class="navbar-info"><i class="icofont-ui-email"></i>
                            <p><small>email us</small><span><?= $con['support_mail'] ?></span></p>
                        </div>

                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<aside class="category-sidebar">
    <div class="category-header">
        <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button class="category-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="category-list">
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-vegetable"></i><span>vegetables</span></a>
            <ul class="dropdown-list">
                <li><a href="#">asparagus</a></li>
                <li><a href="#">broccoli</a></li>
                <li><a href="#">carrot</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-groceries"></i><span>groceries</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Grains & Bread</a></li>
                <li><a href="#">Dairy & Eggs</a></li>
                <li><a href="#">Oil & Fat</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-fruit"></i><span>fruits</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Orange</a></li>
                <li><a href="#">Strawberry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-dairy-products"></i><span>dairy farm</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Egg</a></li>
                <li><a href="#">milk</a></li>
                <li><a href="#">butter</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-crab"></i><span>sea foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Lobster</a></li>
                <li><a href="#">Octopus</a></li>
                <li><a href="#">Shrimp</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-salad"></i><span>diet foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Salmon</a></li>
                <li><a href="#">Potatoes</a></li>
                <li><a href="#">Greens</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-dried-fruit"></i><span>dry foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">noodles</a></li>
                <li><a href="#">Powdered milk</a></li>
                <li><a href="#">nut & yeast</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-fast-food"></i><span>fast foods</span></a>
            <ul class="dropdown-list">
                <li><a href="#">mango</a></li>
                <li><a href="#">plumsor</a></li>
                <li><a href="#">raisins</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-cheers"></i><span>drinks</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Wine</a></li>
                <li><a href="#">Juice</a></li>
                <li><a href="#">Water</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-beverage"></i><span>coffee</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Cappuchino</a></li>
                <li><a href="#">Espresso</a></li>
                <li><a href="#">Latte</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-barbecue"></i><span>meats</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Meatball</a></li>
                <li><a href="#">Sausage</a></li>
                <li><a href="#">Poultry</a></li>
            </ul>
        </li>
        <li class="category-item"><a class="category-link dropdown-link" href="#"><i class="flaticon-fish"></i><span>fishes</span></a>
            <ul class="dropdown-list">
                <li><a href="#">Agujjim</a></li>
                <li><a href="#">saltfish</a></li>
                <li><a href="#">pazza</a></li>
            </ul>
        </li>
    </ul>
    <div class="category-footer">
        <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
    </div>
</aside>
<aside class="cart-sidebar">
    <div class="cart-header">
        <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div><button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list">
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="images/product/01.jpg" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.php">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="images/product/02.jpg" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.php">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="images/product/03.jpg" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.php">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="images/product/04.jpg" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.php">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
        <li class="cart-item">
            <div class="cart-media"><a href="#"><img src="images/product/05.jpg" alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
            <div class="cart-info-group">
                <div class="cart-info">
                    <h6><a href="product-single.php">existing product name</a></h6>
                    <p>Unit Price - $8.75</p>
                </div>
                <div class="cart-action-group">
                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    <h6>$56.98</h6>
                </div>
            </div>
        </li>
    </ul>
    <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
        <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button type="submit"><span>apply</span></button></form><a class="cart-checkout-btn" href="checkout.php"><span class="checkout-label">Proceed to Checkout</span><span class="checkout-price">$369.78</span></a>
    </div>
</aside>
<aside class="nav-sidebar">
    <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i class="icofont-close"></i></button></div>
    <div class="nav-content">
        <div class="nav-btn"><a href="login.php" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                    here</span></a></div>
        <div class="nav-select-group">
            <div class="nav-select"><i class="icofont-world"></i><select class="select">
                    <option value="english" selected>English</option>
                    <option value="bangali">Bangali</option>
                    <option value="arabic">Arabic</option>
                </select></div>
            <div class="nav-select"><i class="icofont-money"></i><select class="select">
                    <option value="english" selected>Doller</option>
                    <option value="bangali">Pound</option>
                    <option value="arabic">Taka</option>
                </select></div>
        </div>
        <ul class="nav-list">
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                <ul class="dropdown-list">
                    <li><a href="home-grid.php">Home grid</a></li>
                    <li><a href="index.php">Home index</a></li>
                    <li><a href="home-classic.php">Home classic</a></li>
                    <li><a href="home-standard.php">Home standard</a></li>
                    <li><a href="home-category.php">Home category</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                <ul class="dropdown-list">
                    <li><a href="shop-5column.php">shop 5 column</a></li>
                    <li><a href="shop-4column.php">shop 4 column</a></li>
                    <li><a href="shop-3column.php">shop 3 column</a></li>
                    <li><a href="shop-2column.php">shop 2 column</a></li>
                    <li><a href="shop-1column.php">shop 1 column</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                <ul class="dropdown-list">
                    <li><a href="product-tab.php">product tab</a></li>
                    <li><a href="product-grid.php">product grid</a></li>
                    <li><a href="product-video.php">product video</a></li>
                    <li><a href="product-simple.php">product simple</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                <ul class="dropdown-list">
                    <li><a href="profile.php">profile</a></li>
                    <li><a href="wallet.php">wallet</a></li>
                    <li><a href="wishlist.php">wishlist</a></li>
                    <li><a href="compare.php">compare</a></li>
                    <li><a href="checkout.php">checkout</a></li>
                    <li><a href="orderlist.php">order history</a></li>
                    <li><a href="invoice.php">order invoice</a></li>
                    <li><a href="email-template.php">email template</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                <ul class="dropdown-list">
                    <li><a href="login.php">login</a></li>
                    <li><a href="register.php">register</a></li>
                    <li><a href="reset-password.php">reset password</a></li>
                    <li><a href="change-password.php">change password</a></li>
                </ul>
            </li>
            <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                <ul class="dropdown-list">
                    <li><a href="blog-grid.php">blog grid</a></li>
                    <li><a href="blog-standard.php">blog standard</a></li>
                    <li><a href="blog-details.php">blog details</a></li>
                    <li><a href="blog-author.php">blog author</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="offer.php"><i class="icofont-sale-discount"></i>offers</a></li>
            <li><a class="nav-link" href="about.php"><i class="icofont-info-circle"></i>about us</a></li>
            <li><a class="nav-link" href="faq.php"><i class="icofont-support-faq"></i>need help</a></li>
            <li><a class="nav-link" href="contact.php"><i class="icofont-contacts"></i>contact us</a></li>
            <li><a class="nav-link" href="privacy.php"><i class="icofont-warning"></i>privacy policy</a></li>
            <li><a class="nav-link" href="coming-soon.php"><i class="icofont-options"></i>coming soon</a></li>
            <li><a class="nav-link" href="error.php"><i class="icofont-ui-block"></i>404 error</a></li>
            <li><a class="nav-link" href="login.php"><i class="icofont-logout"></i>logout</a></li>
        </ul>
        <div class="nav-info-group">
            <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
            </div>
            <div class="nav-info"><i class="icofont-ui-email"></i>
                <p><small>email us</small><span>support@example.com</span></p>
            </div>
        </div>
        <div class="nav-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </div>
</aside>
<div class="mobile-menu"><a href="index.php" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.php" title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.php" title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
<div class="modal fade" id="product-view">
    <div class="modal-dialog">
        <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="product-view">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="view-gallery">
                            <div class="view-label-group"><label class="view-label new">new</label><label class="view-label off">-10%</label></div>
                            <ul class="preview-slider slider-arrow">
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                            </ul>
                            <ul class="thumb-slider">
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                                <li><img src="images/product/01.jpg" alt="product"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="view-details">
                            <h3 class="view-name"><a href="product-video.php">existing product name</a></h3>
                            <div class="view-meta">
                                <p>SKU:<span>1234567</span></p>
                                <p>BRAND:<a href="#">radhuni</a></p>
                            </div>
                            <div class="view-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 reviews)</a></div>
                            <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                            <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                reprehenderit fuga</p>
                            <div class="view-list-group"><label class="view-list-title">tags:</label>
                                <ul class="view-tag-list">
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">vegetable</a></li>
                                    <li><a href="#">chilis</a></li>
                                </ul>
                            </div>
                            <div class="view-list-group"><label class="view-list-title">Share:</label>
                                <ul class="view-share-list">
                                    <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                    <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                    <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                    <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                </ul>
                            </div>
                            <div class="view-add-group"><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                            </div>
                            <div class="view-action-group"><a class="view-wish wish" href="#" title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                        wish</span></a><a class="view-compare" href="compare.php" title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                        This</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>