<?php
function viewcart($del){
                    global $image_path;
                    $tong=0;
                    $i=0;
                    if($del==1){
                        $xoasp_th='<th>Thao tác</th>';
                      
                        $xoasp_td2='<td></td>';
                    }else{
                        $xoasp_th='';
                     
                        $xoasp_td2='';  
                    }
                    echo'<tr>
                    <th class="text-uppercase text-xxs">Hình</th>
                    <th class="text-uppercase text-xxs">Sản phẩm</th>
                    <th class="text-uppercase text-xxs">Đơn giá</th>
                    <th class="text-uppercase text-xxs">Số lượng</th>
                    <th class="text-uppercase text-xxs">Thành tiền</th>
                    '.$xoasp_th.'
                </tr>';
                        foreach($_SESSION['mycart'] as $cart){
                            $image=$image_path.$cart[2];
                            $ttien = $cart[3] * $cart[4];
                            $tong+=$ttien;
                            if($del==1){
                                
                                $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
                              
                            }else{
                              
                                $xoasp_td='';
                              
                            }
                           
                 echo ' 
                        <tr>
                            <td><img src="'.$image.'" alt="" height="80px" class="rounded"></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[3].'</td>
                            <td>'.$cart[4].'</td>
                            <td>'.$ttien.'</td>
                            '.$xoasp_td.'
                            
                        </tr>';
                            $i+=1;
                        }
                        echo'<tr>
                                <td colspan="4">Tổng đơn hàng</td>
                                <td>'.$tong.'</td>
                                '.$xoasp_td2.';
                        
                        
                        </tr>';
}
function bill_chi_tiet($listbill){
    global $image_path;
    $tong=0;
    $i=0;
    
    echo'<tr>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    
</tr>';
        foreach($listbill as $cart){
            $image=$image_path.$cart['image'];
         
            $tong+=$cart['thanhtien'];
            
           
 echo ' 
        <tr>
            <td><img src="'.$image.'" alt="" height="80px"></td>
            <td>'.$cart['name'].'</td>
            <td>'.$cart['price'].'</td>
            <td>'.$cart['soluong'].'</td>
            <td>'.$cart['thanhtien'].'</td>
            
            
        </tr>';
            $i+=1;
        }
        echo'<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
               
        
        
        </tr>';
}
function tongdonhang(){
  
    $tong=0;
    
    
        foreach($_SESSION['mycart'] as $cart){
           
            $ttien = $cart[3] * $cart[4];
            $tong+=$ttien;
        }
 
       return $tong;
}
function insert_bill($customer_ID ,$name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang){
    $sql ="INSERT INTO bill(customer_ID, bill_name,bill_email, bill_address, bill_tel,bill_pttt, ngaydathang, total) values('$customer_ID','$name', '$email','$address','$phone','$pttt','$ngaydathang','$tongdonhang')";
            return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($customer_ID, $product_ID, $image, $name, $price, $soluong, $thanhtien, $idbill){
    $sql ="INSERT INTO cart(customer_ID, product_ID, image, name, price, soluong, thanhtien, idbill) values('$customer_ID', '$product_ID', '$image', '$name','$price', '$soluong', '$thanhtien', '$idbill')";
           pdo_execute($sql);
}
function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id=".$id;
    $bill=pdo_query_one($sql);
     return $bill;
}
function update_bill($id,$bill_status){
    $sql ="UPDATE bill SET bill_status='".$bill_status."' WHERE id=".$id;
    pdo_execute($sql);
}


function loadall_cart($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
    $bill=pdo_query($sql);
    

    return $bill;
}
function loadall_cart_count($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
    $bill=pdo_query($sql);
    

    return sizeof($bill);
}
function loadall_bill($kyw="", $customer_ID=0){
    $sql = "SELECT * FROM bill WHERE 1";
    if($customer_ID>0) $sql.=" AND customer_ID=".$customer_ID;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    

    return $listbill;
}
function get_ttdh($n){
    switch($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;  
        case '3':
            $tt="Đang giao hàng";
            break;
        default:
            $tt="Đơn hàng mới";
            break;
        }
        return $tt;
}
function get_pttt($n){
    switch($n) {
        case '0':
            $tt="Trả tiền khi nhận hàng";
            break;
        case '1':
            $tt="Chuyển khoản ngân hàng";
            break;
        case '2':
            $tt="Thanh toán online";
            break;  
        default:
            $tt="Trả tiền khi nhận hàng";
            break;
        }
        return $tt;
}
function loadall_thongke(){
    $sql = "SELECT categories.category_ID as madm, categories.name as tendm, count(products.product_ID) as countsp, min(products.price) as minprice, max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql.=" FROM products left join categories on categories.category_ID = products.category_ID";
   
    $sql.=" group by categories.category_ID order by categories.category_ID desc";
    $listthongke=pdo_query($sql);
    

    return $listthongke;
}

function insert_contact($contact_name, $contact_email, $contact_address, $contact_tel, $content){
    $sql ="INSERT INTO contact(contact_name, contact_email, contact_address, contact_tel, content) values('$contact_name', '$contact_email', '$contact_address', '$contact_tel', '$content')";
            pdo_execute($sql);
}
function loadall_contact(){
    $sql="SELECT * FROM contact order by contact_ID desc";
    $listcontact=pdo_query($sql);
    return $listcontact;
}
function delete_contact($contact_ID){
    $sql = "DELETE FROM contact WHERE contact_ID=".$_GET['contact_ID'];
    pdo_execute($sql); 
}
?>