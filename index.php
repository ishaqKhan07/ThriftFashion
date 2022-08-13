<?php
$title = 'Home';
include 'custom.php';
include 'header.php';

<<<<<<< Updated upstream
// die($_SESSION);
$products = $data->select('select * from products');
=======
$product_categories = $data->select("select * from product_categories");
>>>>>>> Stashed changes
$data = $data->select("select * from feedback limit 5");
$categories = $data->select("select * from categories")

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
<<<<<<< Updated upstream
                            <?php 
                                while($cat = $categories->fetch_assoc){
                            ?>
                            <li class="banner-category-item"><a href="category?" > <img src="images/cloth-icon.png" /> &nbsp;&nbsp; <span>TShirts</span></a>
                            </li>
                            <?php } ?>
=======
                            <?php while($cat = $product_categories->fetch_assoc()){ ?>
                            <li class="banner-category-item"><a href="shop.php?category=<?= $cat['name'];  ?>" > <img src="images/cloth-icon.png" /> &nbsp;&nbsp; <span><?= $cat['name'] ?></span></a>
                            </li>
                            <?php } ?>    
>>>>>>> Stashed changes
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-grid-slider slider-dots">
                                <div class="banner-wrap bg1">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="banner-image"><img src="images/banner/banner_img1.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg2">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="banner-image"><img src="images/banner/banner_img2.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg3">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="banner-image"><img src="images/banner/banner_img3.png" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h2>our products</h2>
                    </div>
                </div>
            </div>
            
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <button class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image" href="product-video.php"><img src="images/product/01.jpg" alt="product"></a>
                            <div class="product-widget">
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="product-video.php">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.php">fresh green chilis</a></h6>
                            <h6 class="product-price"><span>$28<small>/piece</small></span></h6><button class="product-add" title="Add to Cart"><i class="fas fa-shopping-basket"></i><span>add</span></button>
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
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-arrow">
                        <?php while($row = $data->fetch_assoc()){ ?>
                            <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                                <p><?= $row['feedback'] ?></p>
                                <h5><?= $row['username'] ?></h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul><img src="images/avatar/01.jpg" alt="testimonial">
                            </div>
                        <?php } ?>
                    </div>             
                </div>
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

<?php
include 'footer-link.php';
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
