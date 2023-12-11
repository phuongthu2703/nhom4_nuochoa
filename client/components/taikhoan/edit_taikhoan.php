<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                        
<div class="container-fluid py-4">
<div class="row">
<div class="col-12">  
    <br><br>
<div class="card mb-4">
<div class="card-header pb-0">
<?php
                            if(isset($_SESSION['name'])&&($is_array=$_SESSION['name'])){
                                extract($_SESSION['name']);

                            }
                            if(isset($thongbao)&&($thongbao!= "")){
                                echo '<div class="alert alert-success" role="alert">
                               '.$thongbao.'!
                              </div>';
                            }
                            
                        ?>
            <h5 class="text-center">Chỉnh sửa tài khoản</h5>
            
            <div class="card-body px-0 pt-0 pb-2">
                <form action="index.php?act=edit_taikhoan" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">           
                    <div class="kh-all">
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs">Tên tài khoản</label>
                                <input class="form-control" type="text" name="name" id="tenuser" value="<?=$name?>">
                                <p style="color: red;" id="tenuser-err"></p>
                            </div>
                            <br>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs">Mật khẩu</label>
                                <input class="form-control" type="text" name="pass" id="mkuser" value="<?=$pass?>">
                                <p style="color: red;" id="mkuser-err"></p>
                            </div>
                            <br>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs">Email</label>
                                <input class="form-control" type="email" name="email" id="emailuser" value="<?=$email?>">
                                <p style="color: red;" id="emailuser-err"></p>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs">Địa chỉ</label>
                                <input class="form-control" type="text" name="address" id="aduser" value="<?=$address?>">
                                <p style="color: red;" id="aduser-err"></p>
                            </div>
                            <br>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs">Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" id="phoneuser" value="<?=$phone?>">
                                <p style="color: red;" id="phoneuser-err"></p>
                            </div>
                           
                        </div>
                    </div>
                    <br><br>
                    
                    <div class="text-center">
                
                    <input type="hidden" name="customer_ID" value="<?=$customer_ID?>">
                <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="btn btn-secondary" type="reset" value="Nhập lại">
                
              
            </div>
                  
                </form>
            </div>
    </div>
</div>
</div>
</div>
</div>
<script>
    function validateForm() {
        let tenuser = document.getElementById("tenuser").value;
        let mkuser = document.getElementById("mkuser").value;
        let emailuser = document.getElementById("emailuser").value;
        let aduser = document.getElementById("aduser").value;
        let phoneuser = document.getElementById("phoneuser").value;
        let role = document.getElementById("role").value;
        let text;

        // Tên tài khoản
        if (tenuser == "") {
            text = "Tên tài khoản không được để trống";
            document.getElementById("tenuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("tenuser-err").innerHTML = text;
        }
        
        // Mật khẩu
        if (mkuser == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("mkuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("mkuser-err").innerHTML = text;
        }

        // Email
        if (emailuser == "") {
            text = "Email không được để trống";
            document.getElementById("emailuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("emailuser-err").innerHTML = text;
        }

        // Địa chỉ
        if (aduser == "") {
            text = "Địa chỉ không được để trống";
            document.getElementById("aduser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("aduser-err").innerHTML = text;
        }

        // Số điện thoại
        if (phoneuser == "") {
            text = "Số điện thoại không được để trống";
            document.getElementById("phoneuser-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("phoneuser-err").innerHTML = text;
        }

        // Loại tài khoản
        if (role == "") {
            text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
            document.getElementById("role-err").innerHTML = text;
            return false;
        }else{
            text = "";
            document.getElementById("role-err").innerHTML = text;
        }

        // if (role !== 1 || role !== 0) {
        //     text = "Loại tài khoản chỉ được lựa chọn 1: Admin và 0: Khách hàng";
        //     document.getElementById("role-err2").innerHTML = text;  
        // }else{
        //     text = "";
        //     document.getElementById("role-err2").innerHTML = text;
        // }
    }
</script>
                  

