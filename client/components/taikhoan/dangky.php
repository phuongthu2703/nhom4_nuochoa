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
       
    </div>
    
       
   
    <!-- Contact End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    
</body>

</html>