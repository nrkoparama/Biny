<?php
    $html_sort_cat='';
    foreach ($sort_cat as $item) {
        extract($item);
        $html_sort_cat.='<li><a href="?pg=product&act=category=".$categoryID >'.$name.'</a></li>';
    }

    $html_dssp = '';
    foreach ($dssp as $item) {
        extract($item);
        $link = 'index.php?pg=productdetails&id='.$productID;
        $html_dssp.= '<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                         <div class="category">
                             <div class="ht__cat__thumb">
                                 <a href="'.$link.'">
                                     <img src="view/assets/images/trueimg/'.$img.'" alt="'.$name.'">
                                 </a>
                             </div>
                             <div class="fr__hover__info">
                                 <ul class="product__action">
                                     <li><a href="#"><i class="icon-heart icons"></i></a></li>

                                     <li><a href="'.$link.'"><i class="icon-handbag icons"></i></a></li>

                                 </ul>
                             </div>
                             <div class="fr__product__inner">
                                 <h4><a href="product-details.html">'.$name.'</a></h4>
                                 <ul class="fr__pro__prize">
                                     <li>'.$price.'Đ</li>
                                 </ul>
                             </div>
                         </div>
                     </div>';
    }

    $html_sp_hot = '';
    foreach ($dssp_hot as $item) {
        extract($item);
        $link = 'index.php?pg=productdetails&id='.$productID;
        $html_sp_hot.= '<div class="htc__best__product">
                            <div class="htc__best__pro__thumb">
                                <a href="'.$link.'">
                                    <img src="view/assets/images/trueimg/'.$img.'" alt="'.$name.'">
                                </a>
                            </div>
                            <div class="htc__best__product__details">
                                <h2><a href="product-details.html">'.$name.'</a></h2>

                                <ul  class="pro__prize">
                                    <li>'.$price.'</li>
                                </ul>
                            </div>
                        </div>';
    }

?>




<?php include_once"header.php"; ?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by newness</option>
                                    </select>

                                </div>

                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view"
                                        class="single-grid-view tab-pane fade in active clearfix">


                                        <?=$html_dssp; ?>


                                    </div>
                                    <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                        <div class="col-xs-12">
                                            <div class="ht__list__wrap">
                                                <!-- Start List Product -->
                                                <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product-2/pro-1/1.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum
                                                            dolor sit amet, consec adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqul Ut enim
                                                            ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product-2/pro-1/2.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum
                                                            dolor sit amet, consec adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqul Ut enim
                                                            ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product-2/pro-1/3.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum
                                                            dolor sit amet, consec adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqul Ut enim
                                                            ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Product -->
                                                <!-- Start List Product -->
                                                <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                        <a href="product-details.html"><img
                                                                src="images/product-2/pro-1/4.jpg"
                                                                alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="product-details.html">Product Title Here </a></h2>
                                                        <ul class="pro__prize">
                                                            <li class="old__prize">$82.5</li>
                                                            <li>$75.2</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum
                                                            dolor sit amet, consec adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqul Ut enim
                                                            ad minim veniam, quis nostrud exercitation ullamco laboris
                                                            nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End List Product -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product View -->
                        </div>
                        <!-- Start Pagenation -->
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="htc__pagenation">
                                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>

                                        <?php echo phantrang($trang,$kyw); ?>

                                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Pagenation -->
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">
                            <!-- Start Category Area -->
                            <div class="htc__category">
                                <h4 class="title__line--4">categories</h4>
                                <ul class="ht__cat__list">
                                    <?=$html_sort_cat?>
                                </ul>
                            </div>
                            <!-- End Category Area -->

                            <!-- Start Pro Size -->
                            <div class="ht__pro__size">
                                <h4 class="title__line--4">Size</h4>
                                <ul class="ht__size__list">
                                    <li><a href="#">xs</a></li>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">xl</a></li>
                                </ul>
                            </div>
                            <!-- End Pro Size -->


                            <!-- Start Best Sell Area -->
                            <div class="htc__recent__product">
                                <h2 class="title__line--4">best seller</h2>
                                <div class="htc__recent__product__inner">


                                    <?=$html_sp_hot; ?>


                                </div>
                            </div>
                            <!-- End Best Sell Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="view/assets/images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        <?php include_once"footer.php"; ?>