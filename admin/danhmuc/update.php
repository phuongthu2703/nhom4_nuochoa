<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

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
<div class="main-panel">
<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Trang chủ</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Quản lý danh mục</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Cập nhật</h6>
        </nav>
        </div>
<!-- Page wrapper  -->
<!-- ============================================================== -->


  <div class="container-fluid py-4">
    <br><br>
    <div class="row">
    <div class="col-12">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card mb-4">
            <div class="card-header pb-0">
            <h6 class="text-center">Cập nhật loại sản phẩm</h6> 
            <div class="card-body px-0 pt-0 pb-2">
            <form class="form-horizontal" action="index.php?act=updatedm" method="post">
               
            <div class="form-group row">
           
                <label for="category_ID" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã loại</label>
                <div class="col-sm-9">
                    <input type="text" name="category_ID" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="text-uppercase text-xxs text-xxs font-weight-bolder opacity-7">Tên loại</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="name" value="<?php if(isset($name)&&($name!="")) echo $name;?>" required>
                </div>
            </div>
           
            <br><br>
            <div class="text-center">
                
                <input type="hidden" name="category_ID" value="<?php if(isset($category_ID)&&($category_ID>0)) echo $category_ID;?>">
                <input style="background-color:lightcoral; color: beige; border: none; height: 40px; border-radius: 5px;" type="submit" name="capnhat" value="Cập nhật">
                
                
                <input style="background-color:lightseagreen; color: beige; border: none; height: 40px; border-radius: 5px;"  type="reset" value="Nhập lại">
                <a href="index.php?act=listdm">
                    <input  style="background-color:coral; color: beige; border: none; height: 40px; border-radius: 5px;" type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo" <script>
               
                window.onload = function() {
                    alert('$thongbao!');
                };
            </script>
            "
          
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
    
<di class="main-panel">
    </div>
    