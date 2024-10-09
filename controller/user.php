<?php
include_once 'model/user.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'signin':
            if (isset($btn_signin)) {
                print_r($email, $password);
                $data = check_signin($email, $password);
                print_r($data);
                if ($data) {
                    $_SESSION['users'] = $data;
                    header('Location: ?pg=home');
                } else
                    $noti = "Sign in failed";
            }
            include_once 'view/header.php';
            include_once 'view/signin.php';
            include_once 'view/footer.php';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('Location: ?pg=user&act=signin');
            break;
        case 'signup':
            if (isset($btn_register)) {
                user_signup($userName, $email, $password);
                $noti = "Successfully signed up";
            }
            include_once 'view/header.php';
            include_once 'view/signup.php';
            include_once 'view/footer.php';
            break;
        case 'info':
            include_once 'view/header.php';
            include_once 'view/info.php';
            include_once 'view/footer.php';
            break;
        case 'list':
            $dsus = user_getAll();
            include_once 'view/user_list.php';
            break;
        case 'add':
            if (isset($_POST['add_user'])) {
                $userName = $_POST['userName'];
                $role = $_POST['role'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $userID = $_POST['userID'];
                user_add($userName, $role, $email, $password, $phone, $address, $_FILES['img']['name'], $userID);
                move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
                header('location: ?pg=user&act=list');
            }

            include_once 'view/user_add.php';
            break;
        case 'edit':
            $us = user_getOne($userID);
            if (isset($_POST['update_user'])) {
                if ($_FILES['imag']['name'] == null) {
                    update_user($userID, $userName, $role, $email, $password, $phone, $address, $us['img']);
                } else {
                    update_user($userID, $userName, $role, $email, $password, $phone, $address, $_FILES['img']['name']);
                    move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
                }
                header('location: ?pg=user&act=list');
            }
            include_once 'view/user_edit.php';
            break;
        case 'delete':
            if (isset($_POST['delete_user'])) {
            }
            user_delete($userID);

            header('location: ?pg=user&act=list');
            break;
    }
}
?>