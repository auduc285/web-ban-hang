<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        if(empty($_POST['ID'])) {
            header('../index.php');
            exit;
        }
        $ID = $_POST['ID'];
        if(empty($_POST['name']) || empty($_POST['old_photo']) || empty($_POST['ID_manufacturer']) ||
           empty($_POST['price']) || empty($_POST['review'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header("location:./edit-product.php?id='$ID'");
            exit;
        }
        $name = $_POST['name'];
        $old_photo = $_POST['old_photo'];
        $new_photo = $_FILES['new_photo'];
        $ID_manufacturer = $_POST['ID_manufacturer'];
        $price = $_POST['price'];
        $review = $_POST['review'];
        $note = 'Chỉnh sửa bởi '.$_SESSION['name'];
        if($new_photo['size'] > 0) {
            $file = '../assets/img/';
            $end_file = explode('.', $new_photo['name'])[1];
            $name_file = time() . '.' . $end_file;
            $link = $file . $name_file;
            move_uploaded_file($new_photo["tmp_name"], $link);
        }else {
            $name_file  = $old_photo;
        }

        require '../connect.php';
        $sql = "update product set 
                name = '$name',
                photo = '$name_file',
                ID_manufacturer = '$ID_manufacturer',
                price = '$price',
                review = '$review',
                note = '$note'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./product.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>