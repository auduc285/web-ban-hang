<?php
    session_start();
    if(isset($_SESSION['ID'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/reposive.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/font/themify-icons/themify-icons.css">
</head>
<body>
    <div class="manager">
        <?php
            include '../connect.php';
        ?>
        <!-- Nav bar -->
        <ul class="manager__nav">
            <li class="manager__nav-item manager__nav-item-header">
                <a href="./my-info.php" class="manager__nav-item-link manager__nav-item--img">
                    <img src="../assets/img/<?php echo $_SESSION['photo'] ?>" alt="" class="manager__nav-item-img">
                    <span class="manager__nav-item-user">Xin chào, <?php echo $_SESSION['name'] ?></span>
                </a>
            </li>
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./index.php" class="manager__nav-item-link manager__nav-item--now">
                    <i class="manager__nav-item--icon fa-solid fa-desktop"></i>
                    <span class="manager__nav-item-text">Tổng Quan</span>
                </a>
            </li>
            <li class="manager__nav-item">
                <a href="./staff.php" class="manager__nav-item-link">
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
            <!-- List -->
            <div class="manager__body-list">
                <div class="manager__body-item col col-three manager__body-item--total">
                    <?php
                        $sql = "select * from customer";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./customer.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-users"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Khách Hàng</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--staff">
                    <?php
                        $sql = "select * from staff where level = '1'";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./staff.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-users"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Nhân Viên</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--manufacturer">
                    <?php
                        $sql = "select * from manufacturer";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./manufacturer.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-industry"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Nhà Sản Xuât</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--product">
                    <?php
                        $sql = "select * from product";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./product.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-mobile"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Sản Phẩm</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--bill">
                    <?php
                        $sql = "select * from bill";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./bill.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-money-bill"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Hóa Đơn</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--bell">
                    <?php
                        $sql = "select * from bell";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./bell.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-bell"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Thông Báo</span>
                    </a>
                </div>
                <div class="manager__body-item col col-three manager__body-item--slider">
                    <?php
                        $sql = "select * from slide";
                        $result = mysqli_query($connect, $sql);
                        $num_row = mysqli_num_rows($result);
                    ?>
                    <a href="./slide.php" class="manager__body-item-link">
                        <i class="manager__body-item--icon fa-solid fa-pager"></i>
                        <span class="manager__body-item-quantity"><?php echo $num_row ?></span>
                        <span class="manager__body-item-text">Slider</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }else{
        header('location:../index.php');
        exit;
    }
?>