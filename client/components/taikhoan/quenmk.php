<section class="shop_section layout_padding">

    <div class="row">
        <div class="col-9">
            <div class="container">
                <div class="card" style="width: 80rem;">
                    <h1 class="text-center"> QUÊN MẬT KHẨU</h1>
                    <div class="card-body">
                        <form action="index.php?act=quenmk" method="post">
                            <div class="">
                                Email
                                <input class="form-control" type="email" name="email">
                            </div>
                           
                            
                            <br>
                            <div class="text-center">

                                <input type="submit" name="guiemail" value="Gửi">
                                <input type="reset" value="Nhập lại">
                            </div>

                        </form>
                        <h2 class="'thongbao" style="color: red">
                       <?php
                       
                            if(isset($thongbao)&&($thongbao!= "")){
                                echo $thongbao;
                            }
                       ?>
                       </h2>
                    </div>
                    <br>
                </div>
            </div>


        </div>









       
    </div>


</section>