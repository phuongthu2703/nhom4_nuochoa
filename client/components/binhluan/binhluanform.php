<?php
session_start();

include  "../../../model/pdo.php";
include "../../../model/binhluan.php";




$product_ID = $_REQUEST['product_ID'];

$dsbl = loadall_binhluan($product_ID);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-header"><h5>BÌNH LUẬN</h5> </div>
        <div class="">
            <table class="table table-striped table-bordered">
            <tr>
                   
                    
                    <th>ID Khách hàng</th>
                    <th>Nội dung</th>
                    <th>Ngày</th>
                    
                    
                </tr>
                <?php
// <td>' . $iduser . '</td>;
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr>
                    <td>'.$customer_ID.'</td>
                    <td>' . $content . '</td>;
                    
                    <td>' . $date . '</td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div class="">

            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="product_ID" value="<?=$product_ID?>">

                <input type="text" name="content" style="background-color:white;  width: 70%; height: 40px;  border-radius: 5px;" >
                <input type="submit" style="background-color:lightcoral; color: beige; border: none;  width: 20%; height: 40px; border-radius: 5px;" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>

        <?php 
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $content=$_POST['content'];
            $product_ID=$_POST['product_ID'];
            $customer_ID = $_SESSION['name']['customer_ID'];
            $date=date('h:i:sa d/m/Y');
            insert_binhluan($content, $customer_ID, $product_ID, $date);
            header("Location:". $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>

</html>