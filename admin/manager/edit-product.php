<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
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
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./product.html" class="manager__nav-item-link manager__nav-item--now">
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
            <div class="add-staff_body-a">
                <form action="" class="add-staff__body">
                    <h3 class="add-staff__body-title">Sửa Sản Phẩm</h3>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Tên Sản Phẩm</span>
                        <input type="text" placeholder="Tên Sản Phẩm" value="Điện thoại Samsung Galaxy M12 (3GB/32GB) - Hàng Chính Hãng" class="add-staff__body-item-inp">
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh Cũ</span>
                        <img src="../assets/img/samsung.jpg" alt="" class="add-staff__body-img-old">
                    </div>   
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh</span>
                        <input type="file" class="add-staff__body-item-inp">
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Nhà Sản Xuất</span>
                        <select name="" id="">
                            <option value="SamSung">Apple</option>
                            <option value="SamSung">Oppo</option>
                            <option value="SamSung">SamSung</option>
                        </select>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Giá</span>
                        <input type="number" placeholder="Giá" value="2890000" class="add-staff__body-item-inp">
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Mô Tả Sản Phẩm</span>
                        <textarea name="" id="" placeholder="Mô Tả">
                            Thiết Kế Trẻ Trung, Hiện Đại<br><br>
                            Mặt lưng ánh kim thời thượng, kết hợp với những họa tiết siêu nhỏ tạo nên một thiết kế Galaxy đậm chất thời đại, dẫn đầu xu hướng. Thân máy được hoàn thiện tỉ mỉ với đường cong mềm mại, cùng sắc màu cổ điển bạn yêu thích: Đen Cuốn Hút, Xanh Lam Lịch Lãm hoặc Xanh Ngọc Thời Thượng.<br><br>
                            Thỏa Sức Sáng Tạo Với Bộ 4 Camera 48MP<br><br>
                            Bộ 4 Camera 48MP ưu việt dẫn đầu công nghệ cho chất lượng hình ảnh chân thực và sắc nét. Mở rộng khung hình với Camera Góc Siêu Rộng 5MP. Tối ưu lấy nét với Camera Chiều Sâu hoặc chụp ảnh nghệ thuật cùng Camera Macro 2MP.<br><br>
                            Màn Hình Rộng, Trải Nghiệm Nhiều Hơn<br><br>
                            Thoải mái trải nghiệm nhiều nội dung hơn với màn hình tràn viền vô cực Infinity-V 6,5"". Công nghệ HD+ mang đến chất lượng hiển thị rõ ràng và sắc nét, cho bạn thỏa thích thưởng thức nội dung đỉnh cao.<br><br>
                            Năng Lượng Dồi Dào Cho Trải Nghiệm Bất Tận<br><br>
                            Thoải mái trải nghiệm suốt ngày dài với siêu pin mãnh thú đến 5.000mAh (tiêu chuẩn)*. Nhanh chóng sạc đầy chỉ trong tích tắc với công nghệ sạc nhanh siêu tốc 15W vượt trội.<br><br>
                            Hiệu Suất Mạnh Mẽ Cho Bạn An Tâm Trải Nghiệm<br><br>
                            Xử lý nhanh chóng và hiệu quả mọi tác vụ với bộ vi xử lý 8 nhân mạnh mẽ và RAM lên đến 3GB/4GB/6GB. Tận hưởng 32GB/64GB/128GB bộ nhớ trong sẵn có hoặc thoải mái mở rộng không gian lưu trữ với thẻ nhớ MicroSD lên đến 1TB.<br><br>
                            Tập Trung Trải Nghiệm Với One UI Core<br><br>
                            Sẵn sàng trải nghiệm những đột phá trên giao diện One UI Core của Samsung mang đến hiệu suất ấn tượng kết hợp thiết kế giao diện hoàn toàn mới giúp tối ưu trải nghiệm người dùng.<br><br>
                            Thông Số Kỹ Thuật<br><br>
                            Màu sắc: Đen Cuốn Hút, Xanh Lam Lịch Lãm hoặc Xanh Ngọc Thời Thượng<br><br>
                            Bộ vi xử lý: Octa-core (2GHz)<br><br>
                            Hiển thị: <br><br>
                            Kích thước: 6.5"<br><br>
                            Độ phân giải: 720 x 1600 (HD+)<br><br>
                            Công nghệ màn hình PLS TFT LCD<br><br>
                            Camera:<br><br>
                            Camera sau: 48.0 MP + 5.0 MP + 2.0 MP + 2.0 MP<br><br>
                            Camera trước: 8.0 MP<br><br>
                            Bộ nhớ: RAM 3GB ROM 32GB<br><br>
                            SIM: SIM Nano <br><br>
                            Loại khe SIM: SIM 1 + SIM 2 + MicroSD<br><br>
                            Pin: 5.000mAh.<br><br>
                            Dịch vụ: Hỗ trợ Samsung Dex: Không<br><br>
                            Bộ sản phẩm bao gồm: Điện thoại, Cáp type C, củ sạc, sách hướng dẫn<br><br>
                            Thông tin bảo hành:<br><br>
                            Bảo hành chính hãng 12 tháng. <br><br>
                            Trung tâm bảo hành vui lòng tham khảo đường link: https://www.samsung.com/vn/support/service-center/ <br><br>
                            Hotline: 1800-588-855<br><br>
                        </textarea>
                    </div>
                    <button class="btn">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>