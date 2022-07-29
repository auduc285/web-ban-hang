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
            <li class="manager__nav-item manager__nav-item--now">
                <a href="./product.php" class="manager__nav-item-link manager__nav-item--now">
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
                $ID = $_GET['id'];
                require '../connect.php';
                $sql = "select * from product where ID = '$ID'";
                $result = mysqli_query($connect, $sql);
                $num = mysqli_num_rows($result);
                if($num == 1) {
                    $each = mysqli_fetch_array($result);
                    $sql = "select * from manufacturer";
                    $results = mysqli_query($connect, $sql);
            ?>
            <div class="add-staff_body-a">
                <form action="process_edit_product.php" method="post" class="add-staff__body" enctype="multipart/form-data">
                    <h3 class="add-staff__body-title">Sửa Sản Phẩm</h3>
                    <input type="hidden" name="ID" value=<?php echo $each['ID'] ?> required>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Tên Sản Phẩm</span>
                        <input type="text" name="name" placeholder="Tên Sản Phẩm" value="<?php echo $each['name'] ?>" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh Cũ</span>
                        <img src="../assets/img/<?php echo $each['photo'] ?>" alt="" class="add-staff__body-img-old">
                        <input type="hidden" name="old_photo" value=<?php echo $each['photo'] ?> required>
                    </div>   
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Ảnh</span>
                        <input type="file" name="new_photo" class="add-staff__body-item-inp">
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Nhà Sản Xuất</span>
                        <select name="ID_manufacturer" id="">
                            <?php foreach($results as $result): ?>
                            <option value="<?php echo $result['ID'] ?>"><?php echo $result['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Giá</span>
                        <input type="number" name="price" placeholder="Giá" value="<?php echo $each['price'] ?>" class="add-staff__body-item-inp" required>
                    </div>
                    <div class="add-staff__body-item">
                        <span class="add-staff__body-item-text">Mô Tả Sản Phẩm</span>
                        <textarea name="review" id="" placeholder="Mô Tả">
                            <?php echo $each['review'] ?>
                        </textarea>
                    </div>
                    <button class="btn">Sửa</button>
                    <?php if(isset($_SESSION['error'])) { ?>
                    <span style="color:red;font-size:1.4rem">
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </span>
                    <?php } ?>
                </form>
            </div>
            <?php 
                }else {
                    header('./product.php');
                    exit;
                }
            ?>
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