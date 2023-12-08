<div class="container-fluid py-4">
<div class="row">
<div class="col-12">
<div class="card mb-4">
<div class="card-header pb-0">
              <h6 class="text-center" >Danh sách loại sản phẩm</h6></div>
              <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <tr>
                       
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    
                    <?php
                if(is_array($listbill)){
                    foreach($listbill as $bill){
                        extract($bill);
                        
                        $ttdh=get_ttdh($bill['bill_status']);
                        $countsp=loadall_cart_count($bill['id']);
                        echo '<tr>
                        <td>DAM-'.$bill['id'].'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill['total'].'</td>
                        <td>'.$ttdh.'</td>
                    </tr>'; 
                    }
                }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>