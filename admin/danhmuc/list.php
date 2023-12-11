<!DOCTYPE html>
<html dir="ltr" lang="en">




<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý danh mục</li>
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
              <h6 class="text-center" >Danh sách loại sản phẩm</h6>
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
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                
                    <tr>
                     
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mã loại</th>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên loại</th>
                     
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
             

               
                  <?php
                  foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&category_ID=".$category_ID;
                    $xoadm = "index.php?act=xoadm&category_ID=".$category_ID;
                    $hinhpath = "../upload/".$image;
                    if(is_file($hinhpath)){
                      $image = "<img src ='".$hinhpath."' height = '80'>";
                    } else{
                      $image = "no photo";
                    }
                    echo'<tr>
                     
                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.$category_ID.'</p>
                       
                      </td>
                      
                      
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.$name.'</p>
                      </td>
                      <td class="align-middle text-center">
                      <a class="btn btn-link text-success text-gradient px-3 mb-0" href="'.$suadm.'"><i class="fas fa-pencil-alt text-dark me-2"></i>Sửa</a>
                      </td>
                      <td class="align-middle">
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="'.$xoadm.'"><i class="far fa-trash-alt me-2"></i>Xóa</a>
                        
                        
                      </td>
                    </tr>';
                  }
                    ?>

                  
               
                </table>
                <br>
               
                    <div class="text-center"> 
                          <td><a href="index.php?act=adddm"><input type="button" class="btn btn-primary" value="Nhập thêm"></a></td>
                          </div> 

              </div>
            </div>
            
            
          </div>
        </div>
      </div>
</div>
   
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




