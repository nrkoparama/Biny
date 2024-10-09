<?php

if(isset($_SESSION["giohang"])){
    $html_cart_product='';
    $i=0;
    foreach ($_SESSION["giohang"] as $item) {
        extract($item);
        $subtotal = $price * $soluong;
        $linkdelete="index.php?pg=cart&del=".$i;
        $i++;
       $html_cart_product.='<tr>
                                <td class="product-thumbnail"><a href="#"><img src="'.PATH_IMG_PRODUCT.$img.'" alt="product img" /></a></td>
                                <td class="product-name"><a href="#">'.$name.'</a>
                                </td>
                                <td class="product-price"><span class="amount">'.$price.'</span></td>
                                <td class="product-quantity"><input type="number" min="1" max="10" value="'.$soluong.'"/></td>
                                <td class="product-subtotal">'.$subtotal.'</td>
                                <td class="product-remove"><a href="'.$linkdelete.'"><i class="icon-trash icons"></i></a></td>
                            </tr>';
    }
}


?>



<?php include_once"header.php"; ?>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?=$html_cart_product;?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="?pg=product">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="index.php?pg=deletecart">clear shopping cartt</a>
                                            <a href="index.php?pg=checkout">checkout</a>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
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
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="view/assets/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        
<?php include_once"footer.php"; ?>