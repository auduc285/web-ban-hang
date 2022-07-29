<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Hóa Đơn</title>
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
                <a href="./product.html" class="manager__nav-item-link">
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
            <!-- Table -->
            <table class="staff__body-table">
                <tr>
                    <th>ID</th>
                    <th>Sản Phẩm</th>
                    <th>Tổng Tiền</th>
                    <th>Họ Tên Người Nhận</th>
                    <th>Địa Chỉ Người Nhận</th>
                    <th>Số Điện Thoại Người Nhận</th>
                    <th>Thanh Toán</th>
                    <th>Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Tính Năng</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Điện thoại Samsung Galaxy M12 (3GB/32GB) - Hàng Chính Hãng</td>
                    <td>2.890.000</td>
                    <td>Âu Quang Đức</td>
                    <td>Tân Long, Tân Kỳ, Nghệ AN</td>
                    <td>0867785373</td>
                    <td>Chuyển Khoản</td>
                    <td></td>
                    <td>Đang Giao</td>
                    <td>
                        <a href="./edit-bill.html" class="staff__body-table-link">
                            <i title="Sửa" class="staff__body-table--icon fa-solid fa-pen"></i>
                        </a>
                        <a href="" title="Xóa" class="staff__body-table-link">
                            <i title="Xóa" class="staff__body-table--icon fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>