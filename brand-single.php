<?php include 'header-link.php';
include 'header.php';
?>
<link rel="stylesheet" href="css/brand-single.css">
<section class="single-banner" style="background: url(images/banner/banner2.jpg) no-repeat center;">
    <div class="container">
        <h2>Brand Single</h2>
    </div>
</section>
<div class="brand-single"><a href="#"><img src="images/brand/02.jpg" alt="brand"></a><a href="#">
        <h3>vegan lovers</h3>
    </a>
    <ul>
        <li class="fas fa-star active"></li>
        <li class="fas fa-star active"></li>
        <li class="fas fa-star active"></li>
        <li class="fas fa-star active"></li>
        <li class="fas fa-star"></li>
        <li class="total">(163 ratings)</li>
    </ul>
    <p>(45 items)</p>
</div>
<section class="inner-section shop-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-filter">
                    <div class="filter-show"><label class="filter-label">Show :</label><select class="form-select filter-select">
                            <option value="1">12</option>
                            <option value="2">24</option>
                            <option value="3">36</option>
                        </select></div>
                    <div class="filter-short"><label class="filter-label">Short by :</label><select class="form-select filter-select">
                            <option selected>default</option>
                            <option value="3">trending</option>
                            <option value="1">featured</option>
                            <option value="2">recommend</option>
                        </select></div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/01.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                        <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bottom-paginate">
                    <p class="page-info">Showing 12 of 60 Results</p>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">...</li>
                        <li class="page-item"><a class="page-link" href="#">60</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                </div>
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