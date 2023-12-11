<style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/b2.jpg" alt="Image" style="height: 1100px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"></h4>
                            <h1 class="display-3 text-white mb-md-4">Bắt nguồn từ đam mê về mùi hương</h1>
                            <a href="index.php?act=gioithieu" class="btn btn-primary py-md-3 px-md-5 mt-2">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/pink.png" alt="Image" style="height: 1100px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"></h4>
                            <h1 class="display-3 text-white mb-md-4"></h1>
                            <a href="index.php?act=gioithieu" class="btn btn-primary py-md-3 px-md-5 mt-2">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
               
                    <h1 class="section-title position-relative text-center mb-5"><b class="m-0 display-4 text-primary"><span class="text-secondary">Candy</span>Cloud</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Giới thiệu</h4>
                    
                    <p><b class="text-primary"><span class="text-secondary">Candy</span>Cloud</b> là một tiệm nước hoa nho nhỏ bắt nguồn từ đam mê về mùi hương cũng như việc mong muốn chia sẻ với tất cả các bạn về sở thích của tụi mình, đồng thời tạo ra một nơi giúp mọi người dễ dàng sở hữu bất cứ chai nước hoa nào bạn muốn. và rồi cứ thế, với mục tiêu lan toả hương thơm và niềm đam mê mà CandyCloud lớn lên và được tin tưởng hơn mỗi ngày.</p>
                    <a href="index.php?act=gioithieu" class="btn btn-secondary mt-2">Xem thêm</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/b5.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Uy tín</h4>
                    <p>Luôn đặt chất lượng và lòng tin với khách hàng lên hàng đầu. Tụi mình sẽ không cam kết bán giá rẻ nhất và cạnh tranh với các bên khác mà chỉ cam kết sẽ bán giá tốt nhất chúng mình có thể.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Sản phẩm chính hãng 100%</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Giá cả hợp lý</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Đưa ra lời khuyên thực tế</h5>
                    <a href="index.php?act=gioithieu" class="btn btn-primary mt-2">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-white m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                   <a><img class="position-absolute w-100 h-100" src="img/jisoo.jpg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
            <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
            <?php
      if (isset($_SESSION['name'])) {
        extract($_SESSION['name']);
         $image=$image_path.$image;
         $linksp ="index.php?act=taikhoanct&customer_ID=".$customer_ID;
echo'
          
<div class="team-item">
<a href="'.$linksp.'">  
<div class="team-img mx-auto">
                     <img src="'.$image.'" class="rounded-circle w-100 h-100" style="style="object-fit: cover;">
                    </div></a>
                    <a href="'.$linksp.'">
                    <h3 class="font-weight-bold text-primary mt-3 mb-4">'.$name.'</h3>
                    </a>
                    <div class="list-group">

         
      
          
         
           
          <?php if($role==1){ ?>
         
            <a href="../admin/dangnhap.php" class="list-group-item list-group-item-action list-group-item-secondary">Đăng nhập Admin</a>
         
            <?php } ?>
          
            
            <a href="index.php?act=thoat"><i style="margin-right: 6px;" class="fa fa-sign-out"></i>Đăng xuất</a>
         
          </div>
                  
                </div> </div>  '   ;         
        ?>
        
                <?php
      } else {
        ?>
        <form action="index.php?act=dangnhap" method="post">
          <div class="form-group row">
            <label>Tên đăng nhập</label>
            <input class="form-control" type="text" name="name" required>
          </div>

          <div class="form-group row">
            <label>Mật khẩu</label>

            <input class="form-control" type="password" name="pass" required>
          </div>
          <div class="form-check">


            <input class="form-check-input" type="checkbox" value="" id="" name="">
            <label class="form-check-label">
              Ghi nhớ tài khoản?
            </label>
          </div>
          <div class="form-group row">
            <input class="form-control" type="submit" value="Đăng nhập" name="dangnhap">
          </div>
        </form>
        <li>
          <a href="#">Quên mật khẩu</a>
        </li>
        <li>
          <a href="index.php?act=dangky">Đăng ký thành viên</a>
        </li>
      <?php } ?>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Thương hiệu</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                    <?php
             foreach ($dsdm as $dm) {
             extract($dm);
                $linkdm = "index.php?act=product_cate&category_ID=" . $category_ID;
                $image=$image_path.$image;
           
          
          
                        echo '<div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="'.$image.'" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">'.$name.'</h5>
                               
                                <a href="'.$linkdm.'" class="border-bottom border-secondary text-decoration-none text-secondary">Xem sản phẩm</a>
                            </div>
                        </div>';
                                 }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Người nổi tiếng ưa chuộng</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/irene.jpg" alt="">
                    <a class="portfolio-btn" href="img/irene.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/miyeon.jpg" alt="">
                    <a class="portfolio-btn" href="img/miyeon.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/sakura.jpg" alt="">
                    <a class="portfolio-btn" href="img/sakura.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/wonyoung.jpg" alt="">
                    <a class="portfolio-btn" href="img/wonyoung.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/lisa.jpg" alt="">
                    <a class="portfolio-btn" href="img/lisa.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/sullyoon.jpg" alt="">
                    <a class="portfolio-btn" href="img/sullyoon.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Sản phẩm mới nhất</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <!-- <div class="col-12">
                    <div class="owl-carousel product-carousel"> -->
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
                        <!-- <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-2.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-4.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-5.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Team</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                       <?php 
                        foreach ($dstk as $tk){
                            extract($tk);
                            $linksp ="index.php?act=taikhoanct&customer_ID=".$customer_ID;
                            $image=$image_path.$image;
                       echo '<div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="'.$image.'" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">'.$name.'</h3>
                                <h6 class="text-uppercase text-muted mb-4">'.$address.'</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="'.$linksp.'"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>';}?>
                        <!-- <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Hiền</h3>
                                <h6 class="text-uppercase text-muted mb-4">Thành viên</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Mina</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Coca</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    




</div>
    <!-- Testimonial End -->


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