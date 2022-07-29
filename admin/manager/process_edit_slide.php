<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        $new_photo = $_FILES['new_photo'];
        if($new_photo['size'] == 0 || empty($_POST['ID'])) {
            header('location:./slide.php');
            exit;
        }
        $ID = $_POST['ID'];
        $note = "Chỉnh sửa bởi ".$_SESSION['name'];
        $file = '../assets/img/';
        $end_name = explode('.', $new_photo['name'])[1];
        $name = time() . '.' . $end_name;
        $link = $file . $name;
        move_uploaded_file($new_photo["tmp_name"], $link);

        require '../connect.php';
        $sql = "update slide set
                photo = '$name',
                note = '$note'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./slide.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>