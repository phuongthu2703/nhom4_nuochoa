<!DOCTYPE html>
<html lang="en">



<body>


                      
    <!-- Contact Start -->
    <div class="container-fluid py-5">
   
        <div class="row justify-content-center">
               
    <div class="contact-form bg-light rounded">
            <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
            <?php
      if (isset($_SESSION['name'])) {
        extract($_SESSION['name']);
         $image=$image_path.$image;
       
echo'
          
<div class="team-item">
<div class="team-img mx-auto">
                        <img src="'.$image.'" class="rounded-circle" style="object-fit: cover;">
                    </div>
                   
                    <h3 class="font-weight-bold text-primary mt-3 mb-4">'.$name.'</h3>
                    <div class="list-group">

         
          <a href="index.php?act=quenmk" class="list-group-item list-group-item-action list-group-item-warning">Quên mật khẩu</a>
          
         
            <a href="index.php?act=edit_taikhoan" class="list-group-item list-group-item-action list-group-item-warning">Cập nhật tài khoản</a>
          
          <?php if($role==1){ ?>
         
            <a href="../admin/index.php" class="list-group-item list-group-item-action list-group-item-warning">Đăng nhập Admin</a>
         
            <?php } ?>
          
            <a href="index.php?act=thoat" class="list-group-item list-group-item-action list-group-item-warning">Đăng xuất</a>
         
          </div>
                  
                </div> </div>  '   ;         
        ?>
        
                 
                <?php
      } else {
        ?>
         <?php
                       
                       if(isset($thongbao)&&($thongbao!= "")){
                           echo '<div class="alert alert-primary" role="alert">
                          '.$thongbao.'!
                         </div>';
                       }
                  ?>
      <div class="">
                <div class="">
                  <h4 class="font-weight-bolder">Đăng nhập</h4>
                  <p class="mb-0">Nhập tên và mật khẩu để đăng nhập</p>
                </div>
                <div class="card-body">
                  <form role="form" action="index.php?act=dangnhap" method="post">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control form-control-lg" placeholder="Tên" aria-label="Name">
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
                <div class="text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Bạn chưa có tài khoản
                    <a href="index.php?act=dangky" class="text-primary text-gradient font-weight-bold">Đăng ký</a>
                  </p>
                </div>
              </div>
            </div>
      <?php } ?>
            </div>
        </div>
        </div>
    </div>
    
       
   
    <!-- Contact End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    
</body>

</html>