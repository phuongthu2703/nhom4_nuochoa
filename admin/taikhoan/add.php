<div class="container-fluid py-4">
<div class="row">
<div class="card mb-4">
<div class="card-header pb-0">
            <h6 class="text-center">Thêm tài khoản</h6>
            
            <div class="card-body px-0 pt-0 pb-2">
                <form action="index.php?act=addtk" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">           
                    <div class="kh-all">
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Tên tài khoản</label>
                                <input class="form-control" type="text" name="name" id="tenuser">
                                <p style="color: red;" id="tenuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Mật khẩu</label>
                                <input class="form-control" type="text" name="pass" id="mkuser">
                                <p style="color: red;" id="mkuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Email</label>
                                <input class="form-control" type="email" name="email" id="emailuser">
                                <p style="color: red;" id="emailuser-err"></p>
                            </div>
                        </div>
                        <div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Địa chỉ</label>
                                <input class="form-control" type="text" name="address" id="aduser">
                                <p style="color: red;" id="aduser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" id="phoneuser">
                                <p style="color: red;" id="phoneuser-err"></p>
                            </div>
                            <div class="row mb10 kh-one">
                            <strong>Vai trò(1:Admin 0:Khách)</strong>  <br>
                                <input class="form-control" type="number" name="role" id="role">
                                <p style="color: red;" id="role-err"></p>
                                <p style="color: red;" id="role-err2"></p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="text-center">
                
                
                <input style="background-color:lightcoral; color: beige; border: none; height: 40px; border-radius: 5px;" type="submit" name="themmoi" value="Thêm mới">
                
                
                <input style="background-color:lightseagreen; color: beige; border: none; height: 40px; border-radius: 5px;"  type="reset" value="Nhập lại">
                <a href="index.php?act=dskh">
                    <input  style="background-color:coral; color: beige; border: none; height: 40px; border-radius: 5px;" type="button" value="Danh sách"></a>
            </div>
                    <?php
                        if(isset($thongbao) &&($thongbao != "")){
                            echo $thongbao;
                        } 
                    ?>
                </form>
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