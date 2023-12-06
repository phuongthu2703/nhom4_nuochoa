<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/logo-small.png">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
</head>



<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý sản phẩm</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Danh sách</h6>
        </nav>
        </div>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="container-fluid py-4">
   
    
      
        <div class="row">
            <div class="col-12">

                <div class="card mb-4">
                    <div class="card-header pb-0">
                    <h6 class="text-center">Danh sách sản phẩm</h6>
                    <?php
               if(isset($thongbao)&&($thongbao!="")) echo" <script>
               
               window.onload = function() {
                   alert('$thongbao!');
               };
           </script>
           "
              ?>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="form-group row">
                        
                        <div class="table-responsive">
                          <div class="row mb10 frmdsloai">
                            <form action="index.php?act=listsp" method="post">
                              <input type="text" name="kyw">
                              <select name="category_ID">
                                  <option value="0" selected>Tất cả</option>
                               
                              <?php
                              foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$category_ID.'">'.$name.'</option>';
                                       }
                               ?>
                    
                              </select>
                              <input type="submit" name="listok" value="GO">
                            </form>




                          </div>
                        <table class="table align-items-center mb-0">
                        <thead>
                <tr>
                    
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã sản phẩm</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hình ảnh</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Giá</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mô tả</th>
                  
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&product_ID=".$product_ID;
                        $xoasp = "index.php?act=xoasp&product_ID=".$product_ID;
                        $hinhpath = "../upload/".$image;
                        if(is_file($hinhpath)){
                          $image = "<img src ='".$hinhpath."' height = '80'>";
                        } else{
                          $image = "no photo";
                        }
                        echo '<tr>
                             
                                <td class="align-middle text-center"> <p class="text-xs font-weight-bold mb-0">'.$product_ID.'</p></td>
                                <td><p class="text-xs font-weight-bold mb-0">'.$name.'</p></td>
                                <td><div class="d-flex px-2 py-1">
                                <div class="align-middle text-center">
                                  '.$image.'
                                </div>
                                
                              </div></td>

                                <td><span class="text-secondary text-xs font-weight-bold">'.$price.'</span></td>
                                <td><span class="text-secondary text-xs font-weight-bold">'.$description.'</span>
                                </td>
                              
                                
                               
                                <td class="align-middle"><a href="'.$suasp.'"><input type="button" class="btn btn-outline-success" value="Sửa"></a> 
                                <a href="'.$xoasp.'"><input type="button" class="btn btn-outline-danger" value="Xóa"> </a></td>
                            </tr>';
                    }
                ?>
                   </tbody>
            </table>
                        </div>
                        </div>
                        <td colspan="5">
                         <input  type="button" class="btn btn-outline-success" value="Chọn tất cả">
                          <input type="button" class="btn btn-outline-warning" value="Bỏ chọn tất cả">
                          <input type="button" class="btn btn-outline-danger" value="Xóa các mục đã chọn">
                          <a href="index.php?act=addsp"><input type="button" class="btn btn-outline-primary" value="Nhập thêm"></a>
                    </td>
                         

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




