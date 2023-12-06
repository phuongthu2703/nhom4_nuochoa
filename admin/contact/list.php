<!DOCTYPE html>
<html dir="ltr" lang="en">




<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Góp ý</li>
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
              <h6 class="text-center" >Góp ý từ khách hàng</h6>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên</th>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                     
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Địa chỉ</th>
                      <th class="text-secondary opacity-7">Số điện thoại</th>
                      <th class="text-secondary opacity-7">Nội dung ý kiến</th>
                      <th></th>
                      
                    </tr>
             

               
                  <?php
                  foreach($listcontact as $contact){
                    extract($contact);
                   
                    $xoacontact = "index.php?act=xoacontact&contact_ID=".$contact_ID;
                 
                    echo'<tr>
                      <td>
                        
                      <p class="text-xs font-weight-bold mb-0">'.$contact_ID.'</p>
                        
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.$contact_name.'</p>
                       
                      </td>
                      
                      
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.$contact_email.'</p>
                      </td>
                      <td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.$contact_address.'</p>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.$contact_tel.'</p>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.$content.'</p>
                      </td>
                     
                     
                      <td class="align-middle">
                      <a href="'.$xoacontact.'"><span class="badge badge-sm bg-gradient-danger">Xóa</span></a>
                        
                        
                      </td>
                    </tr>';
                  }
                    ?>

                  
               
                </table>
                <br>
                <tr>
                       <td> <input  type="button" class="btn btn-outline-success" value="Chọn tất cả" style="width:min-content"></td> 
                         <td><input type="button" class="btn btn-outline-warning" value="Bỏ chọn tất cả" style="width:min-content"></td>
                          <td><input type="button" class="btn btn-outline-danger" value="Xóa các mục đã chọn" style="width:min-content"></td>
                        
                    </tr>

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




