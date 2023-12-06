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
  <link href="../admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<?php 

extract($onetk);

    
    

?>   
<?php
      
           $image=$image_path.$image;
          
          
         

echo '


 
<div class="container-fluid py-4">
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <p class="mb-0">Cập nhật tài khoản</p>
          
        </div>
      </div>
      <div class="card-body">
     
        <p class="text-uppercase text-sm">Thông tin người dùng</p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Username</label>
              <input class="form-control" type="text" value="'.$name.'">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Email address</label>
              <input class="form-control" type="email" value="'.$email.'">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">First name</label>
              <input class="form-control" type="text" value="'.mb_substr($name, 6, 8, 'UTF-8').'">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Last name</label>
              <input class="form-control" type="text" value="Nguyễn">
            </div>
          </div>
        </div>
        <hr class="horizontal dark">
        <p class="text-uppercase text-sm">Thông tin liên hệ</p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Địa chỉ</label>
              <input class="form-control" type="text" value="'.$address.'">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Thành phố</label>
              <input class="form-control" type="text" value="Cần Thơ">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Quốc gia</label>
              <input class="form-control" type="text" value="Việt Nam">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">ID</label>
              <input class="form-control" type="text" value="'.$customer_ID.'">
              <td class="align-middle text-center text-sm">'.($role == 1 ? '<span class="badge badge-sm bg-gradient-primary">Admin</span>' : '<span class="badge badge-sm bg-gradient-success">Khách hàng</span>').'</td>
            </div>
          </div>
        </div>
        <hr class="horizontal dark">
    
       
       <a href="index.php?act=edit_taikhoan">
        <button class="btn btn-primary btn-sm ms-auto">Chỉnh sửa</button>
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-profile">
      
      <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
          <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            <a href="javascript:;">
              <img src="'.$image.'" class="rounded-circle img-fluid border border-2 border-white" style="height: 140px">
            </a>
            <span class="text-uppercase text-center">'.$name.'</span>
          </div>
        </div>
      </div>
      <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
        <div class="d-flex justify-content-between">
          <a href="index.php" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Trang chủ</a>
          
          <a href="index.php?act=mybill" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Đơn hàng</a>
         
        </div>
      </div>
     
       
        </div>
      </div>
    </div>
  </div>
</div>

</div>
  
  
  ';
?>

