<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-primary" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-primary active" aria-current="page">Giỏ hàng</li>
          </ol>
          <h6 class="font-weight-bolder text-primary mb-0">Danh sách sản phẩm</h6>
        </nav>
        </div>


<div class="container-fluid py-4">
    <div class="row">
    <div class="card-body px-0 pt-0 pb-2">
                <table class="table align-items-center mb-0">
                <?php
                   viewcart(1);
                    ?>
                    <tr>
                       
                    </tr>
                </table>
            </div>
        </div>

        <div class="">
            <a href="index.php?act=bill"><input type="submit" class="btn btn-primary" value="Đồng ý đặt hàng"></a><a href="index.php?act=delcart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
          <a href="index.php?act=mybill"><input type="submit" class="btn btn-outline-secondary" value="Đơn hàng của tôi"></a>
        </div>
    </div>
    <div>
    </div>
    </div>

</div>