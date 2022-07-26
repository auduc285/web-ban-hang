<?php
    session_start();
    $ID = $_SESSION['ID'];
    if(isset($_SESSION)) {
        if(empty($_POST['name']) || empty($_POST['old_photo']) || empty($_POST['date']) ||
           empty($_POST['adress']) || empty($_POST['phone']) || empty($_POST['email']) ||
           empty($_POST['old_pass'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header('./my-info.php');
            exit;
        }

        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $old_photo = $_POST['old_photo'];
        $date =  $_POST['date'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        if(empty($_POST['new_pass'])) {
            $password = $_POST['old_pass'];
        }else {
            $password = $_POST['new_pass'];
        }
        $photo = $_FILES['new_photo'];
        if($photo['size'] > 0) {
            $file = '../assets/img/';
            $end_file = explode('.', $photo['name'])[1];
            $name_file = time() . '.' . $end_file;
            $link = $file . $name_file;
            move_uploaded_file($photo["tmp_name"], $link);
        }else {
            $name_file = $old_photo;
        }

        require '../connect.php';
        $sql = "update staff set
                name = '$name',
                sex = '$sex',
                date = '$date',
                adress = '$adress',
                phone = '$phone',
                email = '$email',
                password = '$password',
                photo = '$name_file'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        unset($_SESSION['ID']);
        unset($_SESSION['name']);
        header('location:../index.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>