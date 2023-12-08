<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Thống kê</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Danh sách</h6>
        </nav>
        </div>

        <div class="container-fluid py-4">
<div class="row">
<div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0">
              <h6 class="text-center" >Danh sách thống kê</h6>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
            <table class="table align-items-center mb-0">
                       <tr>
                           <th>Mã danh mục</th>
                           <th>Tên danh mục</th>
                           <th>Số lượng</th>
                           <th>Giá cao nhất</th>
                           <th>Giá thấp nhất</th>
                           <th>Giá trung bình</th>
                       </tr>
                       <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                        }
                       
                       
                       ?>
                       
                   </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=bieudo"  ><input class="btn btn-primary" type="button" value="Xem biểu đồ"></a>
                </div>
                
            </div>
        </div></div>    </div></div>