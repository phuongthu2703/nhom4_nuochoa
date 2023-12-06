<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-primary" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-primary active" aria-current="page">Thanh toán</li>
          </ol>
          <h6 class="font-weight-bolder text-primary mb-0">Tiến hành thanh toán</h6>
        </nav>
        </div>


<div class="container-fluid py-4">
<form action="index.php?act=billcomfirm" method="post">
   <div class="row">
   <div class="col-6">
   
        <div class="card">
        <div class="card-header">
            <div class="text-uppercase text-primary">Thông tin người đặt hàng</div>
            
                <table>
                    <?php
                    if(isset($_SESSION['name'])){
                        $name=$_SESSION['name']['name'];
                        $address=$_SESSION['name']['address'];
                        $email=$_SESSION['name']['email'];
                        $phone=$_SESSION['name']['phone'];
                    }else{
                        $name="";
                        $address="";
                        $email="";
                        $phone="";
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" class="form-control" name="customer_ID" value="<?=$name?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" class="form-control" name="address" value="<?=$address?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control" name="email" value="<?=$email?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" class="form-control" name="phone" value="<?=$phone?>"></td>
                    </tr>
                </table>
            </div>
        </div>

        <div>
            <div>Thanh toán</div>
           
            
                <table class="table align-items-center mb-0">
                    <tr>
                        <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                        <td><input type="radio" name="pttt">Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="col-6">
        <div class="card">
        <div class="card-header">   
            <div class="text-uppercase text-primary">Thông tin giỏ hàng</div>
            <div>
                
                   <table>
                    <?php
                   viewcart(0);
                    ?>
                    </table>
                
            </div>
        </div>
        
        </div>
       
        </div>
        </div> 
        <div class ="text-center">
            <input type="submit" class="btn btn-outline-danger" value="Đồng ý đặt hàng" name="dongydathang">
        </div> 
    </form>
  
    
</div>