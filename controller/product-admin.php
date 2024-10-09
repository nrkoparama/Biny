<?php
include_once 'model/category.php';
include_once 'model/brand.php';
include_once 'model/product.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'list':
            $dssp = product_getAll();
            include_once 'view/product_list.php';
            break;
        case 'add':
            $dssm = category_getAll();
            $dsbrand = brand_getAll();
            if (isset($_POST['add_product'])) {
                $name = $_POST['name'];
                $categoryID = $_POST['categoryID']; // Đảm bảo bạn đã lấy giá trị categoryID từ form
                $stock = $_POST['stock'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $brandID = $_POST['brandID']; // Đảm bảo bạn đã lấy giá trị brandID từ form
                product_add($name, $categoryID, $_FILES['img']['name'], $stock, $price, $description, $brandID);
                move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
                header('location: ?pg=product-admin&act=list');
            }

            include_once 'view/product_add.php';
            break;
        case 'edit':
            $sp = product_getOne($productID);
            if (isset($_POST['edit_product'])) {
                // xét có chọn hình upload không
                if ($_FILES['img']['name'] == null) {
                    product_edit($productID, $categoryID, $brandID, $name, $price, $stock, $description, $sp['img']);
                } else {
                    product_edit($productID, $categoryID, $brandID, $name, $price, $stock, $description, $_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
                }
                header('location: ?pg=product-admin&act=list');
            }
            include_once 'view/product_edit.php';
            break;
        case 'delete':
            if (isset($_SESSION['delete_product'])) {
            }
            product_delete($productID);
            header('location: ?pg=product-admin&act=list');
            break;
    }
}
?>