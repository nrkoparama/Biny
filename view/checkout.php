
<?php

        if(isset($_SESSION["giohang"])){
            $html_checkout_product='';
            $i=0;
            $orderTotal =0;
            foreach ($_SESSION["giohang"] as $item) {
                extract($item);               
                $subtotal= $price * $soluong;
                $orderTotal += $subtotal;
                $linkdelete="index.php?pg=cart&del=".$i; 
                  
                $html_checkout_product.='<div class="order-details__item">
                                            <div class="single-item">
                                                <div class="single-item__thumb">
                                                    <img src="'.PATH_IMG_PRODUCT.$img.'" alt="ordered item">
                                                </div>
                                                <div class="single-item__content">
                                                    <a href="#">'.$name.'</a>
                                                    <span class="price">'.$price.'</span>
                                                    <span>QTY: '.$soluong.'</span>
                                                </div>
                                                <div class="single-item__remove">
                                                    <a href="'.$linkdelete.'"><i class="zmdi zmdi-delete"></i></a>
                                                </div>
                                            </div>
                                        </div>';                   
            }

        }

?>








<?php include_once"header.php"; ?>
<?php require_once("vnpay/config.php"); ?>
<style>
  .payment_btn{
    height: 42px;
    width: 320px;
    margin-left:18px;
    margin-bottom:15px;
  }

</style>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <!-- <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="checkout-method">
                                                        <form action="#">
                                                            <div class="checkout-method__single">
                                                                <h5 class="checkout-method__title"><i class="zmdi zmdi-caret-right"></i>CHECKOUT AS A GUEST OR REGISTER</h5>
                                                                <p class="checkout-method__subtitle">Register with us for future convenience:</p>
                                                                <div class="single-input">
                                                                    <input type="radio" id="checkout-method-1" name="checkout-method" checked="checked">
                                                                    <label for="checkout-method-1">Checkout as guest</label>
                                                                </div>
                                                                <div class="single-input">
                                                                    <input type="radio" id="checkout-method-2" name="checkout-method">
                                                                    <label for="checkout-method-2">Register</label>
                                                                </div>
                                                            </div>
                                                            <div class="checkout-method__single">
                                                                <h5 class="checkout-method__title"><i class="zmdi zmdi-caret-right"></i>REGISTER AND SAVE TIME</h5>
                                                                <p class="checkout-method__subtitle">Register with us for future convenience:</p>
                                                                <div class="single-input">
                                                                    <input type="radio" id="register-method-1" name="register-method" checked="checked">
                                                                    <label for="register-method-1">Fast and easy check out</label>
                                                                </div>
                                                                <div class="single-input">
                                                                    <input type="radio" id="register-method-2" name="register-method">
                                                                    <label for="register-method-2">Easy access to your order history and status</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="checkout-method__login">
                                                        <form action="#">
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <h5 class="checkout-method__title">Already Registered?</h5>
                                                            <p class="checkout-method__subtitle">Please login below:</p>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" id="user-email">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" id="user-pass">
                                                            </div>
                                                            <p class="require">* Required fields</p>
                                                            <a href="#">Forgot Passwords?</a>
                                                            <div class="dark-btn">
                                                                <a href="#">LogIn</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="accordion__title">
                                        Thông tin thanh toán
                                    </div>
                                    <div class="accordion__body">
                                        <div class="bilinfo">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Họ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Tên">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Company name">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Địa chỉ">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Apartment/Block/House (optional)">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Thành phố / Tỉnh">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Mã bưu điện">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="email" placeholder="Địa chỉ email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" placeholder="Số điện thoại">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        Thông tin vận chuyển
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipinfo">
                                            <h3 class="shipinfo__title">Địa chỉ nhận hàng</h3>
                                            <p><b>Địa chỉ:</b> Cv phần mềm Quang Trung</p>
                                            <a href="#" class="ship-to-another-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Chuyển đến vị trí khác</a>
                                            <div class="ship-to-another-content">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" placeholder="Địa chỉ mới">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__title">
                                        phương pháp vận chuyển
                                    </div>
                                    <div class="accordion__body">
                                        <div class="shipmethod">
                                            <form action="#">
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-fast">
                                                        <label for="ship-fast">Ship nội thành</label>
                                                    </p>
                                                    <span><p>Phí giao hàng: 50,000Đ</p></span>
                                                </div>
                                                <div class="single-input">
                                                    <p>
                                                        <input type="radio" name="ship-method" id="ship-normal">
                                                        <label for="ship-normal">Ship ngoại thành</label>
                                                    </p>
                                                    <p>Phí giao hàng: 100,000Đ</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Đơn hàng của bạn</h5>

                            <?=$html_checkout_product;?>

                            <div class="order-details__count">
                                    <div class="order-details__count__single">
                                        <h5>sub total</h5>
                                        <span class="price"><?=$orderTotal?>Đ</span>
                                    </div>

                                    <div class="order-details__count__single">
                                        <h5>Shipping</h5>
                                        <span class="price"><?=SHIPPING?>Đ</span>
                                    </div>
                            </div>


                            <form action="vnpay/vnpay_create_payment.php" method="post">
                                            
                                            <div class="ordre-details__total">
                                                <h5>Order total</h5>
                                                <?php
                                                    $total = $orderTotal + SHIPPING;
                                                    // echo (var_dump($total));
                                                ?>

                                                <span class="price"><input  id="amount" name="amount" type="hidden" value=""><?=$total?>Đ</span> 
                                            </div>

                                                                                
                                            <input type="hidden" id="language" Checked="True" name="language" value="vn">

                                            <input type="hidden" id="bankCode" name="bankCode" value="">

                                
                                            <div class="single-method">
                                                <button class="payment_btn" type="submit">Thanh toán VNPAY</button>
                                            </div>
                            </form>

                                            <div class="single-method">
                                                <button class="payment_btn">Thanh toán COD</button>
                                            </div>
                            
                        </div>
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
        
<?php include_once"footer.php"; ?>