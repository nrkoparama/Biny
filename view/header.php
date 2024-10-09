<?php



if (isset($_SESSION["giohang"])) {
    $html_miniCart_product = '';
    $i = 0;

    $orderTotal = 0;

    foreach ($_SESSION["giohang"] as $item) {
        extract($item);
        $subtotal = $price * $soluong;
        $orderTotal += $subtotal;
        $linkdelete = "index.php?pg=cart&del=" . $i;
        $i++;
        $html_miniCart_product .= '<div class="shp__single__product">
                                <div class="shp__pro__thumb">
                                    <a href="#">
                                        <img src="' . PATH_IMG_PRODUCT . $img . '" alt="product images">
                                    </a>
                                </div>
                                <div class="shp__pro__details">
                                    <h2><a href="product-details.html">' . $name . '</a></h2>
                                    <span class="quantity">QTY: ' . $soluong . '</span>
                                    <span class="shp__price">' . $price . '</span>
                                </div>
                                <div class="remove__btn">
                                    <a href="' . $linkdelete . '" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>';
    }
}


// dem san pham trong gio hang 
$count_giohang = count($_SESSION['giohang']);


?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biny</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="view/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/assets/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="view/assets/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="view/assets/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="view/assets/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="view/assets/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="view/assets/css/custom.css">


    <!-- Modernizr JS -->
    <script src="view/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <style>
        .addToCart {
            width: 190px;
            height: 42px;
            margin-top: 10px;
            background-color: #fff;
            color: #333;
            border: 0, 25px;
        }

        .addToCart:hover {
            background-color: #333;
        }

        .addToCart a:hover {
            color: #fff;
        }
    </style>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                    <a href="index.php"><img src="view/assets/images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Trang chủ</a></li>
                                        <li class="drop"><a href="index.php?pg=product">Sản phẩm</a></li>


                                        <li class="drop"><a href="index.php?pg=blog">Bài viết</a></li>
                                        <li><a href="index.php?pg=contact">Liên hệ</a></li>
                                    </ul>
                                </nav>

                                <!-- mobile -->
                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="product-grid.html">product grid</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile -->
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <?php if (isset($_SESSION['users'])): ?>
                                            <a class="text-decoration-none text-white" href="?pg=user&act=info">
                                                <i class="icon-user icons"></i></a>
                                        <?php else: ?>
                                            <a class="text-decoration-none text-white" href="?pg=user&act=signin">
                                                <i class="icon-user icons"></i></a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua"><?= $count_giohang ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">

                                <form action="index.php" method="get">
                                    <input type="hidden" name="pg" value="product">
                                    <input name="kyw" placeholder="Tìm kiếm... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">

                        <?= $html_miniCart_product; ?>

                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price"><?= $orderTotal ?></li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="index.php?pg=cart">View Cart</a></li>
                        <li class="shp__checkout"><a href="index.php?pg=checkout">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->