<?php
    include_once 'model/category.php';
    extract($_REQUEST);
    if (isset($act)){
        switch($act){
            case 'list':
                $dsdm = category_getAll();
                include_once 'view/category_list.php';
                break;
            case 'add':
                if (isset($_POST['add_category'])){
                    category_add($categoryID, $name);
                    header('location: ?pg=category-admin&act=list');
                }
                include_once 'view/category_add.php';
                break;
            case 'edit':
                $dm = category_getOne($categoryID);
                if (isset($_POST['update_category'])){
                    // xét có chọn hình upload không
                    category_edit($name,$categoryID);
                    header('location: ?pg=category-admin&act=list');
                }
                include_once 'view/category_edit.php';
                break;    
            case 'delete':
                if(isset($_POST['btnXoa'])){

                }
                category_delete($categoryID);
                header('location: ?pg=category-admin&act=list');
                break;
        }
    }
?>