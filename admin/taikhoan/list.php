<!DOCTYPE html>
<html dir="ltr" lang="en">






<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý khách hàng</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Danh sách</h6>
        </nav>
        </div>
   
    <div class="container-fluid py-4">
    
        <div class="row">
            <div class="col-12">

                <div class="card mb-4">
                    <div class="card-header pb-0">
                    
                        <h5 class="text-center">Danh sách tài khoản</h5>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                <tr>
                   
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">ID khách hàng</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Tên đăng nhập</th>
                    <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Mật khẩu</th> -->
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Địa chỉ</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Điện thoại</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Vai trò</th>
                    <th></th>
                </tr>
                <?php 
                    foreach($listtaikhoan as $taikhoan){
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&customer_ID=".$customer_ID;
                        $xoatk = "index.php?act=xoatk&customer_ID=".$customer_ID;

                        echo '<tr>
                                
                                <td class="text-secondary text-xs font-weight-bold">'.$customer_ID.'</td>
                                <td class="text-xs font-weight-bold mb-0">'.$name.'</td>
                                
                                <td class="text-secondary text-xs font-weight-bold">'.$email.'</td>
                                <td class="text-secondary text-xs font-weight-bold">'.$address.'</td>
                                <td class="text-secondary text-xs font-weight-bold">'.$phone.'</td>
                                <td class="align-middle text-center text-sm">'.($role == 1 ? '<span class="badge badge-sm bg-gradient-primary">Admin</span>' : '<span class="badge badge-sm bg-gradient-success">Khách hàng</span>').'</td>
                                <td>
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="'.$xoatk.'"><i class="far fa-trash-alt me-2"></i>Xóa</a>
                               
                            </tr>';
                    }
                ?>
            </table>
                        </div>
                        </div>
                        <div class="text-center"> 
                          <td><a href="index.php?act=addtk"><input type="button" class="btn btn-primary" value="Nhập thêm"></a></td>
                          </div> 
                         

                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->


    

   
   <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>




