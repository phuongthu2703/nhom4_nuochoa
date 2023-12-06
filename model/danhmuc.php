<?php

function insert_danhmuc($name){
    $sql ="INSERT INTO categories(name) values('$name')";
            pdo_execute($sql);
}
function delete_danhmuc($name){
    $sql = "DELETE FROM categories WHERE category_ID=".$_GET['category_ID'];
    pdo_execute($sql); 
}
function loadall_danhmuc(){
    $sql="SELECT * FROM categories order by category_ID desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}




function loadone_danhmuc($category_ID){
    $sql = "SELECT * FROM categories WHERE category_ID=".$category_ID;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($category_ID,$name){
    $sql ="UPDATE categories SET name='".$name."' WHERE category_ID=".$category_ID;
    pdo_execute($sql);
}
?>