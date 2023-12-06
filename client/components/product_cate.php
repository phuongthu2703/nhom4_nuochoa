<div class="container-fluid py-5">
     

<div class="row">

<div class="col-9" >

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h6 class="section-title position-relative text-center mb-5">SẢN PHẨM <strong><?=$tendm?></strong></h6>
                </div>
            </div>
            <div class="row">
  
 

           
   

    

            <?php
               foreach ($dssp as $sp){
                extract($sp);
                $linksp ="index.php?act=sanphamct&product_ID=".$product_ID;
                $image=$image_path.$image;
                
                echo'
                       
                            <div class="col-lg-3 col-md-6 mb-4 pb-2">
                         <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            
                             <a href="'.$linksp.'">
                             <div class="position-relative rounded mt-n3 mb-4 p-3" style="width: 200px; height: 200px;">
                                 <img class="rounded w-100 h-100" src="'.$image.'" style="object-fit: cover;">
                             </div>
                             </a>
                             <h5 class="font-weight-bold mb-4">'.$name.'</h5>
                             <h5 class="font-weight-bold text-primary mb-4">'.$price.'đ</h5>
                             <form action="index.php?act=addtocart" method="post">
                             <input type="hidden" name="product_ID" value="'.$product_ID.'">
                             <input type="hidden" name="name" value="'.$name.'">
                             <input type="hidden" name="image" value="'.$image.'">
                             <input type="hidden" name="price" value="'.$price.'">
                             <input type="submit" name="addtocart" class="btn btn-sm btn-secondary" value="Đặt hàng">
                             </form>
                         </div>
                     </div>';
               }
               


            ?>
           </div> 
          
        </div>
       
       
        <?php
    include 'category.php';
    ?>
     </div>
    </div>
  