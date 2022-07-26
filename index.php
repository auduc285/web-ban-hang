<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Trinh</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
</head>
<body>
    <div class="app">
        <!-- Begin header -->
        <div class="header">
            <div class="grid">
                <!-- Begin navbar -->
                <nav class="header__navbar">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--sepalate header__nav-qr">
                            Vào cửa hàng trên ứng dụng
                            <!-- Begin QR code -->
                            <div class="header__qr">
                                <img src="./assets/img/qr_code.png" alt="QR Code" class="header__qr-img">
                                <div class="header__qr-app">
                                    <a href="" class="header__qr-download-link-left">
                                        <img src="./assets/img/appstore.png" alt="" class="header__qr-download">
                                    </a>
                                    <a href="" class="header__qr-download-link-right">
                                        <img src="./assets/img/ggplay.png" alt="" class="header__qr-download">
                                    </a>
                                </div>
                            </div>
                            <!-- End QR code -->
                        </li>
                        <li class="header__nav-item">
                            <span class="header__nav--title">Kết nối</span>
                            <a href="https://www.facebook.com/totrinh.nguyen.9212" class="header__nav-icon">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="" class="header__nav-icon">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__nav-item header__nav--viewed-notify">
                            <a href="" class="header__nav-item-link">
                                <i class="header__nav-icon fa-solid fa-bell"></i>
                                Thông báo
                            </a>
                            <!-- Begin notify -->
                            <div class="header__notify header__header-noti">
                                <div class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </div>
                                <ul class="header__notify-list">
                                <?php
                                    if(isset($_SESSION['ID'])) {
                                        include './admin/connect.php';
                                        $sql = "select * from bell";
                                        $result = mysqli_query($connect, $sql);
                                ?>
                                    <?php foreach($result as $each): ?>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./admin/assets/img/<?php echo $each['photo'] ?>" alt="" class="header__notify-img">
                                            <div class="header__notify-body">
                                                <span class="header__notify-name"><?php echo $each['content'] ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach ?>
                                    <?php }else { ?>
                                    <li class="header__notify-item" style="color:black">
                                        Đăng nhập để xem thông báo.
                                    </li>
                                <?php } ?>
                                </ul>
                                <div class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </div>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="" class="header__nav-item-link">
                                <i class="header__nav-icon fa-solid fa-circle-question"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <?php if(isset($_SESSION['ID'])) { ?>
                        <li class="header__nav-item">
                            <a href="./myinfo.php" class="header__nav-item-link header__nav-item--bold header__nav-item--sepalate"><?php echo $_SESSION['name'] ?></a>
                        </li>
                        <?php }else { ?>
                        <li class="header__nav-item">
                            <a href="./register.php" class="header__nav-item-link header__nav-item--bold header__nav-item--sepalate">Đăng ký</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="./login.php" class="header__nav-item-link header__nav-item--bold">Đăng nhập</a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End navbar -->

                <!-- Begin Search -->
                <div class="header-with__search">
                    <!-- Begin Logo -->
                    <div class="header__logo">
                        <a href="index.php" class="header__logo-name">TOTRINH</a>
                    </div>
                    <!-- End logo -->

                    <!-- Begin Search input -->
                    <div class="header__search">
                        <form action="" class="header__search-form">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm">
                            <button class="header__search-btn btn btn--primary">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End search input -->

                    <!-- Begin cart -->
                    <div class="header__cart">
                        <a href="./cart.php" class="header__cart-link">
                            <i class="header__cart-link-icon ti-shopping-cart"></i>
                        </a>
                        <div class="header__cart-title">
                            <p class="header__cart-title-text">Giỏ hàng trống</p>
                        </div>
                    </div>
                    <!-- End cart -->
                </div>
                <!-- End Search-->
            </div>
        </div>
        <div class="container">
            <div class="gri">
                <!-- Begin slider -->
                <section id="container__slider">
                    <!-- Begin img -->
                    <?php
                        require './admin/connect.php';
                        $sql = "select * from slide";
                        $result = mysqli_query($connect, $sql);
                        $i = mysqli_num_rows($result);
                    ?>
                    <div class="container__slider-items">
                        <?php foreach($result as $each): ?>
                        <img src="./admin/assets/img/<?php echo $each['photo'] ?>" class="container__slider-img">
                        <?php endforeach ?>
                    </div>
                    <!-- End img -->
                    <!-- Begin button -->
                    <div class="container__slider-btns">
                        <div class="container__slider-btn container__slider-btn--now"></div>
                        <?php
                            for($d = 1; $d < $i; $d++) {
                        ?>
                        <div class="container__slider-btn"></div>
                        <?php } ?>
                    </div>
                    <!-- End button -->
                </section>
                <!-- End slider -->

                <!-- Begin product -->
                <div class="container__product">
                    <!-- Begin product header -->
                    <div class="container__product-header">
                        <h3 class="container__product-header-text">Sắp xếp theo</h3>
                        <a href="#" class="container__producut-header-link">
                            <div class="container__product-header-btn">Phổ biến</div>
                        </a>
                        <a href="" class="container__producut-header-link">
                            <div class="container__product-header-btn container__product-header-btn--now">Mới nhất</div>
                        </a>
                        <a href="" class="container__producut-header-link">
                            <div class="container__product-header-btn">Bán chạy</div>
                        </a>
                        <div class="container__product-header-price">
                            <div class="container__product-header-price-text">Giá</div>
                            <i class="container__product-header-price-icon fa-solid fa-angle-down"></i>
                            <ul class="container__product-header-price-list">
                                <li class="container__product-header-price-items">Giá: Thấp đến cao</li>
                                <li class="container__product-header-price-items">Giá: Cao đến thấp</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End product header -->
                    <!-- Begin product list -->
                    <div class="container__product-list">
                        <?php
                            require './admin/connect.php';
                            $sql = "select * from product";
                            $result = mysqli_query($connect, $sql);
                        ?>
                        <?php foreach($result as $each): ?>
                        <div class="container__product-items col col-six col-full">
                            <a href="./product.php?id=<?php echo $each['ID'] ?>" class="container__product-link">
                                <div class="container__product-item">
                                    <img src="./admin/assets/img/<?php echo $each['photo'] ?>" alt="" class="container-body-img">
                                </div>
                                <div class="container__product-body">
                                    <span class="container__product-body-name"><?php echo $each['name'] ?></span>
                                    <span class="container__product-body-price"><?php echo $each['price'] ?></span>
                                    <span class="container__product-body-text">Đã bán 15,5k</span>
                                </div>
                            </a>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- End product list -->
                    <!-- Begin product footer -->
                    <div class="container__product-footer">
                        <button class="container__product-footer-text">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="container__product-footer-text container__product-footer-text--number container__product-footer--now">1</button>
                        <button class="container__product-footer-text container__product-footer-text--number">2</button>
                        <button class="container__product-footer-text container__product-footer-text--number">3</button>
                        <button class="container__product-footer-text">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                    <!-- End product footer -->
                </div>
            </div>
        </div>
        <!-- Begin footer -->
        <div class="footer">
            <!-- Begin footer nav -->
            <ul class="footer__nav">
                <li class="footer__nav-item footer__nav-item--fake">
                    <a href="" class="footer__nav-link">
                        CHÍNH SÁCH BẢO MẬT
                    </a>
                </li>
                <li class="footer__nav-item footer__nav-item--fake">
                    <a href="" class="footer__nav-link">
                        QUY CHẾ HOẠT ĐỘNG
                    </a>
                </li>
                <li class="footer__nav-item">
                    <a href="" class="footer__nav-link footer__nav-item--fake">
                        CHÍNH SÁCH VẬN CHUYỂN
                    </a>
                </li>
                <li class="footer__nav-item">
                    <a href="" class="footer__nav-link">
                            CHÍNH SÁCH TRẢ HÀNG VÀ HOÀN TIỀN
                    </a>
                </li>
            </ul>
            <!-- End footer nav -->
            <!-- Begin footer check -->
            <ul class="footer__check">
                <li class="footer__check-item">
                    <a href="" class="footer__check-link">
                        <img src="./assets/img/img-congthuong.png" alt="" class="footer__check-img">
                    </a>
                </li>
                <li class="footer__check-item">
                    <a href="" class="footer__check-link">
                        <img src="./assets/img/dmca_protected_16_120.png" alt="" class="footer__check-img png">
                    </a>
                </li>
            </ul>
            <!-- End footer check -->
            <span class="footer_text">
                Công ty TNHH Tố Trinh
            </span>
            <div class="footer__address">
                <span class="footer__adress-home">
                    Địa chỉ: xóm Tân Phú, xã Tân Phú, Huyện Tân Kỳ, Tỉnh Nghệ An, Việt Nam.
                </span>
                <span class="footer__adress-copyright">
                    © 2015 - Bản quyền thuộc về Công ty TNHH Tố Trinh
                </span>
            </div>
        </div>
    </div>
</body>
<script>
    const imgPosition = document.querySelectorAll(".container__slider-img")
    const imgContainer = document.querySelector('.container__slider-items')
    const dotItem = document.querySelectorAll(".container__slider-btn")
    let imgNuber = imgPosition.length
    let index = 0;
    imgPosition.forEach(function(image,index){
        image.style.left = index * 100 + "%"
        dotItem[index].addEventListener("click", function(){
        slider(index)
        })
    })
    function imgSlide() {
        index++;
        if(index >= imgNuber){index = 0}
        slider(index)
    }
    function slider(index){
        imgContainer.style.left = "-" +index*100+ "%"
        const dotActive = document.querySelector('.container__slider-btn--now')
        dotActive.classList.remove("container__slider-btn--now")
        dotItem[index].classList.add("container__slider-btn--now") //Chuyển button slide
    }
    setInterval(imgSlide, 5000);

</script>
</html>