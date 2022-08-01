<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        if(empty($_POST['name']) || empty($_POST['total_money']) || empty($_POST['name_in']) ||
           empty($_POST['phone_in']) || empty($_POST['adress_in'])) {
            header('location:./index.php');
            exit;
        }
        $name = $_POST['name'];
        $email = $_SESSION['email'];
        $name_in = $_POST['name_in'];
        $phone_in = $_POST['phone_in'];
        $adress_in = $_POST['adress_in'];
        $total_money = $_POST['total_money'];
        $photo = $_FILES['file_pay'];
        if($photo['size'] > 0) {
            $status = "Chuyển Khoản";
            $file = "./admin/assets/img/";
            $end_name = explode('.', $photo['name'])[1];
            $name_file = time() . '.' . $end_name;
            $link = $file . $name_file;
            move_uploaded_file($photo["tmp_name"], $link);
        }else {
            $status = "Thanh toán khi nhận hàng";
            $name_file = " ";
        }
        $note = "Được đặt bởi ".$_SESSION['name'];

        require './admin/connect.php';
        $sql = "insert into bill(name, email_out, name_in, adress_in, phone_in, total_money, note, status, photo)
                value('$name', '$email', '$name_in', '$adress_in', '$phone_in', '$total_money', '$note', '$status', '$name_file')";
        mysqli_query($connect, $sql);
        header('location:./index.php');
    }else {
        header('location:./index.php');
        exit;
    }
?>