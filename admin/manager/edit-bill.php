<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Hóa Đơn</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/reposive.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
</head>
<body>
    <div class="manager">
        <!-- Nav bar -->
        <ul class="manager__nav">
            <li class="manager__nav-item manager__nav-item-header">
                <a href="./my-info.html" class="manager__nav-item-link manager__nav-item--img">
                    <img src="../assets/img/84332788_192794961797534_7049027482996965376_n.jpg" alt="" class="manager__nav-item-img">
                    <span class="manager__nav-item-user">Xin chào, Âu Quang Đức</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./index.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-desktop"></i>
                    <span class="manager__nav-item-text">Tổng Quan</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./staff.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-users"></i>
                    <span class="manager__nav-item-text">Quản Lý Nhân Viên</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./customer.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-user"></i>
                    <span class="manager__nav-item-text">Quản Lý Khách Hàng</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./manufacturer.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-industry"></i>
                    <span class="manager__nav-item-text">Quản Lý Nhà Sản Xuất</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./product.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-mobile"></i>
                    <span class="manager__nav-item-text">Quản Lý Sản Phẩm</span>
                </a>
            </li>
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./bill.html" class="manager__nav-item-link manager__nav-item--now">
                    <i class="manager__nav-item--icon fa-solid fa-money-bill"></i>
                    <span class="manager__nav-item-text">Quản Lý Hóa Đơn</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./bell.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-bell"></i>
                    <span class="manager__nav-item-text">Quản Lý Thông Báo</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./slide.html" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-pager"></i>
                    <span class="manager__nav-item-text">Slider</span>
                </a>
            </li>
        </ul>
        <div class="manager__body">
            <!-- Header -->
            <div class="manager__body-header">
                <i class="manager__body-header-icon fa-solid fa-align-justify"></i>
                <a href="" class="manager__body-header-link">
                    <div class="manager__body-header-logo">TOTRINH</div>
                </a>
                <a href="./my-info.html" class="manager__body-header-link">
                    <i class="manager__body-header-icon fa-solid fa-user"></i>
                </a>
            </div>
            <div class="add-staff_body-a">
                <form action="" class="add-staff__body">
                    <h3 class="add-staff__body-title">Sửa Hóa Đơn</h3>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Sản Phẩm</span>
                        <input type="text" value="Điện thoại Samsung Galaxy M12 (3GB/32GB) - Hàng Chính Hãng" placeholder="Sản Phẩm" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Tổng Tiền</span>
                        <input type="number" value="2890000" placeholder="Tổng Tiền" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Họ Tên Người Nhận</span>
                        <input type="text" value="Âu Quang Đức" placeholder="Họ Tên Người Nhận" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Số Điện Thoại Người Nhận</span>
                        <input type="number" value="0379521705" placeholder="Số Điện Thoại Người Nhận" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Hình Thức Thanh Toán</span>
                        <select name="" id="">
                            <option value="">Chuyển Khoản</option>
                            <option value="">Thanh Toán Khi Nhận Hàng</option>
                        </select>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh Cũ</span>
                        <img src="" alt="" class="add-staff__body-img-old">
                    </div>  
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Sửa Ảnh</span>
                        <input type="file" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Trạng Thái</span>
                        <input type="text" value="Đang Giao" placeholder="Trạng Thái" class="add-staff__body-item-inp" required>
                    </div>
                    <button class="btn">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>