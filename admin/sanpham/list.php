<!DOCTYPE html>
<html dir="ltr" lang="en">




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
                            <form action="index.php?act=listsp" method="POST">
                            <input type="text" class="btn btn-outline-warning"  name="kyw" placeholder="Nhập tên sản phẩm" style="width: 200px">
                             <input type="submit" class="btn btn-warning" name="listok" value="Tìm">
                            
                              <select class="form-select" name="category_ID" style="width: 160px;">
                                  <option value="0" selected>Tất cả</option>
                               
                              <?php
                              foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$category_ID.'">'.$name.'</option>';
                                       }
                               ?>
                    
                              </select> 
                            </form>

                          


                          </div>
                        <table class="table align-items-center mb-0">
                        <thead>
                <tr>
                    
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Mã sản phẩm</th>
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
                             
                        <td class="align-middle text-center text-sm">'.$product_ID.'</td>
                        <td class="text-xs font-weight-bold mb-0">'.$name.'</td>
                                <td><div class="d-flex px-2 py-1">
                                <div class="align-middle text-center">
                                  '.$image.'
                                </div>
                                
                              </div></td>

                                <td><span class="text-secondary text-xs font-weight-bold">'.$price.'</span></td>
                                <td><span class="text-secondary text-xs font-weight-bold">'.$description.'</span>
                                </td>
                              
                                
                               
                                <td class="align-middle">  <a class="btn btn-link text-success text-gradient px-3 mb-0" href="'.$suasp.'"><i class="fas fa-pencil-alt text-dark me-2"></i>Sửa</a>
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="'.$xoasp.'"><i class="far fa-trash-alt me-2"></i>Xóa</a>
                            </tr>';
                    }
                ?>
                   </tbody>
            </table>
                        </div>
                        </div>
                        <div class="text-center"> 
                          <td><a href="index.php?act=addsp"><input type="button" class="btn btn-primary" value="Nhập thêm"></a></td>
                          </div> 
                         

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




