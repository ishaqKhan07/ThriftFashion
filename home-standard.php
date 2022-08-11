<?php
$title = 'Home';
include 'header-link.php';
include 'header.php';

$feedback = $data->select('select * from feedback limit 5');

?>
<link rel="stylesheet" href="css/home-standard.css">
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
    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="banner-category">
                        <div class="banner-category-head"><i class="fas fa-bars"></i><span>top categories</span></div>
                        <ul class="banner-category-list">
                            <li class="banner-category-item"><a href="#" > <img src="images/cloths-icon.png" /> &nbsp;&nbsp; <span>TShirts</span></a>
                            </li>
                            <li class="banner-category-item"><a href="#" > <img src="images/cloths-icon.png" /> &nbsp;&nbsp; <span>Jeans</span></a>
                            </li>
                            <li class="banner-category-item"><a href="#" > <img src="images/cloths-icon.png" /> &nbsp;&nbsp; <span>Jackets</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-grid-slider slider-dots">
                                <div class="banner-wrap bg1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a href="#" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="images/home/index/01.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>get your organic healthy foods item online today.</h2><a href="#" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="images/home/index/02.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a href="#" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="images/home/index/03.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img src="images/promo/home/04.jpg" alt="promo"></a></div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img src="images/promo/home/05.jpg" alt="promo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section intro-part">
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
    <section class="section deals-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>best deals on items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown deals-clock" data-countdown="2022/12/22"><span class="countdown-time"><span>00</span><small>days</small></span><span class="countdown-time"><span>00</span><small>hours</small></span><span class="countdown-time"><span>00</span><small>minutes</small></span><span class="countdown-time"><span>00</span><small>seconds</small></span></div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-10%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/01.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-5%</label><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/02.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/kilo</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-20%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/03.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/dozen</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-35%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/04.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/4 piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-15%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/05.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/kilo</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-18%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/06.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/12 piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-30%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/07.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-25%</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/08.jpg" alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/6 piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.php" class="btn btn-inline"><i class="fas fa-eye"></i><span>view all deals</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our featured items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/09.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/10.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/11.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/12.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/13.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><button class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image" href="product-video.php"><img src="images/product/14.jpg" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.php">fresh organic green chilis</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3 Reviews)</a></div>
                            <h6 class="feature-price"><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.php" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all feature</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-content" style="background: url(images/promo/home/09.jpg) no-repeat center;">
                        <h3>only <span>$45</span>per kilogram</h3>
                        <h2>fresh Blueberries</h2><a href="shop-4column.php" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>collected new items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/15.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/16.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/17.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/18.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/19.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/20.jpg" alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.php" class="fas fa-random"></a><a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                                    <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button><input class="action-input" title="Quantity Number" type="text" name="quantity" value="1"><button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25"><a href="shop-4column.php" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all new item</span></a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section category-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>shop by categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-slider slider-arrow">
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/dairy.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>dairy items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/vegetables.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>vegetable items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/drinks.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>coffe & drinks</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/fish.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>fish items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/groceries.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>grocery items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                        <div class="category-wrap">
                            <div class="category-media"><img src="images/category/meat.jpg" alt="category">
                                <div class="category-overlay"><a href="shop-4column.php"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="category-meta">
                                <h4>meat items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50"><a href="all-category.php" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all category</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>shop by brands</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/01.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>natural greeny</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/02.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>vegan lover</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/03.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>organic foody</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/04.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>ecomart limited</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/05.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>fresh fortune</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="images/brand/06.jpg" alt="brand">
                        <div class="brand-overlay"><a href="brand-single.php"><i class="fas fa-link"></i></a></div>
                    </div>
                    <div class="brand-meta">
                        <h4>econature</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50"><a href="brand-list.php" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all brands</span></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>client's feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while ($row = $data->fetch_assoc()) {?>
                <div class="col-lg-12">
                
                    <div class="testimonial-slider slider-arrow">
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>
                            <?php echo $feedback['username']; ?>
                            </p>
                            <h5><?php echo $feedback['feedback']; ?></h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="images/avatar/01.jpg" alt="testimonial">
                        </div>
                    </div>
                    
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <section class="section blog-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Read our articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/01.jpg" alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn" href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/02.jpg" alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn" href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/03.jpg" alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn" href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-media"><a class="blog-img" href="#"><img src="images/blog/04.jpg" alt="blog"></a></div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-user"></i><span>admin</span></li>
                                    <li><i class="fas fa-calendar-alt"></i><span>february 02, 2021</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a></h4>
                                <p class="blog-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ... </p><a class="blog-btn" href="#"><span>read more</span><i class="icofont-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="blog-grid.php" class="btn btn-outline"><i class="fas fa-eye"></i><span>view all blog</span></a></div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    
    <?php include 'footer-link.php';
=======
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
<?php
include 'footer-link.php';
>>>>>>> 27690e51a4ce0768bf5733aacbc1472e1c83c836
include 'footer.php';
?>
<script>
        $(document).ready(function(){
        $('#productSearch').select2({
            ajax:{
                url: 'getSelectData.php',
                type: 'POST',
                dataType: 'json',
                delay: 250,
                data: function(params){
                    return{
                        productName : params.term,
                    };
                },
                processResults: function(response){
                    return{
                        results: response
                    };
                },
                cache: true
            }

        });
    });

        $("#productFilter").on('keyup', function (e) {
        if (e.key === 'Enter') {
        var productId = $("#productSearch").val();
        window.location.replace("viewProduct.php?productId="+productId);
    }
    });

        $("#productFilter").submit(function (){
        event.preventDefault();
        var productId = $("#productSearch").val();
        window.location.replace("viewProduct.php?productId="+productId);
    });
</script>
