<?php
function insert_taikhoan($email,$name,$pass){
    $sql="insert into customers(email,name,pass) values('$email','$name','$pass')";
    pdo_execute($sql);
}
function checkuser($name,$pass){
    $sql="select * from customers where name = '".$name."' AND pass = '".$pass."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function checkemail($email){
    $sql="select * from customers where email = '".$email."' ";
    $sp=pdo_query_one($sql);
    return $sp;

}
function update_taikhoan($customer_ID, $name, $pass, $email, $address, $phone){
     
    $sql ="UPDATE customers SET name = '".$name."',  pass='".$pass."', email='".$email."',address='".$address."',phone='".$phone."' WHERE customer_ID=".$customer_ID;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="SELECT * FROM customers order by customer_ID desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadall_taikhoan_admin(){
    $sql="SELECT * FROM customers WHERE role = 1";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($customer_ID){
    $sql = "SELECT * FROM customers WHERE customer_ID=".$customer_ID;
    $tk=pdo_query_one($sql);
    

    return $tk;
}
function delete_taikhoan($customer_ID){
    $sql = "DELETE FROM customers WHERE customer_ID=".$_GET['customer_ID'];
    pdo_execute($sql); 
}


?>