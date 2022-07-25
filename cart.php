<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/reponsive.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.1.1-web/css/all.css">
</head>
<body>
    <div class="cart">
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
                                <ul class="header__notify-list">
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/slae1k.png" alt="" class="header__notify-img">
                                            <div class="header__notify-body">
                                                <span class="header__notify-name">DEAL TỪ 1K LẠI CÒN FREESHIP</span>
                                                <span class="header__notify-desc">
                                                    Dây cuốn sạc, miếng dán trắng
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/slae1k.png" alt="" class="header__notify-img">
                                            <div class="header__notify-body">
                                                <span class="header__notify-name">DEAL TỪ 1K LẠI CÒN FREESHIP</span>
                                                <span class="header__notify-desc">
                                                    Dây cuốn sạc, miếng dán trắng
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/slae1k.png" alt="" class="header__notify-img">
                                            <div class="header__notify-body">
                                                <span class="header__notify-name">DEAL TỪ 1K LẠI CÒN FREESHIP</span>
                                                <span class="header__notify-desc">
                                                    Dây cuốn sạc, miếng dán trắng
                                                </span>
                                            </div>
                                        </a>
                                    </li>
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
                            Âu Quang Đức
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End cart header top -->
            <!-- Begin cart header body -->
            <div class="cart__header-body">
                <div class="cart__header-body-logo">
                    <a href="./index.html" class="cart__header-body-link">
                        TOTRINH
                    </a>
                </div>
                <div class="cart__header-body-text">
                    Giỏ Hàng
                </div>
            </div>
            <!-- End cart header body -->
        </div>
        <!-- End cart header -->
        <!-- Begin cart body -->
        <div class="cart__body">
            <!-- Begin cart top -->
            <div class="cart__body-top">
                <div class="cart__body-top-item" style="width: 5%">
                    <input type="checkbox" class="cart__body-top-item-input" id="check-all">
                </div>
                <div class="cart__body-top-item cart__body-top-item--product cart__body-top-item--phone">Sản Phẩm</div>
                <div class="cart__body-top-item col-half-four cart__body-top-item--phone">Đơn Giá</div>
                <div class="cart__body-top-item col-half-four cart__body-top-item--phone">Số Lượng</div>
                <div class="cart__body-top-item col-half-four cart__body-top-item--phone">Thành Tiền</div>
                <div class="cart__body-top-item col-half-four cart__body-top-item--phone">Thao Tác</div>
            </div>
            <!-- End cart top -->
            <!-- Begin cart body -->
            <div class="cart__body-list">
                <div class="cart__body-item" style="width: 5%">
                    <input type="checkbox" class="cart__body-top-item-input" name="check">
                </div>
                <div class="cart__body-item cart__body-item--product">
                    <img src="./assets/img/samsung.jpg" alt="" class="cart__body-item-img">
                    <span class="cart__body-item-name">Điện thoại Samsung Galaxy M12 (3GB/32GB) - Hàng Chính Hãng</span>
                </div>
                <div class="cart__body-item col-half-four cart__body-item-price cart__body-item--phone">2.890.000</div>
                <div class="cart__body-item col-half-four cart__body-item-quantity cart__body-item--phone">
                    <a href="" class="cart__body-item-quantity-link">
                        -
                    </a>
                    <input type="number" value="1" min="1" class="cart__body-item-quantity-view">
                    <a href="" class="cart__body-item-quantity-link">
                        +
                    </a>
                </div>
                <div class="cart__body-item col-half-four cart__body-item--phone">2.890.000</div>
                <div class="cart__body-item col-half-four cart__body-item--phone">
                    <a href="" class="cart__body-item-delete-link">
                        <i class="cart__body-item-icon fa-solid fa-trash"></i>
                    </a>
                    <a href="" class="cart__body-item-delete-link">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="cart__body-list">
                <div class="cart__body-item" style="width: 5%">
                    <input type="checkbox" class="cart__body-top-item-input" name="check">
                </div>
                <div class="cart__body-item cart__body-item--product">
                    <img src="./assets/img/samsung.jpg" alt="" class="cart__body-item-img">
                    <span class="cart__body-item-name">Điện thoại Samsung Galaxy M12 (3GB/32GB) - Hàng Chính Hãng</span>
                </div>
                <div class="cart__body-item col-half-four cart__body-item-price">2.890.000</div>
                <div class="cart__body-item col-half-four cart__body-item-quantity cart__body-item--phone">
                    <a href="" class="cart__body-item-quantity-link">
                        -
                    </a>
                    <input type="number" value="1" min="1" class="cart__body-item-quantity-view">
                    <a href="" class="cart__body-item-quantity-link">
                        +
                    </a>
                </div>
                <div class="cart__body-item col-half-four cart__body-item--phone">2.890.000</div>
                <div class="cart__body-item col-half-four cart__body-item--phone">
                    <a href="" class="cart__body-item-delete-link">
                        <i class="cart__body-item-icon fa-solid fa-trash"></i>
                    </a>
                    <a href="" class="cart__body-item-delete-link">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </div>
            </div>
            <!-- End cart body -->
            <!-- Begin cart footer -->
            <div class="cart__footer">
                <span class="cart__footer-text">
                    Tổng tiền: 
                    <span class="cart__footer-text-price">5.780.000</span>
                </span>
                <button class="btn btn--primary">Đặt Hàng</button>
            </div>
        </div>
        <!-- End cart footer -->
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
    var check = document.getElementById("check-all");
    check.onclick = function(){
        var checkbox = document.getElementsByName("check");
        if(check.checked == true){
            for(var i = 0; i < checkbox.length; i++){
                checkbox[i].checked = true;
            }
        }else{
            for(var i = 0; i < checkbox.length; i++){
                checkbox[i].checked = false;
            }
        }
    }
</script>
</html>