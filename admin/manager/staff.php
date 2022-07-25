<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Viên</title>
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
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./staff.html" class="manager__nav-item-link manager__nav-item--now">
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
            <li class="manager__nav-item">
                <a href="./bill.html" class="manager__nav-item-link">
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
            <div class="staff__body-add">
                <a href="./add-staff.html" title="Thêm" class="staff__body-add-link">
                    <i class="fa-solid fa-user-plus"></i>
                </a>
            </div>
            <table class="staff__body-table">
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Họ Và Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Tính Năng</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="../assets/img/manh.png" alt="" class="staff__body-table-img">
                    </td>
                    <td>Hồ Sỹ Mạnh</td>
                    <td>Nữ</td>
                    <td>28/9/2005</td>
                    <td>Tân Long, Tân Kỳ, Nghệ AN</td>
                    <td>0867785373</td>
                    <td>homanh28@gmail.com</td>
                    <td>
                        <a href="./edit-staff.html" class="staff__body-table-link">
                            <i title="Sửa" class="staff__body-table--icon fa-solid fa-pen"></i>
                        </a>
                        <a href="" title="Xóa" class="staff__body-table-link">
                            <i title="Xóa" class="staff__body-table--icon fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img src="../assets/img/huy.png" alt="" class="staff__body-table-img">
                    </td>
                    <td>Nguyễn Văn Huy</td>
                    <td>Nam</td>
                    <td>28/9/1993</td>
                    <td>Tân Long, Tân Kỳ, Nghệ AN</td>
                    <td>0867785373</td>
                    <td>vanhuy18@gmail.com</td>
                    <td>
                        <a href="./edit-staff.html" class="staff__body-table-link">
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