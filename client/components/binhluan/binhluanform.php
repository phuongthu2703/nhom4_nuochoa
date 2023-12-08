<?php
session_start();

include "../../../model/pdo.php";
include "../../../model/binhluan.php";

$product_ID = $_REQUEST['product_ID'];
$dsbl = loadall_binhluan($product_ID);

if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    try {
        $content = htmlspecialchars($_POST['content']);
        $product_ID = $_POST['product_ID'];
        $customer_ID = $_SESSION['name']['customer_ID'];
        $date = date('h:i:sa d/m/Y');
        insert_binhluan($content, $customer_ID, $product_ID, $date);
        header("Location:" . $_SERVER['HTTP_REFERER']);
        exit();
    } catch (Exception $e) {
        // Xử lý lỗi (nếu có)
    }
}

if (isset($_POST['delete_binhluan']) && $_POST['delete_binhluan']) {
    $comment_ID = $_POST['delete_binhluan'];
    $customer_ID = $_SESSION['name']['customer_ID'];
    
    // Kiểm tra xem người dùng có quyền xóa bình luận hay không
    $isAllowedToDelete = check_customer_comment_permission($comment_ID, $customer_ID);

    if ($isAllowedToDelete) {
        // Xóa bình luận
        delete_binhluan($comment_ID);
        header("Location:" . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        // Người dùng không có quyền xóa bình luận
        // Xử lý thông báo hoặc chuyển hướng đến trang khác
    }
}
?>

<!-- HTML -->
<div class="container mt-6">
<div class="row">
        <div class="col-12">
          <div class="card mt-4">
            
          <div class="card-header">
                
                <span class="text-uppercase text-primary text-xxs">Bình luận</span>
             
             
           
          </div>
          
            <div class="card-body pt-4 p-3">
              
<?php foreach ($dsbl as $bl) : ?>
    
    <!-- Hiển thị thông tin bình luận -->
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="product_ID" value="<?= $product_ID ?>">
        <ul class="list-group">
            <!-- Hiển thị nội dung bình luận -->
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="col-8">
                    <h6 class="mb-3 text-sm">Thứ tự: <?= $bl['comment_ID'] ?></h6>
                    <span class="mb-2 text-xs">ID khách hàng:  <span class="text-primary font-weight-bold ms-sm-2"><?= $bl['customer_ID'] ?></span></span> <br>
                    <span class="mb-2 text-xs"><span class="text-primary="><?= $bl['content'] ?></span></span> <br>
                    <span class="text-xs"><span class="text-primary"><?= $bl['date'] ?></span></span>
                </div>
                <div class="col-3">
                    <!-- Kiểm tra xem người dùng có quyền xóa bình luận hay không -->
                    <?php if ($bl['customer_ID'] == $_SESSION['name']['customer_ID']) : ?>
                       <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" name="delete_binhluan" value="<?= $bl['comment_ID'] ?>">
                       <b><i class="far fa-trash-alt me-2"></i> Delete</b> 
                        </button>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </form>
   
<?php endforeach; ?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="product_ID" value="<?=$product_ID?>">

                <input type="text" name="content" style="background-color:white;  width: 70%; height: 40px;  border-radius: 5px;" >
                <input type="submit" style="background-color:lightcoral; color: beige; border: none;  width: 20%; height: 40px; border-radius: 5px;" name="guibinhluan" value="Gửi bình luận">
            </form>
            
        </div>
            </div>
            </div>
            </div>
            