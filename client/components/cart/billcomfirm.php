<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid py-4">
<div class="alert alert-success" role="alert">
                         Đặt hàng thành công!
                         </div>
    <div class="row">
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
            $pttt = get_pttt($bill['bill_pttt']);
        }

        ?>

        <div class="col-6">


            <div class="card mb-4">


                <div class="card-header pb-0">
                    <p class="text-center">Thông tin đơn hàng</p>


                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <tr>
                                <td>- Mã đơn hàng: PTA-<?= $bill['id']; ?></td>
                            </tr>
                            <tr>
                                <td>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></td>
                            </tr>
                            <tr>
                                <td>- Tổng đơn hàng: <?= $bill['total']; ?></td>
                            </tr>
                            <tr>
                                <td>- Phương thức thanh toán: <?= $pttt ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header pb-0">
                   
                        <p class="text-center">Thông tin khách hàng</p>

                    
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?= $bill['bill_tel']; ?></td>
                        </tr>
                    </table>

                </div>
            </div>

        </div>
        </div>




    </div>
    <div class="row">
    <div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6 class="text-center" >CHI TIẾT GIỎ HÀNG</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">

                <?php
                bill_chi_tiet($billct);
                ?>
            </table>
        </div>
    </div> </div></div>
   
</div>

</div>