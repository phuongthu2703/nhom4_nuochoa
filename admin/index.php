

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../upload/logo-small.png">
  <title>
    Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php
  include "../model/pdo.php";
  include "../model/danhmuc.php";
  include "../model/sanpham.php";
  include "../model/taikhoan.php";
  include "../model/binhluan.php";
  include "../model/cart.php";
  include "header.php";
  ?>
  <main class="main-content position-relative border-radius-lg ">
    <?php
    if (isset($_GET['act'])) {
      $act = $_GET['act'];
      switch ($act) {
        case 'adddm':
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $name = $_POST['name'];


            //function
            insert_danhmuc($name);
            $thongbao = "Thêm thành công";
          }

          include "danhmuc/add.php";
          break;





        case 'listdm':
          //function
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;
        case 'listcontact':
          //function
          $listcontact = loadall_contact();
          include "contact/list.php";
          break;
        case 'xoacontact':
          if (isset($_GET['contact_ID']) && ($_GET['contact_ID'] > 0)) {
            $contact_ID = $_GET['contact_ID'];
            delete_contact($contact_ID);
          }
          $listcontact = loadall_contact();
          include "contact/list.php";
          break;


        case 'xoadm':
          if (isset($_GET['category_ID']) && ($_GET['category_ID'] > 0)) {
            $category_ID = $_GET['category_ID'];

            try {
              delete_danhmuc($category_ID);
            } catch (\Throwable $th) {
              $thongbao =  "Không thể xóa! Danh mục đã có sản phẩm!";
            }
          }
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;

        case 'suadm';
          if (isset($_GET['category_ID']) && ($_GET['category_ID'] > 0)) {

            $dm = loadone_danhmuc($_GET['category_ID']);
          }

          include "danhmuc/update.php";
          break;

        case 'updatedm':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $name = $_POST['name'];
            $category_ID = $_POST['category_ID'];
            update_danhmuc($category_ID, $name);
            $thongbao = "Cập nhật thành công";
          }
          $listdanhmuc = loadall_danhmuc();
          include "danhmuc/list.php";
          break;



          //Sản phẩm
        case 'addsp':
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $category_ID = $_POST['category_ID'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $use_pro = $_POST['use_pro'];
            $image = $_FILES['image']['name'];

            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
            } else {
              // echo "Sorry, there was an error uploading your file.";
            }

            //function
            insert_sanpham($name, $image, $price,  $description, $use_pro, $category_ID);
            $thongbao = "Thêm thành công";
          }
          $listdanhmuc = loadall_danhmuc();

          include "sanpham/add.php";
          break;
        case 'listsp':
          if (isset($_POST['listok']) && ($_POST['listok'])) {
            $kyw = $_POST['kyw'];
            $category_ID = $_POST['category_ID'];
          } else {
            $kyw = '';
            $category_ID = 0;
          }
          //function
          $listdanhmuc = loadall_danhmuc();
          $listsanpham = loadall_sanpham($kyw, $category_ID);
          include "sanpham/list.php";
          break;
        case 'xoasp':
          if (isset($_GET['product_ID']) && ($_GET['product_ID'] > 0)) {
            $product_ID = $_GET['product_ID'];
            $image = get_image($product_ID);

            if (is_file($image)) {
              unlink($image);
            }
            try {
              delete_sanpham($product_ID);
            } catch (\Throwable $th) {
              echo "Sản phẩm đã có trong giỏ hàng! Không thể xóa!";
            }
          }
          $listsanpham = loadall_sanpham("", 0);
          include "sanpham/list.php";
          break;
        case 'suasp';
          if (isset($_GET['product_ID']) && ($_GET['product_ID'] > 0)) {

            $sanpham = loadone_sanpham($_GET['product_ID']);
          }
          $listdanhmuc = loadall_danhmuc();
          include "sanpham/update.php";
          break;
        case 'updatesp':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $product_ID = $_POST['product_ID'];
            $category_ID = $_POST['category_ID'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];

            $target_dir = "../upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              //echo "The file". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
            } else {
              // echo "Sorry, there was an error uploading your file.";
            }
            update_sanpham($product_ID, $category_ID, $name, $image, $price, $description);
            $thongbao = "Cập nhật thành công";
          }
          $listdanhmuc = loadall_danhmuc();
          $listsanpham = loadall_sanpham("", 0);
          include "sanpham/list.php";
          break;


        case 'dskh':

          $listtaikhoan = loadall_taikhoan();
          include "taikhoan/list.php";
          break;
        case 'dsbl':

          $listbinhluan = loadall_binhluan(0);
          include "binhluan/list.php";
          break;
        case 'xoabl':
          if (isset($_GET['comment_ID']) && ($_GET['comment_ID'] > 0)) {
            delete_binhluan($_GET['comment_ID']);
          }
          $listbinhluan = loadall_binhluan(0);
          include "binhluan/list.php";
          break;
        case 'xoatk':
          if (isset($_GET['customer_ID']) && ($_GET['customer_ID'] > 0)) {
            delete_taikhoan($_GET['customer_ID']);
          }
          $listtaikhoan = loadall_taikhoan();
          include "taikhoan/list.php";
          break;
          case 'addtk':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
              $name = $_POST['name'];
              $pass = $_POST['pass'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $phone = $_POST['phone'];
              $role = $_POST['role'];
  
  
              //function
              insert_taikhoan1($name,$pass, $email, $address, $phone, $role);
              $thongbao = "Thêm thành công";
            }
  
            include "taikhoan/add.php";
            break;
  

        case 'listbill':
          if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
          } else {
            $kyw = "";
          }

          $listbill = loadall_bill($kyw, 0);
          include "bill/listbill.php";
          break;


        case 'suabill':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $bill = loadone_bill($_GET['id']);
          }
          include "bill/update.php";
          break;


        case 'updatebill':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $bill_status = $_POST['bill_status'];
            $id = $_POST['id'];
            update_bill($id, $bill_status);
            $thongbao = "Cập nhật đơn hàng thành công";
          }
          if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
          } else {
            $kyw = "";
          }

          $listbill = loadall_bill($kyw, 0);
          include "bill/listbill.php";
          break;





         
        
        case 'thongke':
          $listthongke = loadall_thongke();
          include "thongke/list.php";
          break;
        case 'bieudo':
          $listthongke = loadall_thongke();
          include "thongke/bieudo.php";
          break;

        default:
          include "home.php";
          break;
      }
    } else {
      include "home.php";
    }



    //controller


    include "footer.php";
    ?><script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <script>
      var ctx1 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
      gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
      new Chart(ctx1, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#5e72e4",
            backgroundColor: gradientStroke1,
            borderWidth: 3,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#fbfbfb',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#ccc',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  </main>
</body>