<?php
    session_start();
    if(empty($_GET['id'])) {
        header('location:./index.php');
        exit;
    }
    $ID = $_GET['id'];
    require './admin/connect.php';
    $sql = "select * from product where ID = '$ID'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num == 0) {
        header('location:./index.php');
        exit;
    }else {
        $each = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $each['name'] ?></title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
</head>
<body>
    <div class="product">
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
                        <a href="./index.php" class="header__logo-name">TOTRINH</a>
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
                        <a href="./cart.html" class="header__cart-link">
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
        <!-- End header -->
        <div class="product__body">
            <!-- Phần đầu -->
            <div class="product__body-top">
                <!-- Ảnh minh họa -->
                <div class="product__body-top-left">
                    <img src="./admin/assets/img/<?php echo $each['photo'] ?>" alt="" class="product__body-top-img">
                </div>
                <!-- Thông tin máy -->
                <form action="pay-now.php" method="post" class="product__body-top-right">
                    <input type="hidden" name="ID" value="<?php echo $each['ID'] ?>" required>
                    <h3 class="product__body-top-name"><?php echo $each['name'] ?></h3>
                    <span class="product__body-top-price"><?php echo $each['price'] ?></span>
                    <div class="product__body-top-insurance">
                        <span class="product__body-top-insurance-l">Bảo Hiểm</span>
                        <div class="product__body-top-insurance-r insurance">
                            <span class="product__body-top-insurance-r--text">Bảo hiểm thiết bị di động</span>
                            <a href="" class="product__body-top-insurance-r--link">Tìm hiểu thêm</a>
                        </div>
                    </div>
                    <div class="product__body-top-insurance">
                        <span class="product__body-top-insurance-l">Vận Chuyển</span>
                        <div class="product__body-top-insurance-r">
                            <i class="product__body-top-insurance-r--icon ti-car"></i>
                            <span class="product__body-top-insurance-r--text">Xử lí đơn hàng bởi TOTRINH</span>
                        </div>
                    </div>
                    <div class="product__body-top-insurance">
                        <span class="product__body-top-insurance-l">Số Lượng</span>
                        <div class="product__body-top-insurance-r">
                            <!-- <a href="" class="product__body-top-insurance-r--quantity">-</a> -->
                            <input type="number" name="quantity" min="1" value="1" class="product__body-top-insurance-r--view" required>
                            <!-- <a href="./plus.php?id=" class="product__body-top-insurance-r--quantity">+</a> -->
                        </div>
                    </div>
                    <div class="product__body-top-btn">
                        <a class="product__body-top-btn-add">
                            <i class="product__body-top-btn-add--icon ti-shopping-cart"></i>
                            Thêm Vào Giỏ Hàng
                        </a>
                        <button class="product__body-top-btn-pay">
                            Mua Ngay
                        </button>
                    </div>
                    <div class="product__body-top-node">
                        <div class="product__body-top-node-return">
                            <i class="product__body-top-node--icon ti-share-alt"></i>
                            7 ngày miễn phí trả hàng
                            <div class="product__body-top-node-return-hidden">
                                Hoàn toàn yên tâm khi mua hàng ở TOTRINH với ưu đãi miễn phí trả hàng lên đến 7 ngày.
                            </div>
                        </div>
                        <div class="product__body-top-node-new">
                            <i class="product__body-top-node-new--icon fa-solid fa-car-side"></i>
                            Hàng chính hãng 100%
                            <div class="product__body-top-node-new-hidden">
                                Nhận lại gấp đôi số tiền mà bạn đã thanh toán cho sản phẩm không chính hãng từ TOTRINH
                            </div>
                        </div>
                        <div class="product__body-top-node-free">
                            <i class="product__body-top-node-free--icon fa-solid fa-car-side"></i>
                            Miễn phí vận chuyển
                            <div class="product__body-top-node-free-hidden">
                                Ưu đãi miễn phí vận chuyển lên tới 40,000 VNĐ cho đơn hàng của TOTRINH từ 150,000 VNĐ
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Phần mô tả -->
            <div class="product__body-desc">
                <div class="product__body-desc-top">MÔ TẢ SẢN PHẨM</div>
                <div class="product__body-desc-container">
                    <?php echo $each['review'] ?>
                </div>
            </div>
        </div>
        <!-- End body -->
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
</html>
<?php } ?>