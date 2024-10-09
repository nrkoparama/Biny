<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/user.css">
    <script type="text/javascript" src="files/js/jquery_min.js"></script>
    <script type="text/javascript" src="files/js/sanpham.js"></script>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: #f3f3f3;
            
        }

        .header {
            padding: 30px;
        }

        .header a {
            text-decoration: none;
            color: black;
        }

        .body .profile_img {
            background-color: #fff;
            width: 30%;
            height: 500px;
            margin: 0px 30px;
            text-align: center;
            display: inline-block;
            vertical-align: top;
        }

        .profile {
            display: inline;
        }

        .profile_img img {
            padding: 18px 0px;
            width: 200px;
            height: 200px;
            border-radius: 60px;
        }

        .profile_img div {
            display: block;
        }

        .profile_info {
            display: inline-block;
            margin-right: 30px;
            width: 63%;
            height: 600px;
            background-color: #fff;
            vertical-align: top;
        }

        .button {
            padding: 20px;
        }

        .button input {
            width: 150px;
            height: 40px;
            background-color: #665fca;
            border: none;
            color: #fff;
            border-radius: 4px;
        }

        ul {
            list-style-type: none;
        }

        .ul_1 li {
            padding: 20px
        }

        .ul_1,
        .ul_input {
            padding: 20px;
            display: inline-block;
        }

        .ul_input {
            padding: 0px;
        }

        .ul_input li {
            padding: 17px;
        }

        .ul_input input {
            width: 400px;
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="container">

        <!--CONTENT-->
        <div class="body">
            <!--DANH SACH-->
            <div class="profile">
                <div class="profile_img">
                    <div>
                        <img src="img/1.png" alt="">

                    </div>
                    <div>
                        <span>
                            <?= $_SESSION['users']['userName'] ?>
                        </span>
                    </div>
                    <div class="button">
                        <a href="?pg=user&act=logout" class="btn btn-danger">Đăng xuất</a>
                        <!-- <input type="button" name="btn_logout" value="Đăng Xuất"> -->
                    </div>
                    <?php if ($_SESSION['users']['role'] == 1): ?>
                        <a href="?pg=category-admin&act=list" class="btn btn-primary">Quản trị</a>
                    <?php endif; ?>
                </div>
                <div class="profile_info">
                    <div class="info">
                        <ul class="ul_1">
                            <li>Họ tên</li>
                            <li>Email</li>
                            <li>Password</li>
                            <li>Phone</li>
                            <li>Address</li>
                            <li>Ngày tạo</li>
                        </ul>
                        <ul class="ul_input">
                            <li><input type="text" disabled placeholder="<?= $_SESSION['users']['userName'] ?>"></li>
                            <li><input type="text" disabled placeholder="<?= $_SESSION['users']['email'] ?>"></li>
                            <li><input type="text" disabled></li>
                            <li><input type="text" disabled placeholder="<?= $_SESSION['users']['phone'] ?>"></li>
                            <li><input type="text" disabled placeholder="<?= $_SESSION['users']['address'] ?>"></li>
                            <li><input type="text" disabled placeholder="<?= $_SESSION['users']['dateAdd'] ?>"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--END CONTENT-->

    </div>

</body>

</html>