<!DOCTYPE html>
<html lang="en">



<body>


                      
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Đăng ký</h1>
                </div>
                
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                    <?php
                       
                       if(isset($thongbao)&&($thongbao!= "")){
                           echo '<div class="alert alert-primary" role="alert">
                          '.$thongbao.'!
                         </div>';
                       }
                  ?>
                 
                        <form action="index.php?act=dangky" method="post">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Tên" required="required" " />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="password" class="form-control p-4" name="pass" placeholder="Mật khẩu" required="required" data-validation-required-message="Mật khẩu không được để trống" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control p-4" name="email" placeholder="Email" required="required" data-validation-required-message="Email không được để trống" />
                                <p class="help-block text-danger"></p>
                            </div>
                          
                            <div>
                            <div class="text-center">
                                <input class="btn btn-primary" type="submit" name="dangky" value="Đăng ký">
                                <button class="btn btn-primary" type="reset">Nhập lại</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>
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
        <form action="index.php?act=dangnhap" method="post">
          <div class="form-group row">
            <label>Tên đăng nhập</label>
            <input class="form-control" type="text" name="name" required>
          </div>

          <div class="form-group row">
            <label>Mật khẩu</label>

            <input class="form-control" type="password" name="pass" required>
          </div>
          <div class="form-check">


            <input class="form-check-input" type="checkbox" value="" id="" name="">
            <label class="form-check-label">
              Ghi nhớ tài khoản?
            </label>
          </div>
          <div class="form-group row">
            <input class="form-control" type="submit" value="Đăng nhập" name="dangnhap">
          </div>
        </form>
        <li>
          <a href="#">Quên mật khẩu</a>
        </li>
        <li>
          <a href="index.php?act=dangky">Đăng ký thành viên</a>
        </li>
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