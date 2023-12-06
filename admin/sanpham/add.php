
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
  
</head>

<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý sản phẩm</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Thêm mới</h6>
        </nav>
        </div>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="container-fluid py-4">

 
   
    <div class="row">
    <div class="col-12">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card mb-4">
            <div class="card-header pb-0">
            <h6 class="text-center">Thêm sản phẩm</h6>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="">
            <form class="form-horizontal" action="index.php?act=addsp" method="post" enctype="multipart/form-data">


            <div class="col-md-2">
                <label class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Danh mục</label>
               
                <br>
                <select class="form-select" name="category_ID">
                    <?php
                        foreach ($listdanhmuc as $danhmuc){
                             extract($danhmuc);
                             echo '<option value="'.$category_ID.'">'.$name.'</option>';
                        }
                    ?>
                    
                </select>
            </div>
            <br>
            <div class="form-group row">
                <label class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Mã sản phẩm</label>
               
                <div class="col-sm-9">
                    <input type="text" name="product_ID" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label  class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Tên sản phẩm</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" placeholder="Nhập tên....." name="name" required>
                </div>
                
            </div>
            <div class="form-group">
                <label  class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Hình ảnh</label>
                <div class="col-sm-12">
                <input class="form-control" type="file" name="image" required>
                </div>
                
            </div>
            <div class="form-group row">
                <label  class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Mô tả</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control"  name="description"> </textarea>
                </div>
                
            </div>
            <div class="form-group row">
                <label  class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Cách sử dụng</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control"  name="use_pro"> </textarea>
                </div>
                
            </div>
            <div class="form-group row">
                <label  class="text-uppercase text-dark text-xs font-weight-bolder opacity-7">Giá</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control"  name="price" required>
                </div>
                
            </div>
            
            <br><br>
            <div class="text-center">
                
                
                <input style="background-color:lightcoral; color: beige; border: none; height: 40px; border-radius: 5px;" type="submit" name="themmoi" value="Thêm mới">
                
                
                <input style="background-color:lightseagreen; color: beige; border: none; height: 40px; border-radius: 5px;"  type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
                    <input  style="background-color:coral; color: beige; border: none; height: 40px; border-radius: 5px;" type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
          
            ?>

        </form>
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
    </div>
    
    </div>
    