<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CandyCloud</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/cotton.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="client/css/style.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
  
<div>
<?php 

session_start();
include "model/pdo.php";
include  "model/danhmuc.php";
include  "model/sanpham.php";
include  "model/taikhoan.php";
include "client/components/header.php";
include "global.php";

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10=loadall_sanpham_top10();
  if ((isset($_GET['act']))&&($_GET['act']!="")){
          $act=$_GET['act'];



          switch($act){
            case 'sanphamct':
              
              if(isset($_GET['product_ID'])&&($_GET['product_ID']>0)){
                $product_ID=$_GET['product_ID'];
                }
          
              
                
                $onesp=loadone_sanpham($product_ID);
                include "client/components/sanphamct.php";
              break;
              
              case 'sanphamall':
                //function
               
               
                include "client/components/product.php";
               
                break;
                case 'taikhoanct':
              
                  if(isset($_GET['customer_ID'])&&($_GET['customer_ID']>0)){
                    $customer_ID=$_GET['customer_ID'];
                    }
              
                  
                    
                    $onetk=loadone_taikhoan($customer_ID);
                    include "client/components/taikhoanct.php";
                  break;
                  
                  case 'sanphamall':
                    //function
                   
                   
                    include "client/components/product.php";
                   
                    break;
                case 'product_cate':
                  if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
  
                  }else{
                    $kyw="";
                  }
                  
  
                  if(isset($_GET['category_ID'])&&($_GET['category_ID']>0)){
                        $category_ID=$_GET['category_ID'];
                       
                       
                  }else{
                     $category_ID=0;
                  }
                  $dssp=loadall_sanpham($kyw, $category_ID);
                  $tendm=load_ten_dm($category_ID);
                  include "client/components/product_cate.php";
                 
                  break;
                
                
                case 'dangky':
                  if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$name,$pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";
                  }
                  include "client/components/taikhoan/dangky.php";
                  break;
                  case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    
                      $name=$_POST['name'];
                      $pass=$_POST['pass'];
                      $checkuser=checkuser($name,$pass);
                      if(is_array($checkuser)){
                        $_SESSION['name']=$checkuser;
                       
                        // $thongbao="Bạn đã đăng nhập thành công";
                        header('location: index.php');
                      $thongbao="Bạn đã đăng nhập thành công";
                     
                      
                    } else{
                      $thongbao= "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                    }
                  }
                    include "client/components/taikhoan/dangky.php";
                    break;
                    case 'edit_taikhoan':
                      if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                      
                        $name=$_POST['name'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $phone=$_POST['phone'];
                        $customer_ID=$_POST['customer_ID'];

                        update_taikhoan($customer_ID, $name,$image, $pass, $email, $address, $phone);
                        $_SESSION['name']=checkuser($name,$pass);
                        header('Location: index.php?act=edit_taikhoan');
                      }
                      include "client/components/taikhoan/edit_taikhoan.php";
                      break;
                      case 'quenmk':
                        if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                        
                         $email = $_POST['email'];

                         $checkemail=checkemail($email);
                         if(is_array($checkemail)){
                           $thongbao="Mật khẩu của bạn là :". $checkemail['pass'];
                         }else{
                          $thongbao= "Email này không tồn tại";
                         }
                                       
                        }
                        include "client/components/taikhoan/quenmk.php";
                        break  ;
                        case 'thoat':
                          session_unset();
                          header('Location: index.php');

                          include "client/components/gioithieu.php";
                          break;
            case 'gioithieu':
              include "client/components/gioithieu.php";
              break;
            case 'lienhe':
              include "client/components/lienhe.php";
              break;
            case 'gallery':
              include "client/components/gallery.php";
              break;
            default:
                include "client/components/home.php";

          }
        } else {
          include 'client/components/home.php';
        } 

        include "client/components/footer.php";
 ?>
 </div>

</body>

</html>