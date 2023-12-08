<?php
    function insert_binhluan($content, $customer_ID, $product_ID, $date){
        $sql = "insert into comments (content, customer_ID, product_ID, date) values('$content','$customer_ID','$product_ID','$date')";
        pdo_execute($sql);
    }

    function loadall_binhluan($product_ID){
        $sql = "select * from comments where 1";
        if($product_ID>0) $sql.= " AND product_ID='".$product_ID."'";
        $sql.=" order by comment_ID desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }
    
    function delete_binhluan($comment_ID) {
        try {
           
            // Thực hiện truy vấn xóa bình luận
            $sql = "DELETE FROM comments WHERE comment_ID='" .$comment_ID."'";
           
            pdo_execute($sql);
    
            // Thông báo xóa thành công hoặc chuyển hướng đến trang khác
            echo 'Xóa bình luận thành công';
    
        } catch (Exception $e) {
            // Xử lý ngoại lệ
            echo 'Lỗi: ' . $e->getMessage();
        }
    }
  
    
function check_customer_comment_permission($comment_ID, $customer_ID) {
    // Thực hiện truy vấn để kiểm tra quyền hạn
    // Trong trường hợp này, giả sử bạn có một bảng hoặc hệ thống quyền hạn để xác định
    // nếu người dùng có quyền xóa bình luận với comment_ID và customer_ID cụ thể hay không.
    
    // Dưới đây là một ví dụ giả định:
    $allowedToDelete = false;

    // Thực hiện truy vấn hoặc kiểm tra quyền hạn
    // Ví dụ: Kiểm tra xem trong bảng comments có bản ghi nào có comment_ID và customer_ID tương ứng hay không.
    // Nếu có, người dùng có quyền xóa bình luận, nếu không, không có quyền.
    
    // Ví dụ giả định (thay thế bằng logic thực tế của bạn):
    $result = pdo_query_one("SELECT * FROM comments WHERE comment_ID = '$comment_ID' AND customer_ID = '$customer_ID'");
    
    if ($result) {
        $allowedToDelete = true;
    }

    return $allowedToDelete;
}


?>
