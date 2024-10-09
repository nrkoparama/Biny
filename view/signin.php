<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="view/assets/css/signin.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Fira Sans:wght@300;400;500;600;700&display=swap" />
</head>

<body>

  <div class="ng-nhp">
    <div class="frame">
      <div class="frame-parent21">
        <div class="sign-in-parent">
          <b class="sign-in">Đăng nhập</b>
          <div class="facebook-parent">
            <svg class="facebook-icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-facebook" viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
            <svg class="facebook-icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-google" viewBox="0 0 16 16">
              <path
                d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
            </svg>
            <svg class="facebook-icon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-linkedin" viewBox="0 0 16 16">
              <path
                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
            </svg>
          </div>
          <div class="or-use-your">hoặc sử dụng tài khoản</div>
        </div>
        <div class="forgot-your-password-parent">
          <div class="forgot-your-password"><a href="">Quên mật khẩu?</a></div>
          <div class="forgot-your-password"><a href="?pg=user&act=signup">Đăng ký</a></div>
        </div>
        <form action="" method="post">
          <div class="frame-parent22">
            <input type="email" name="email" class="email-wrapper" placeholder="Email">
            <input type="pasword" name="password" class="password-wrapper" placeholder="Mật khẩu">
          </div>
          <button type="submit" name="btn_signin" class="sign-in-wrapper">Đăng nhập</button>
        </form>
      </div>
      <?php
      if (isset($data)) {
        echo "$noti";
      }
      ?>
    </div>
    <div class="arrow-left-parent">
      <svg class="arrow-left-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
      </svg>
      <div class="forgot-your-password"><a href="">Trở về trang chủ</a></div>
    </div>
  </div>


</body>

</html>
