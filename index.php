<?php
session_start();
// session_destroy();
if (!isset($_SESSION["giohang"])) {
   $_SESSION["giohang"] = [];
}
require_once "model/global.php";
require_once "model/pdo.php";
require_once "model/product.php";
require_once "model/detail.php";
require_once "controller/user.php";





if (isset($_GET['pg'])) {

   switch ($_GET['pg']) {
      case 'product':


         if (isset($_GET['kyw']) && ($_GET['kyw'] != "")) {
            $kyw = $_GET['kyw'];
         } else {
            $kyw = "";
         }


         if (!isset($_GET['trang']))
            $trang = 1;
         else {
            if ($_GET['trang'] > 0)
               $trang = $_GET['trang'];
         }

         // show danh mục
         $sort_cat = cat_select_all();

         // show full sản phẩm
         $dssp = product_select_all($trang, SOLUONGSP, $kyw);

         // show sản phẩm hot
         $dssp_hot = product_hot(0, 3);

         include_once 'view/product.php';
         break;

      case 'productdetails':
         if (isset($_GET["id"]) && $_GET["id"]) {

            // lấy chi tiết sản phẩm
            $productdetail = productdeltail($_GET["id"]);
         }
         include_once 'view/productdetails.php';
         break;

      case 'category':
         include_once 'view/category.php';
         break;

      case 'cart':
         if (isset($_GET['del']) && ($_GET['del'] >= 0)) {
            $del = $_GET['del'];
            array_splice($_SESSION["giohang"], $del, 1);
            header('location: index.php?pg=cart');
         }
         include_once 'view/cart.php';
         break;
      case 'addcart':
         if (isset($_POST['addcart'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $soluong = $_POST['soluong'];
            $img = $_POST['img'];
            $i = 0;
            $sptrung = 0;
            // check san pham trung
            foreach ($_SESSION["giohang"] as $item) {
               if ($item["id"] == $id) {
                  $_SESSION["giohang"][$i]["soluong"] += 1;
                  $sptrung = 1;
                  break;
               }
               $i++;
            }

            // $sp=[$name,$price,$soluong,$img];
            if ($sptrung == 0) {
               $sp = [
                  "name" => $name,
                  "price" => $price,
                  "soluong" => $soluong,
                  "img" => $img,
                  "id" => $id
               ];

               // $_SESSION["giohang"][]=$sp;
               array_push($_SESSION["giohang"], $sp);
            }

            header('location: index.php?pg=cart');
         }
         ;
         break;
      case 'deletecart':
         if (isset($_SESSION["giohang"])) {
            unset($_SESSION["giohang"]);
         }
         header('location: index.php?pg=product');
         break;
      case 'checkout':
         include_once 'view/checkout.php';
         break;
      case 'blog':
         include_once 'view/blog.php';
         break;
      case 'contact':
         include_once 'view/contact.php';
         break;
      case 'signin':
         include_once "view/signin.php";
      case 'user':
         include_once 'controller/user.php';
         break;
      case 'category-admin':
         include_once "controller/category-admin.php";
         break;
      case 'product-admin':
         include_once "controller/product-admin.php";
         break;

      default:

         // show sản phẩm mới(id desc)
         $dssp_new = product_new(0, 8);

         // sản phẩm hot (noibat)
         $dssp_hot = product_hot();
         include_once 'view/home.php';
         break;
   }

} else {

   // show sản phẩm mới(id desc)
   $dssp_new = product_new(0, 8);

   // sản phẩm hot (noibat)
   $dssp_hot = product_hot(0, 4);
   include_once 'view/home.php';
}
?>