<?php include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/compare.css">
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
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
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
                                <div class="view-action-group"><a class="view-wish wish" href="#" title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a><a class="view-compare" href="compare.php" title="Compare This Item"><i class="fas fa-random"></i><span>Compare This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>compare list</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.php">shop grid</a></li>
                <li class="breadcrumb-item active" aria-current="page">compare</li>
            </ol>
        </div>
    </section>
    <section class="inner-section compare-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">vendor</th>
                                    <th scope="col">status</th>
                                    <th scope="col">shopping</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-serial">
                                        <h6>01</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop"><button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    </td>
                                    <td class="table-action"><a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a><a class="wish" href="#" title="Add to Wishlist"><i class="icofont-heart"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>02</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$78<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-in">stock in</h6>
                                    </td>
                                    <td class="table-shop"><button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    </td>
                                    <td class="table-action"><a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a><a class="wish" href="#" title="Add to Wishlist"><i class="icofont-heart"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>03</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$68<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop"><button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    </td>
                                    <td class="table-action"><a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a><a class="wish" href="#" title="Add to Wishlist"><i class="icofont-heart"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>04</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$24<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-in">stock in</h6>
                                    </td>
                                    <td class="table-shop"><button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    </td>
                                    <td class="table-action"><a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a><a class="wish" href="#" title="Add to Wishlist"><i class="icofont-heart"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>05</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$34<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop"><button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                    </td>
                                    <td class="table-action"><a class="view" href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#product-view"><i class="fas fa-eye"></i></a><a class="wish" href="#" title="Add to Wishlist"><i class="icofont-heart"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5"><button class="btn btn-outline">Load more items </button></div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i class="icofont-ui-email"></i>Subscribe</span></button></form>
                </div>
            </div>
        </div>
    </section>
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer-link.php';
include 'footer.php';
?>