<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0){
        if(empty($_POST['ID'])){
            header('location:staff.php');
            exit;
        }
        $ID = $_POST['ID'];
        if(empty($_POST['name']) || empty($_POST['old_photo']) || empty($_POST['date']) ||
           empty($_POST['adress'])){
            $_SESSION['error'] = 'Không được để trống thông tin';
            header("location:./edit-staff.php?id='$ID'");
            exit;
        }

        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $old_photo = $_POST['old_photo'];
        $date = $_POST['date'];
        $adress = $_POST['adress'];
        $new_photo = $_FILES['new_photo'];

        if($new_photo['size'] > 0) {
            $file = '../assets/img/';
            $end_file = explode('.', $new_photo['name'])[1];
            $name_file = time() . '.' . $end_file;
            $link = $file . $name_file;
            move_uploaded_file($new_photo["tmp_name"], $link);
        }else {
            $name_file = $old_photo;
        }

        require '../connect.php';
        $sql = "update staff set
                name = '$name',
                sex = '$sex',
                photo = '$old_photo',
                date = '$date',
                adress = '$adress'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:staff.php');
    }else{
        header('location:../index.php');
        exit;
    }
?>