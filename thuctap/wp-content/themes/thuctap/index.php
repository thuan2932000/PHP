<!DOCTYPE html>
<html>
    <head>
        <title>Trang Chủ </title>
        <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/trangchu.css">
    </head>
    <body>
        <div class="container">
            <a href="#"><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/Little & Little Logo (ngang) 1.png" alt="logo"></a>
                    <ul class="main">
                        <li><a href="trangchu.php">Trang Chủ</a></li>
                        <li><a href="sukien.php">Sự Kiện</a></li>
                        <li><a href="lienhe.php">Liên Hệ</a></li>
                        <li><a href="thanhtoan.php"><i class="fas fa-phone-alt"> 0123456789</i></a></li>
                    </ul>
                <div class="background">
                    <a href="#"><img class="logo1" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/1.png" alt="logo1"></a>
                    <br>
                    <h1> ĐẦM SEN <br>
                        PARK </h1>
                    <a href="#"><img class="logo5" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/5.png" alt="logo5"></a>
                    <a href="#"><img class="logo2" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/2.png" alt="logo2"></a>
                    <a href="#"><img class="logo6" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/6.png" alt="logo6"></a>    
                    <a href="#"><img class="logo8" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/8.png" alt="logo8"></a> 
                    <a href="#"><img class="logo3" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/3.png" alt="logo3"></a>
                    <a href="#"><img class="logo7" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/7.png" alt="logo7"></a> 
                    <a href="#"><img class="logo4" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/4.png" alt="logo4"></a> 
                    <a href="#"><img class="logo9" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/trangchu/9.png" alt="logo9"></a>     
                    <div class="khung">
                        <div class="block-1" style="width: 60%;height:420px;float: left;" >
                            <div class="block-1-1">
                               <div class="text">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                                    </p>
                                    <p>
                                        Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.
                                    </p>
                                </div>
                                <div class="text-news">
                                <ul>
                                    <p><i class="fas fa-star"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p><i class="fas fa-star"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p><i class="fas fa-star"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <p><i class="fas fa-star"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-2" style="width: 40%; height:420px; float: left;">
                    <div class="block-2-1"> 
                    <div class="ticket">
                        <div class="ticket-1">
                            <p class="text-ticket">VÉ CỦA BẠN</p> 
                        </div>
                    </div>
                    <div>
                        <form action="index_submit" method="get" accept-charset="utf-8">
                            <select >
                                <option value="goigiadinh">Gói gia đình</option>
                                <option value="goithieunhi">Gói Thiếu Nhi</option>
                                <option value="goibinhthuong">Gói Bình Thường</option>
                            </select>
                            <div class="input-signup">
                            <input class="soluongve" type="text" placeholder="Số lượng vé">
                            <input class="ngaysudung" type="text" placeholder="Ngày sử dụng">
                            <!-- <input class="btn" type="date"  > -->

                        </div>
                        <div >
                            <input class="thongtin" type="text" name="hoten" placeholder="Họ và tên">
                        </div>
                        <div>
                            <input class="thongtin" type="text" name="number-phone" placeholder="Số điện thoại">
                        </div>
                        <div>
                            <input class="thongtin" type="text" name="mail" placeholder="Địa chỉ email">
                        </div>
                        <div>
                            <input class="datve" type="submit" name="submit" value="Đặt vé">
                        </div>
                    </form>
                </div>
                </div> 
                </div> 
                </div> 
        </div>
    </body>
</html>