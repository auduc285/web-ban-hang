<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        if(empty($_POST['ID']) || empty($_POST['quantity'])) {
            header('location:./index.php');
            exit;
        }
        $ID = $_POST['ID'];
        $quantity = $_POST['quantity'];
        require './admin/connect.php';
        $sql = "select * from product where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num != 1) {
            header('location:./index.php');
            exit;
        }
        $each = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div class="pay">
        <!-- Begin cart header -->
        <div class="cart-header">
            <!-- Bengin cart header top -->
            <div class="cart-header-top">
                <ul class="cart-header-list">
                    <li class="cart-header-item cart-header-item--app">
                        Tải ứng dụng
                        <!-- Begin QR Code -->
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
                        <!-- End QR Code -->
                    </li>
                    <li class="cart-header-item">
                        Kết nối
                        <a href="" class="cart-header-item-link">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="cart-header-item-link">
                            <i class="fa-brands fa-instagram-square"></i>
                        </a>
                    </li>
                </ul>
                <ul class="cart-header-list">
                    <li class="cart-header-item cart-header-item--bell">
                        <a href="" class="cart-header-item-link">
                            <i class="cart-header-item-icon fa-solid fa-bell"></i>
                            Thông báo
                            <div class="header__notify header__header-noti">
                                <div class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </div>
                                <?php
                                    $sql = "select * from bell";
                                    $result = mysqli_query($connect, $sql);
                                ?>
                                <ul class="header__notify-list">
                                    <?php foreach($result as $each1): ?>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./admin/assets/img/<?php echo $each1['photo'] ?>" alt="" class="header__notify-img">
                                            <div class="header__notify-body">
                                                <span class="header__notify-name"><?php echo $each1['content'] ?></span>
                                                <!-- <span class="header__notify-desc">
                                                    Dây cuốn sạc, miếng dán trắng
                                                </span> -->
                                            </div>
                                        </a>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                                <div class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="cart-header-item">
                        <a href="" class="cart-header-item-link">
                            <i class="cart-header-item-icon fa-solid fa-user"></i>
                            <?php echo $_SESSION['name'] ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End cart header top -->
            <!-- Begin cart header body -->
            <div class="cart__header-body">
                <div class="cart__header-body-logo">
                    <a href="./index.php" class="cart__header-body-link">
                        TOTRINH
                    </a>
                </div>
                <div class="cart__header-body-text">
                    Thanh Toán
                </div>
            </div>
            <!-- End cart header body -->
        </div>
        <form action="process_bill.php" method="post" class="pay__body" enctype="multipart/form-data">
            <!-- Begin pay body adress -->
            <div class="pay__body-adress">
                <!-- Begin pay body adress top -->
                <div class="pay__body-adress-top">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="pay__body-adress-top-text">Địa Chỉ Nhận Hàng</span>
                </div>
                <!-- End pay body adress top -->
                <!-- Begin pay body adress container -->
                <div class="pay__body-adress-container">
                    <div class="pay__body-adress-info">
                        <input type="text" name="name_in" class="pay__body-adress-name" placeholder="Họ Và Tên Người Nhận" required>
                        <input type="number" name="phone_in" class="pay__body-adress-name" placeholder="Số Điện Thoại Người Nhận" required>
                    </div>
                    <div class="pay__body-adress-home">
                        <textarea class="pay__body-adress-yourhome" name="adress_in" id="" cols="100%" rows="3" placeholder="Số nhà, xóm, phường, quận, thành phố" required></textarea>
                    </div>
                </div>
                <!-- Begin pay body adress container -->
            </div>
            <!-- End pay body adress -->
            <!-- Begin pay body list -->
            <div class="pay__body-list">
                <div class="pay__body-items">
                    <div class="pay__body-items-product pay__body-items--fist">Sản Phẩm</div>
                    <div class="pay__body-items-info pay__body-items--sec">Đơn Giá</div>
                    <div class="pay__body-items-info pay__body-items--sec">Số Lượng</div>
                    <div class="pay__body-items-info pay__body-items--sec">Thành Tiền</div>
                </div>
                <div class="pay__body-items">
                    <div class="pay__body-items-product pay__body-items--fist pay__body-items--con">
                        <img src="./admin/assets/img/<?php echo $each['photo'] ?>" alt="" class="pay__body-items-img">
                        <span class="pay__body-items-name"><?php echo $each['name'] ?></span>
                    </div>
                    <input type="hidden" name="name" value="<?php echo $each['name'] ?>[<?php echo $quantity ?>]" required>
                    <div class="pay__body-items-info pay__body-items--sec"><?php echo $each['price'] ?></div>
                    <div class="pay__body-items-info pay__body-items--sec"><?php echo $quantity ?></div>
                    <div class="pay__body-items-info pay__body-items--sec"><?php echo $each['price']*$quantity ?></div>
                </div>
            </div>
            <!-- End pay body list -->
            <!-- Begin Pay body end -->
            <div class="pay__body-end">
                <div class="pay__body-end-title">
                    <div class="pay__body-end-text">Phương thức thanh toán</div>
                    <div class="pay__body-end-btn btn-bank">Chuyển khoản</div>
                    <div class="pay__body-end-btn btn-home">Thanh toán khi nhận hàng</div>
                </div>
                <div class="pay__body-end-bank">
                    <div class="pay__body-end-bank-info">
                        <span class="pay__body-bank-name">Ngân Hàng: MB Bank</span>
                        <span class="pay__body-bank-name">Số Tài Khoản: 0379521705</span>
                        <span class="pay__body-bank-name">Họ Và Tên: AU QUANG DUC</span>
                    </div>
                    <div class="pay__body-end-bank-img">
                        <span class="pay__body-bank-title">Sau khi chuyển khoản bạn vui lòng chụp màn hình rồi up ảnh lên tại đây, nếu không có file ảnh thì hệ thống sẽ tự động chọn phương thức thanh toán khi nhận hàng</span>
                        <input type="file" name="file_pay" class="pay__body-bank-img">
                    </div>
                </div>
                <div class="pay__body-end-adress">
                    <span class="pay__body-end-adress-title">
                        Thanh toán khi nhận hàng
                    </span>
                    <span class="pay__body-end-adress-title">
                        Phí thu hộ: 0 VNĐ. Ưu đãi về phí vận chuyển (nếu có) áp dụng cả với phí thu hộ.
                    </span>
                </div>
                <div class="pay__body-end-info">
                    <div class="pay__body-end-item">
                        <span class="pay__body-end-item-name">Tổng tiền hàng</span>
                        <span class="pay__body-end-item-name">Phí bảo hiểm</span>
                        <span class="pay__body-end-item-name">Phí vận chuyển</span>
                        <span class="pay__body-end-item-name">Tổng thanh toán:</span>
                    </div>
                    <div class="pay__body-end-item">
                        <span class="pay__body-end-item-name"><?php echo $each['price']*$quantity ?></span>
                        <span class="pay__body-end-item-name">1.000</span>
                        <span class="pay__body-end-item-name">30.000</span>
                        <span class="pay__body-end-item-name pay__body-end-item--total"><?php echo $each['price']*$quantity + 31000 ?></span>
                        <input type="hidden" name="total_money" value="<?php echo $each['price']*$quantity + 31000 ?>" required>
                    </div>
                </div>
                <div class="pay__body-end-button">
                    <span class="pay__body-end-btn-text">
                        Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý tuân theo
                        <a href="" class="pay__body-end-btn-link">Điều khoản TOTRINH</a>
                        và
                        <a href="" class="pay__body-end-btn-link">Điều khoản và Điều kiện</a>
                        của hợp đồng Bảo hiểm
                    </span>
                    <button class="btn btn--primary">Đặt Hàng</button>
                </div>
            </div>
        </form>
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
        <!-- End footer -->
    </div>
</body>
<script>
    const btnBank = document.querySelector(".btn-bank");
    const btnHome = document.querySelector(".btn-home");
    const Bank = document.querySelector(".pay__body-end-bank");
    const Home = document.querySelector(".pay__body-end-adress");
    btnBank.onclick = function(){
        btnBank.classList.add("pay__body-end-btn--now");
        btnHome.classList.remove("pay__body-end-btn--now");
        Bank.style.display = 'flex';
        Home.style.display = 'none';
    }
    btnHome.onclick = function(){
        btnBank.classList.remove("pay__body-end-btn--now");
        btnHome.classList.add("pay__body-end-btn--now");
        Bank.style.display = 'none';
        Home.style.display = 'flex';
    }
</script>
</html>
<?php
    }else {
        header('location:./login.php');
        exit;
    }
?>