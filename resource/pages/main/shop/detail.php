<?php $product = findProduct($param) ?>

<main>
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="index.html">Home</a>
                        <span class="separator">/</span>
                        <a href="shop.html">Shop</a>
                        <span class="separator">/</span>
                        <a href="#">Clothings</a>
                        <span class="separator">/</span> <?php echo $product['name'] ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Page title -->
    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title"><?php echo $product['name'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- Single product area -->
    <div class="single-product-area">
        <div class="container">
            <div class="single-product-wrapper">
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-7">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-40">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active" id="pro-details1">
                                        <div class="product-popup">
                                            <a href="images/product/single/product4.jpg">
                                                <img src="images/product/single/product4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pro-details2">
                                        <div class="product-popup">
                                            <a href="images/product/single/product5.jpg">
                                                <img src="images/product/single/product5.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pro-details3">
                                        <div class="product-popup">
                                            <a href="images/product/single/product6.jpg">
                                                <img src="images/product/single/product6.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pro-details4">
                                        <div class="product-popup">
                                            <a href="images/product/single/product7.jpg">
                                                <img src="images/product/single/product7.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pro-details5">
                                        <div class="product-popup">
                                            <a href="images/product/single/product8.jpg">
                                                <img src="images/product/single/product8.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-small nav product-dec-slider owl-carousel">
                                    <a class="active" href="#pro-details1">
                                        <img src="images/product/thumbnails/product4.jpg" alt="">
                                    </a>
                                    <a href="#pro-details2">
                                        <img src="images/product/thumbnails/product5.jpg" alt="">
                                    </a>
                                    <a href="#pro-details3">
                                        <img src="images/product/thumbnails/product6.jpg" alt="">
                                    </a>
                                    <a href="#pro-details4">
                                        <img src="images/product/thumbnails/product7.jpg" alt="">
                                    </a>
                                    <a href="#pro-details5">
                                        <img src="images/product/thumbnails/product8.jpg" alt="">
                                    </a>
                                    <a class="active" href="#pro-details1">
                                        <img src="images/product/thumbnails/product4.jpg" alt="">
                                    </a>
                                    <a href="#pro-details2">
                                        <img src="images/product/thumbnails/product5.jpg" alt="">
                                    </a>
                                    <a href="#pro-details3">
                                        <img src="images/product/thumbnails/product6.jpg" alt="">
                                    </a>
                                    <a href="#pro-details4">
                                        <img src="images/product/thumbnails/product7.jpg" alt="">
                                    </a>
                                    <a href="#pro-details5">
                                        <img src="images/product/thumbnails/product8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5">
                        <div class="single-product-info">
                            <h1><?php echo $product['name'] ?></h1>
                            <div class="product-rattings">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-half-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <span class="price">
                                <del><?php echo currency($product['price']) ?></del> <?php echo currency($product['sale_price']) ?>
                            </span>
                            <p><?php echo $product['detail'] ?></p>
                            <div class="box-quantity d-flex">
                                <form action="#">
                                    <input class="quantity mr-40" min="1" value="1" type="number">
                                </form>
                                <a class="add-cart" href="cart.html">add to cart</a>
                            </div>
                            <div class="wishlist-compear-area">
                                <a href="wishlist.html"><i class="ion-ios-heart-outline"></i> Add to Wishlist</a>
                                <a href="#"><i class="ion-ios-loop-strong"></i> Compare</a>
                            </div>
                            <div class="product_meta">
                                <span class="posted_in">Categories: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Clothings</a></span>
                            </div>
                            <div class="single-product-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single product area end -->
    <!-- product description -->
    <div class="product-description-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#description">Description</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Reviews 1</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in show active">
                            <h2>Description</h2>
                            <?php echo $product['parameter'] ?>
                        </div>
                        <div id="reviews" class="tab-pane fade product-review-area">
                            <h3>1 REVIEW FOR <?php echo $product['name'] ?></h3>
                            <ol class="commentlist">
                                <li>
                                    <div class="single-comment">
                                        <div class="comment-avatar">
                                            <img src="images/blog/road-avatar.jpg" alt="comment image bege">
                                        </div>
                                        <div class="comment-info">
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <span class="date"><strong>admin</strong> October 6, 2014 at 1:38 am</span>
                                            <p>Good product</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <div class="comment-respond">
                                <p>Add a review</p>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <p>Your rating</p>
                                <div class="product-rattings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star-half-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <form action="#">
                                    <div class="text-filds">
                                        <label for="comment">Your review <span class="required">*</span></label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                                    </div>
                                    <div class="comment-input">
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label> 
                                            <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label> 
                                            <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">Website</label> 
                                            <input id="url" name="url" type="text" value="" size="30" maxlength="200">
                                        </p>
                                    </div>
                                    <div class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- product description end -->
    <!-- Single related product -->
    <div class="single-related-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3>Related products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related-product">
                    <div class="single-product-area">
                        <div class="product-wrapper gridview">
                            <div class="list-col4">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="images/product/9.jpg" alt="">
                                    </a>
                                    <div class="quickviewbtn">
                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col8">
                                <div class="product-info">
                                    <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                    <span class="price">
                                        <del>$ 85.00</del> $ 75.00
                                    </span>
                                </div>
                                <div class="product-hidden">
                                    <div class="add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                    <div class="star-actions">
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <ul class="actions">
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <div class="single-product-area">
                        <div class="product-wrapper gridview">
                            <div class="list-col4">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="images/product/5.jpg" alt="">
                                    </a>
                                    <div class="quickviewbtn">
                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col8">
                                <div class="product-info">
                                    <h2><a href="single-product.html">Donec eu libero</a></h2>
                                    <span class="price">
                                        <del>$ 77.00</del> $ 66.00
                                    </span>
                                </div>
                                <div class="product-hidden">
                                    <div class="add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                    <div class="star-actions">
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <ul class="actions">
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <div class="single-product-area">
                        <div class="product-wrapper gridview">
                            <div class="list-col4">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="images/product/6.jpg" alt="">
                                    </a>
                                    <div class="quickviewbtn">
                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col8">
                                <div class="product-info">
                                    <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                    <span class="price">
                                        $ 45.00
                                    </span>
                                </div>
                                <div class="product-hidden">
                                    <div class="add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                    <div class="star-actions">
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <ul class="actions">
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <div class="single-product-area">
                        <div class="product-wrapper gridview">
                            <div class="list-col4">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="images/product/7.jpg" alt="">
                                    </a>
                                    <div class="quickviewbtn">
                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col8">
                                <div class="product-info">
                                    <h2><a href="single-product.html">Cras neque metus</a></h2>
                                    <span class="price">
                                            $ 70.00
                                    </span>
                                </div>
                                <div class="product-hidden">
                                    <div class="add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                    <div class="star-actions">
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <ul class="actions">
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product">
                    <div class="single-product-area">
                        <div class="product-wrapper gridview">
                            <div class="list-col4">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="images/product/1.jpg" alt="">
                                    </a>
                                    <div class="quickviewbtn">
                                        <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="list-col8">
                                <div class="product-info">
                                    <h2><a href="single-product.html">Aliquam lobortis est</a></h2>
                                    <span class="price">
                                        $ 80.00
                                    </span>
                                </div>
                                <div class="product-hidden">
                                    <div class="add-to-cart">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                    <div class="star-actions">
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <ul class="actions">
                                            <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</main>