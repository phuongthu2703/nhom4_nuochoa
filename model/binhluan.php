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
    function delete_binhluan($comment_ID){
        $sql = "DELETE FROM comments WHERE comment_ID=".$_GET['comment_ID'];
        pdo_execute($sql); 
    }
?>
