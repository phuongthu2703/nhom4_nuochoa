

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="card" style="width: 80rem;">
                    <h1 class="section-title position-relative text-center mb-5">Cập nhật tài khoản</h1>
                    <div class="card-body">
                        <?php
                            if(isset($_SESSION['name'])&&($is_array=$_SESSION['name'])){
                                extract($_SESSION['name']);

                            }
                            if(isset($thongbao)&&($thongbao!= "")){
                                echo '<div class="alert alert-primary" role="alert">
                               '.$thongbao.'!
                              </div>';
                            }
                            
                        ?>
                        
                        <form action="index.php?act=edit_taikhoan" method="post">
                        <div class="form-group row">
                <label class="text-uppercase text-xs font-weight-bolder opacity-7">Email</label>
               
                <div class="col-sm-12">
                    <input type="email" class="form-control" name="email" value="<?=$email?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label  class="text-uppercase text-xs font-weight-bolder opacity-7">Tên đăng nhập</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" value="<?=$name?>" required>
                </div>
                
            </div>
                            
                
                        
            <div class="form-group row">
                <label  class="text-uppercase text-xs font-weight-bolder opacity-7">Mật khẩu</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" name="pass" value="<?=$pass?>" required>
                </div>
                
            </div>
            <div class="form-group row">
                <label  class="text-uppercase text-xs font-weight-bolder opacity-7">Địa chỉ</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="address" value="<?=$address?>" required>
                </div>
                
            </div> <div class="form-group row">
                <label  class="text-uppercase text-xs font-weight-bolder opacity-7">Số điện thoại</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="phone" value="<?=$phone?>" required>
                </div>
                
            </div>
                            <br>
                            <div class="text-center">
                                <input type="hidden" name="customer_ID" value="<?=$customer_ID?>">
                                <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                                <input type="reset" class="btn btn-primary" value="Nhập lại">
                            </div>

                        </form>
                        
                    </div>
                    <br>
                </div>
            </div>


        </div>









        
    </div>


