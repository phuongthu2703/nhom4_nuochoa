
<style>
  li{
    text-decoration: none; 
  }  
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-3">

 
        
      <form action="index.php?act=product_cate" method="post"class="d-flex">
        <input style="border:2px solid #f89cab;" type="search"  name="kyw" class="form-control" placeholder="Tìm Kiếm" />
        <button style=" background-color: palevioletred; color: antiquewhite; ;  border: none; border-radius: 4px; width: 5rem; " type="submit" name="timkiem" ><i class="fa fa-search"></i></button>
    </form>

      
      <div>
      <table class="table align-items-center mb-0"> 
      <tr>
                        <th>Thương Hiệu</th>
                        <th></th>
                        </tr>
      <?php
             foreach ($dsdm as $dm) {
             extract($dm);
                $linkdm = "index.php?act=product_cate&category_ID=" . $category_ID;
                $image=$image_path.$image;
           
          
          
                        echo '<tr>
                      
                        <td>
                      
                       
                        <label>'.$name.'</label>
                      
                      
                      </td> 
                      <td>   <a class="" href="'.$linkdm.'"><i class="fa fa-eye"></i>_Xem</a>
                      </td>
                     
                      </tr>
                     ';
                                 }
                        ?>
                         </table>

</div>
  <div class="">
    <div class="">
      <div class="text-center"><h4>Top 10 yêu thích</h4></div>
      <div>
        <?php
        foreach ($dstop10 as $sp) {
          extract($sp);
          $linksp = "index.php?act=sanphamct&product_ID=" . $product_ID;
          $image = $image_path . $image;
          echo '<div style="margin-top: 11px;">
         
      <img src="' . $image . '" class="rounded-circle border border-primary" alt="" style="width: 60px; height: 60px;" >
      <a href="' . $linksp . '" >' . $name . '</a>
  </div>';
        }
        ?>
      </div>
    </div>

  </div>
  

  
</div>




