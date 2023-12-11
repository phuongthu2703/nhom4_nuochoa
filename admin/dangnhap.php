<?php
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    if(isset($_POST["dangnhap"])){
      $name = $_POST["name"];
      $pass = $_POST["pass"];
      $user = checkuser($name,$pass);
      if(isset($user)&&(is_array($user)) && (count($user) > 0)){
        extract($user);
        if($role == 1){
          header('Location: index.php');
        }else{
          $thongbao = "Tai khoan nay khong co quyen dang nhap trang quan tri";
        }
    }else {
      $thongbao ="Tai khoan nay khong ton tai";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
       
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
              
                <div class="card-header pb-0 text-start">
                 <?php if(isset($thongbao)&&($thongbao)!=0){
                          echo "'.$thongbao.'";
                 }
                 ?>
                  <h4 class="font-weight-bolder">Đăng nhập</h4>
                  <p class="mb-0">Điền email và mật khẩu để đăng nhập admin</p>
                </div>
                <div class="card-body">
                  <form role="form" action="dangnhap.php" method="POST">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control form-control-lg" placeholder="Tên" aria-label="Tên">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="pass" class="form-control form-control-lg" placeholder="Mật khẩu" aria-label="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Ghi nhớ mật khẩu</label>
                    </div>
                    <div class="text-center">
                      <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://scr.vn/wp-content/uploads/2020/07/%E1%BA%A3nh-n%E1%BB%81n-nh%E1%BB%AFng-%C4%91%C3%A1m-m%C3%A2y-cute.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>