<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thông Báo</title>
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
                <a href="./product.php" class="manager__nav-item-link">
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
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./bell.php" class="manager__nav-item-link manager__nav-item--now">
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
            <!-- Table -->
            <div class="staff__body-add">
                <a href="./add-bell.php" title="Thêm" class="staff__body-add-link">
                    <i class="fa-solid fa-user-plus"></i>
                </a>
            </div>
            <?php
                require '../connect.php';
                $sql = "select * from bell";
                $result = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($result);
                if($num == 0) {
            ?>
            <span style="color:red;font-size:1.6rem">
                    Không có thông báo.
            </span>
            <?php }else { ?>
            <table class="staff__body-table">
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Nội Dung</th>
                    <th>Ghi Chú</th>
                    <th>Tính Năng</th>
                </tr>
                <?php foreach($result as $each): ?>
                <tr>
                    <td><?php echo $each['ID'] ?></td>
                    <td>
                        <img src="../assets/img/<?php echo $each['photo'] ?>" alt="" height="100px" width="100px">
                    </td>
                    <td><?php echo $each['content'] ?></td>
                    <td><?php echo $each['note'] ?></td>
                    <td>
                        <a href="./edit-bell.php?id=<?php echo $each['ID'] ?>" class="staff__body-table-link">
                            <i title="Sửa" class="staff__body-table--icon fa-solid fa-pen"></i>
                        </a>
                        <a href="./delete-bell.php?id=<?php echo $each['ID'] ?>" title="Xóa" class="staff__body-table-link">
                            <i title="Xóa" class="staff__body-table--icon fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php } ?>
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