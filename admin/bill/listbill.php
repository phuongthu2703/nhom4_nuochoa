<style>
    *{
        font-size: 1vw;
    }
</style>

<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý đơn hàng</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Danh sách</h6>
        </nav>
        </div>
        <div class="container-fluid py-4">    
<div class="row">
<div class="col-12">
          <div class="card mb-4">   
          <div class="card-header pb-0">
               <h6 class="text-center" >Danh sách đơn hàng</h6>
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
            <form action="index.php?act=listbill" method="post">
                       
                                    <div class="input-group">
                                    <input type="text" class="form-control"  name="kyw" placeholder="Nhập mã đơn hàng" style="width: 200px">
                                    <input type="submit" class="btn btn-warning" name="listok" value="Tìm">
                                     </div>
            </form>
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                        <tr>
                            
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Mã đơn hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Khách hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Số lượng mặt hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Tổng giá trị đơn hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Tình trạng đơn hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Ngày đặt hàng</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Thao tác</th>
                        </tr>
                        <?php
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $suabill= "index.php?act=suabill&id=".$id;
                                // $xoabill = "index.php?act=xoabill&id=".$id;
                                      $kh=$bill["bill_name"].'
                                    <br>'.$bill["bill_email"].'
                                    <br>'.$bill["bill_address"].'
                                    <br>'.$bill["bill_tel"];
                                $ttdh=get_ttdh($bill['bill_status']);
                                $countsp=loadall_cart_count($bill["id"]);
                               echo '<tr>
                                        
                                        <td>PTA-'.$bill['id'].'</td>
                                        <td>'.$kh.'</td>
                                        <td>'.$countsp.'</td>
                                        <td><strong>'.$bill['total'].'</strong>VNĐ</td>
                                        <td>'.$ttdh.'</td>
                                        <td>'.$bill['ngaydathang'].'</td>
                                        <td> <a class="btn btn-success" href="'.$suabill.'">Sửa</a>
                                    </tr>';
                            }
                        
                        
                        ?>
                        
                       
               
        
       
                </table> 
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>