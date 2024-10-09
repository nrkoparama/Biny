<?php
    $html_dssp_new = '';
    foreach ($dssp_new as $item) {
        extract($item);
        $link = 'index.php?pg=productdetails&id='.$productID;
        $html_dssp_new.= '<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
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
                                     <h4><a href="?pg=productdetails&id='.$productID.'">'.$name.'</a></h4>
                                     <ul class="fr__pro__prize">
                                         <li>'.$price.'</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>';
    }


    $html_sp_hot = '';
    foreach ($dssp_hot as $item) {
        extract($item);
        $link = 'index.php?pg=productdetails&id='.$productID;
        $html_sp_hot.= '<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
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
                                     <h4><a href="?pg=productdetails&id='.$productID.'">'.$name.'</a></h4>
                                     <ul class="fr__pro__prize">
                                         <li>'.$price.'</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>';
    }


?>


<?php include_once"header.php"; ?>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2024</h2>
                                        <h1>DAILY OUFITS</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="view/assets/images/trueimg/banner1.webp" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>summer collection 2024</h2>
                                        <h1>NICE CUSTOME</h1>
                                        <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="view/assets/images/trueimg/banner2.webp" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">

                            
                            <?=$html_dssp_new;?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
        <!-- Start Prize Good Area -->
        <section class="htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="fr__prize__inner">
                            <h2>Fashion-forward and fearless</h2>
                            <h3></h3>
                            <a class="fr__btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="view/assets/images/trueimg/banner3.webp" alt="banner images">
                            </div>
                            <div class="banner__info">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prize Good Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">


                        <?=$html_sp_hot;?>


                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->

        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="view/assets/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="view/assets/images/brand/2.png" alt="brand images"></a></li>
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
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Our Blog</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ht__blog__wrap clearfix">
                        <!-- Start Single Blog -->
                        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="view/assets/images/trueimg/banner1.webp" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span>March 22, 2023</span>
                                    </div>
                                    <h2><a href="blog-details.html">Bộ sưu tập mùa đông</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="blog__btn">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="view/assets/images/trueimg/banner1.webp" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span>May 22, 2024</span>
                                    </div>
                                    <h2><a href="blog-details.html">Bộ sưu tập mùa xuân 2024</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="blog__btn">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="view/assets/images/trueimg/banner1.webp" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span>March 22, 2024</span>
                                    </div>
                                    <h2><a href="blog-details.html">Bộ sưu tập mùa hè</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="blog__btn">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Banner Area -->
        <?php include_once "footer.php"; ?>
        