<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
   


    <!-- Header Start -->
    
    <!-- Header End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Tất cả sản phẩm</h1>
                </div>
            </div>
            <div class="row">
            <?php 
                        foreach ($spnew as $sp){
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
              
                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Xem Thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Footer Start -->
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>