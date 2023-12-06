<style>
  
  .danhgia{
    font-size: 26px;
  }
  .quality{
    width: 50px;
    height: 40px;
    border: 5px dotted #F195B2;
    border-radius: 5px;
    
  }
  .quality:hover{
    color: #FFFFFF;
    background-color: #F195B2;
  }
</style>
<?php 

extract($onesp);
echo '<div class="container-fluid" >
<div class="" style="margin-bottom: 60px; margin-left: 50px;">
        <div class="">
            <div class="text-primary display-3 mt-lg-5"></div>
            <ul class="nav nav-tabs card-header-tabs">
         <li class="nav-item">
           <a class="nav-link" aria-current="true" href="index.php">Trang chủ</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php?act=sanphamall">Sản phẩm</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" href="#">'.$name.'</a>
         </li>
       </ul>
        </div>
    </div>';
    
    

?>   
<?php
      
           $image=$image_path.$image;
          
          
         

echo '

<main>
      
        <div class="container mt-4">
             <div class="card">
                <div class="container-fliud">
                    
                        <div class="wrapper row">
                            <div class="col-md-7">
                               
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="">
                                        
                                        <img src="'.$image.'" alt="" class="rounded" style="width: 600px;">
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <h3 class="text-uppercase text-primary">'.$name.'</h3>
                                <div class="text-danger">
                                    <div class="stars">
                                    <i class="bi bi-star-fill" style="margin-right: 5px;" ></i>
                                    <i class="bi bi-star-fill" style="margin-right: 5px;" ></i>
                                    <i class="bi bi-star-fill" style="margin-right: 5px;" ></i>
                                    <i class="bi bi-star-fill" style="margin-right: 5px;" ></i>
                                    <i class="bi bi-star-fill" style="margin-right: 5px;" ></i>
                                    </div>
                                    <span class="review-no">'.$view.' view</span>
                                </div>
                                <p class="product-description">'.$description.'</p>
                                <small class="text-muted">Giá cũ: <s><span>'.$price_old.'</span></s></small>
                                <h4 class="price">Giá hiện tại: <span>'.$price.'</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chính hãng</strong>, đảm bảo
                                    <strong>Chất
                                        lượng</strong>!</p>
                               
                               
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong">
                                </div>
                                <div class="action">
                                <button class="btn btn-danger"><i class="fas fa-cart-plus" style="margin-right: 5px;"></i>Thêm vào giỏ hàng</button>
                                    <button class="btn btn-primary" href="#"><span class="fa fa-heart"></span></button>
                                </div>
                            </div>

                        </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                <div class="card-header">
                
                    <span class="text-uppercase text-primary text-xxs font-weight-bolder" href="#">Chi tiết sản phẩm</span>
                 
                 
               
              </div>
              <div class="card-body">
                
                <p class="text-xxs font-weight-bolder">'.$description.'</p>
                
              </div>
                <div class="card-header">
               
               
                    <p class="text-uppercase text-primary text-xxs font-weight-bolder" href="#">Hướng dẫn sử dụng</p>
                 
                 
               
              </div>
              <div class="card-body">
             
                <p class="=text-xxs font-weight-bolder">'.$use_pro.'</p>
                
              </div>
                </div>
            </div>
        </div>
        <!-- End block content -->
    </main>


  
  ';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  
    $("#binhluan").load("components/binhluan/binhluanform.php", {product_ID: <?=$product_ID?>});
  });
;
</script>

 
       <br><br>    
        
   
    <div id="binhluan">
        
    </div>

</div>

