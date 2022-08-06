<?php
    session_start();
    if (isset($_SESSION['ID'])) {
        if (empty($_POST['ID']) || empty($_POST['name']) || empty($_POST['total_money']) || empty($_POST['name_in']) ||
            empty($_POST['phone_in']) || empty($_POST['adress_in']) || empty($_POST['status']) || empty($_POST['old_photo'])) {
                $_SESSION['error'] = 'Không được để trống thông tin';
                header('location:./edit-bill.php');
                exit;
        }
        $ID = $_POST['ID'];
        $name = $_POST['name'];
        $total_money = $_POST['total_money'];
        $name_in = $_POST['name_in'];
        $phone_in = $_POST['phone_in'];
        $adress_in = $_POST['adress_in'];
        $status = $_POST['status'];
        $old_photo = $_POST['old_photo'];
        $note = "Được chỉnh sửa bởi ".$_SESSION['name'];
        $new_photo = $_FILES['new_photo'];

        require '../connect.php';
        $sql = "select * from bill where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            if ($new_photo['size'] > 0) {
                $file = '../assets/img/';
                $end_file = explode('.', $new_photo['name'])[1];
                $name_file = time() . '.' . $end_file;
                $link = $file . $name_file;
                move_uploaded_file($new_photo["tmp_name"], $link);
            } else {
                $name_file = $_POST['old_photo'];
            }
            $sql = "update bill set
                    name = '$name',
                    total_money = '$total_money',
                    name_in = '$name_in',
                    phone_in = '$phone_in',
                    adress_in = '$adress_in',
                    status = '$status',
                    note = '$note',
                    photo = '$name_file'
                    where ID = '$ID'";
            mysqli_query($connect, $sql);
            mysqli_close($connect);
            header('location:./bill.php');
        }else {
            header('location:./log-out.php');
            exit;
        }
    }else {
        header('location:../index.php');
        exit;
    }
?>