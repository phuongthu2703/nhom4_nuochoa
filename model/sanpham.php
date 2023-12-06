<?php

function insert_sanpham($name,$image, $price, $description, $use_pro, $category_ID){
    $sql ="INSERT INTO products(name,image, price, description, use_pro, category_ID) values('$name', '$image','$price','$description','$use_pro','$category_ID')";
            pdo_execute($sql);
}

function delete_sanpham($product_ID){
    $sql = "DELETE FROM products WHERE product_ID=?";
    pdo_execute($sql, $product_ID); 
}
function loadall_sanpham($kyw, $category_ID){
    $sql="SELECT * FROM products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($category_ID>0){
        $sql.=" and category_ID = '".$category_ID."'";
    }
    
    $sql.=" order by product_ID desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql = "select * from products where 1 order by view desc limit 0,10";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham1(){
    $sql = "select * from products where 1 order by product_ID";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql = "select * from products where 1 order by product_ID desc limit 0,8";
    $listsanpham =pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($category_ID){
    if($category_ID>0){
    $sql = "SELECT * FROM categories WHERE category_ID=".$category_ID;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($product_ID){
    $sql = "SELECT * FROM products WHERE product_ID=".$product_ID;
    $sp=pdo_query_one($sql);
    

    return $sp;
}

function load_sanpham_cungloai($product_ID, $category_ID){
    $sql = "select * from products where category_ID=".$category_ID." AND  product_ID <> ".$product_ID;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function  update_sanpham($product_ID, $category_ID, $name, $image, $price,  $description){
    if($image!="")
    $sql ="UPDATE products SET category_ID ='".$category_ID."', name='".$name."', price='".$price."',description='".$description."',image='".$image."' WHERE product_ID=".$product_ID;
 else   
    $sql ="UPDATE products SET category_ID='".$category_ID."', name='".$name."',price='".$price."',description='".$description."' WHERE product_ID=".$product_ID;
    pdo_execute($sql);
}
function check_khoa_ngoai($category_ID){
    $sql=" Select * form products where category_ID =".$category_ID;
    $listsanpham=pdo_query($sql);
    return ($listsanpham);
} 

function get_image($product_ID){
    $sql = "select image from products where product_ID=?";
   $getimage = pdo_query_one($sql,$product_ID); 
    return $getimage['image'];  
}
?>