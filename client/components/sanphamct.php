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
      
<div class="container mt-6>
<div class="row">

             <div class="card">
                <div class="container-fliud">
                    
                        <div class="wrapper row">
                            <div class="col-md-6">
                               
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="">
                                        
                                        <img src="'.$image.'" alt="" class="rounded" style="width: 500px;">
                                        
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-6">
                            <br>
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
                                <small class="text-muted">Giá giảm: <s><span>'.$price_old.'</span></s></small>
                                <h4 class="price">Giá hiện tại: <span>'.$price.'</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chính hãng</strong>, đảm bảo
                                    <strong>Chất
                                        lượng</strong>!</p>
                               
                               
                                <div class="form-group">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" class="form-control" id="soluong" name="soluong">
                                </div>
                                <div class="action">
                                <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="product_ID" value="'.$product_ID.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="image" value="'.$image.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" class="btn btn-sm btn-danger" value="Thêm vào giỏ hàng">
                                </form>
                                </div>
                            </div>

                        </div>
                    
                </div>
            </div>
            <div class="card">
                
                <div class="card-header">
                
                    <span class="text-uppercase text-primary text-xxs" >Chi tiết sản phẩm</span>
                 
                 
               
              </div>
              <div class="card-body">
                
                <p class="text-xxs">'.$description.'</p>
                
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

