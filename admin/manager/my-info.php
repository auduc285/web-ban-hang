<?php
    session_start();
    if(isset($_SESSION['ID'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Cá Nhân</title>
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
                <a href="./my-info.php" class="manager__nav-item-link manager__nav-item--img">
                    <img src="../assets/img/<?php echo $_SESSION['photo'] ?>" alt="" class="manager__nav-item-img">
                    <span class="manager__nav-item-user">Xin chào, <?php echo $_SESSION['name'] ?></span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./index.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-desktop"></i>
                    <span class="manager__nav-item-text">Tổng Quan</span>
                </a>
            </li>
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./staff.php" class="manager__nav-item-link manager__nav-item--now">
                    <i class="manager__nav-item--icon fa-solid fa-users"></i>
                    <span class="manager__nav-item-text">Quản Lý Nhân Viên</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./customer.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-user"></i>
                    <span class="manager__nav-item-text">Quản Lý Khách Hàng</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./manufacturer.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-industry"></i>
                    <span class="manager__nav-item-text">Quản Lý Nhà Sản Xuất</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./product.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-mobile"></i>
                    <span class="manager__nav-item-text">Quản Lý Sản Phẩm</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./bill.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-money-bill"></i>
                    <span class="manager__nav-item-text">Quản Lý Hóa Đơn</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./bell.php" class="manager__nav-item-link">
                    <i class="manager__nav-item--icon fa-solid fa-bell"></i>
                    <span class="manager__nav-item-text">Quản Lý Thông Báo</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./slide.php" class="manager__nav-item-link">
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
                <a href="./my-info.php" class="manager__body-header-link">
                    <i class="manager__body-header-icon fa-solid fa-user"></i>
                </a>
            </div>
            <?php
                require '../connect.php';
                $ID = $_SESSION['ID'];
                $sql = "select * from staff where ID = '$ID'";
                $result = mysqli_query($connect, $sql);
                $each = mysqli_fetch_array($result);
            ?>
            <div class="add-staff_body-a">
                <form action="process_my-info.php" method="post" class="add-staff__body" enctype="multipart/form-data">
                    <h3 class="add-staff__body-title">Thông Tin Cá Nhân</h3>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Họ Và Tên</span>
                        <input type="text" name="name" value="<?php echo $each['name'] ?>" placeholder="Họ Và Tên" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh Cũ</span>
                        <img src="../assets/img/<?php echo $each['photo'] ?>" alt="" class="add-staff__body-img-old">
                        <input type="hidden" name="old_photo" value="<?php echo $each['photo'] ?>" required>
                    </div>  
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Sửa Ảnh</span>
                        <input type="file" name="new_photo" class="add-staff__body-item-inp">
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Giới Tính</span>
                        <select name="sex" id="" value="<?php echo $each['sex'] ?>">
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                        </select>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ngày Sinh</span>
                        <input type="text" name="date" value="<?php echo $each['date'] ?>" placeholder="yyyy-mm-dd" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Địa Chỉ</span>
                        <input type="text" name="adress" value="<?php echo $each['adress'] ?>" placeholder="Địa Chỉ" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Số Điện Thoại</span>
                        <input type="number" name="phone" value="<?php echo $each['phone'] ?>" placeholder="Số Điện Thoại" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Email</span>
                        <input type="email" name="email" value="<?php echo $each['email'] ?>" placeholder="Email" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Mật Khẩu Mới</span>
                        <input type="password" name="new_pass" placeholder="Nhập mật khẩu mới nếu muốn đổi" class="add-staff__body-item-inp">
                        <input type="hidden" name="old_pass" value="<?php echo $each['password'] ?>">
                    </div>
                    <button class="btn">Sửa</button>
                    <?php if(isset($_SESSION['error'])) { ?>
                    <span style="color:red; font-size:1.4rem">
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </span>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }else {
        header('location:../index.php');
        exit;
    }
?>