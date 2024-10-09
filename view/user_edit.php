<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="view/assets/css/user_add.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira Sans:wght@300;400&display=swap" />
    <style>
        a {
            text-decoration: none;
            color: inherit;
            font-family: inherit;
        }
    </style>
</head>

<body>
    <div class="frame-parent">
        <div class="frame-group">
            <div class="instance-parent">
                <div class="frame-wrapper">
                    <div class="frame-container">
                        <div class="bag-frame-parent">
                            <svg class="bag-frame-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                            <div class="sn-phm">Sản phẩm</div>
                        </div>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=product-admin&act=list">
                            <div class="sn-phm1">Quản lý sản phẩm</div>

                        </a>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=product-admin&act=add">
                            <div class="sn-phm1">Thêm sản phẩm</div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="instance-group">
                <div class="frame-wrapper">
                    <div class="frame-container">
                        <div class="bag-frame-parent">
                            <svg class="bag-frame-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                            </svg>
                            <div class="sn-phm">Danh mục</div>
                        </div>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=category-admin&act=list">
                            <div class="sn-phm1">Quản lý danh mục</div>

                        </a>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=category-admin&act=add">
                            <div class="sn-phm1">Thêm danh mục</div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="instance-container">
                <div class="frame-wrapper">
                    <div class="frame-container">
                        <div class="bag-frame-parent">
                            <svg class="person-check-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                            </svg>
                            <div class="sn-phm">Người dùng</div>
                        </div>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=user&act=add">
                            <div class="sn-phm1">Thêm người dùng</div>

                        </a>
                    </div>
                </div>
                <div class="frame-div">
                    <div class="sn-phm-wrapper">
                        <a href="?pg=user&act=list">
                            <div class="sn-phm1">Quản lý người dùng</div>

                        </a>
                    </div>
                </div>
            </div>
            <img class="image-9-icon" alt="" src="img/hinhanh.png" />
        </div>
        <div class="frame-wrapper9">
            <div class="frame-parent3">
                <div class="trang-ch-parent">
                    <div class="sn-phm">Trang chủ</div>
                    <img class="chevron-right-icon" alt="" src="./public/chevronright.svg" />

                    <div class="qun-l-sn">Chỉnh sửa tài khoản</div>
                </div>
                <div class="thm-ngi-dng-parent">
                    <div class="thm-ngi-dng" style="width:300px">Chỉnh sửa tài khoản</div>
                    <div class="instance-parent1">
                        <div class="frame-wrapper10">
                            <div class="to-sn-phm-mi-parent">
                                <div class="to-sn-phm">Thêm vai trò</div>
                                <img class="chevron-down-icon3" alt="" src="./public/chevrondown.svg" />
                            </div>
                        </div>
                        <div class="frame-wrapper10">
                            <div class="to-sn-phm-mi-parent">
                                <div class="to-sn-phm">Thêm tài khoản phụ</div>
                                <img class="chevron-down-icon3" alt="" src="./public/chevrondown.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="frame-wrapper12">
                <div class="frame-parent4">
                    <div class="frame-parent5">
                        <div class="frame-parent6">
                            <div class="tn-parent">
                                <div class="to-sn-phm">Tên</div>
                                <input type="text" name="userName" class="email-wrapper" value="<?= $us['userName'] ?>">
                            </div>
                            <div class="tn-parent">
                                <div class="to-sn-phm">Chức vụ</div>
                                <input type="text" name="role" class="email-wrapper" value="<?= $us['role'] ?>">
                            </div>
                        </div>
                        <div class="tn-parent">
                            <div class="to-sn-phm">Id user</div>
                            <div class="instance-wrapper">
                                <input type="text" name="" class="email-frame" value="<?= $us['userID'] ?>" readonly>
                            </div>
                        </div>
                        <div class="tn-parent">
                            <div class="to-sn-phm">Email</div>
                            <div class="instance-wrapper">
                                <input type="text" name="email" class="email-frame" value="<?= $us['email'] ?>">
                            </div>
                        </div>
                        <div class="tn-parent">
                            <div class="to-sn-phm">Password</div>
                            <div class="instance-wrapper">
                                <input type="text" name="password" class="email-frame" value="<?= $us['password'] ?>">
                            </div>
                        </div>
                        <div class="tn-parent">
                            <div class="to-sn-phm">Số điện thoại</div>
                            <div class="instance-wrapper">
                                <input type="text" name="phone" class="email-frame" value="<?= $us['phone'] ?>">
                            </div>
                        </div>
                        <div class="tn-parent">
                            <div class="to-sn-phm">Địa chỉ</div>
                            <div class="instance-wrapper">
                                <input type="text" name="address" class="email-frame" value="<?= $us['address'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="frame-parent7">
                        <img id="preview" class="frame-child" alt="Preview" src="img/<?= $us['img'] ?>" />

                        <div class="ti-nh-ln-wrapper">
                            <input type="file" name="img" id="file" class="ti-nh-ln" style="width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;" onchange="previewImage(event)">
                            <label for="file">Tải ảnh lên</label>
                        </div>
                    </div>

                    <script>
                        function previewImage(event) {
                            var reader = new FileReader();
                            reader.onload = function () {
                                var output = document.getElementById('preview');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        };
                    </script>

                </div>
            </div>
            <div class="ti-nh-ln-container">
                <input type="submit" name="update_user" value="Gửi">
            </div>
        </form>
    </div>
</body>

</html>