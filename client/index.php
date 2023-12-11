
<?php
session_start();
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<?php 

include "../model/pdo.php";
include  "../model/danhmuc.php";
include  "../model/sanpham.php";
include  "../model/taikhoan.php";
include  "../model/cart.php";
include "components/header.php";
include "../global.php";
?>

<?php

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10=loadall_sanpham_top10();
$dstk=loadall_taikhoan_admin();
  if ((isset($_GET['act']))&&($_GET['act']!="")){
          $act=$_GET['act'];



          switch($act){
            case 'sanphamct':
              
              if(isset($_GET['product_ID'])&&($_GET['product_ID']>0)){
                $product_ID=$_GET['product_ID'];
                }
          
              
                
                $onesp=loadone_sanpham($product_ID);
                include "components/sanphamct.php";
              break;
              
              case 'sanphamall':
                //function
                $spnew = loadall_sanpham1();
               
                include "components/product.php";
               
                break;
                case 'taikhoanct':
              
                  if(isset($_GET['customer_ID'])&&($_GET['customer_ID']>0)){
                    $customer_ID=$_GET['customer_ID'];
                    }
              
                  
                    
                    $onetk=loadone_taikhoan($customer_ID);
                    include "components/taikhoan/taikhoanct.php";
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
                  include "components/product_cate.php";
                 
                  break;
                
                
                case 'dangky':
                  if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $name=$_POST['name'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($name,$pass);
                    if(is_array($checkuser)){
                      $_SESSION['name']=$checkuser;
                     
                      // $thongbao="Bạn đã đăng nhập thành công";
                     
                    $thongbao="Đã tồn tại";
                   
                    
                  } else{
                    insert_taikhoan($email,$name,$pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";
                  }
                    
                  }
                  include "components/taikhoan/dangky.php";
                  break;
                  case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    
                      $name=$_POST['name'];
                      $pass=$_POST['pass'];
                      $checkuser=checkuser($name,$pass);
                      if(is_array($checkuser)){
                        $_SESSION['name']=$checkuser;
                       
                        // $thongbao="Bạn đã đăng nhập thành công";
                        include "components/home.php";
                      $thongbao="Bạn đã đăng nhập thành công";
                     
                      
                    } else{
                      $thongbao= "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                      include "components/taikhoan/dangnhap.php";
                    }
                    
                  }
                  include "components/taikhoan/dangnhap.php";
                    
                    break;
                    case 'edit_taikhoan':
                      if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                      
                        $name=$_POST['name'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $phone=$_POST['phone'];
                        $customer_ID=$_POST['customer_ID'];
                        
                        update_taikhoan($customer_ID, $name, $pass, $email, $address, $phone);
                        $_SESSION['name']=checkuser($name,$pass);
                        $thongbao="Cập nhật thành công";
                      }

                      include "components/taikhoan/edit_taikhoan.php";
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
                        include "components/taikhoan/quenmk.php";
                        break  ;
                        case 'thoat':
                          session_unset();
                         

                          include "components/home.php";
                          break;
                        
                        case'addtocart':
                          if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                            $product_ID = $_POST['product_ID'];
                            $name=$_POST['name'];
                            $image=$_POST['image'];
                            $price=$_POST['price'];
                            $soluong=1;
                            $ttien=$soluong * $price;
                            $spadd=[$product_ID,$name,$image,$price,$soluong,$ttien];
                            array_push($_SESSION['mycart'], $spadd);
                           
                          }

                          include "components/cart/viewcart.php";
                        break ;  
                        case 'delcart':
                            if(isset($_GET['idcart'])){
                                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                            }else{
                              $_SESSION['mycart']=[];
                            }
                            // header("Location : index.php?act=viewcart");
                            include "components/cart/viewcart.php";
                        break;
            case 'viewcart':
              include "components/cart/viewcart.php";
              break;
            case 'bill':
                include "components/cart/bill.php";
                break;
                case 'billcomfirm':
                  //tạo bill
                  
                  if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    if(isset($_SESSION['name'])) $customer_ID=$_SESSION['name']['customer_ID'];
                    else $customer_ID=0;
                    $name=$_SESSION['name']['name'];
                     $email=$_POST['email'];
                     $address=$_POST['address'];
                     $phone=$_POST['phone'];
                     $pttt=$_POST['pttt'];
                     $ngaydathang=date('h:i:sa d/m/y');
                     $tongdonhang=tongdonhang();
//tạo bill
                      $idbill=insert_bill($customer_ID, $name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang);
                    //insert into cart: $session['mycart']&idbill
                    foreach($_SESSION ['mycart'] as $cart){
                      insert_cart($_SESSION['name']['customer_ID'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4],$cart[5], $idbill);
                    }
                      //Xóa cart
                     $_SESSION['cart']=[]; 
                  }
                  $bill=loadone_bill($idbill);
                  $billct=loadall_cart($idbill);
                  include "components/cart/billcomfirm.php";
                  break;   
                  case 'lienhe':
                   
                    if(isset($_POST['gui'])&&($_POST['gui'])){
                      $contact_name=$_POST['contact_name'];
                      $contact_email=$_POST['contact_email'];
                      $contact_address=$_POST['contact_address'];
                      $contact_tel=$_POST['contact_tel'];
                      $content=$_POST['content'];
                  
                      insert_contact($contact_name, $contact_email, $contact_address, $contact_tel, $content);
                      $thongbao="Phản hồi đã được gửi đi! Vui lòng check mail!";
                    }
                    include "components/lienhe.php";
                    break;   
                  
             case 'mybill':
             $listbill = loadall_bill($_SESSION['name']['customer_ID']);
              include "components/cart/mybill.php";
              break;     
            case 'gioithieu':
              include "components/gioithieu.php";
              break;
          
            case 'gallery':
              include "components/gallery.php";
              break;
            default:
                include "components/home.php";

          }
        } else {
          include 'components/home.php';
        } 

        include "components/footer.php";
 ?>
