<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        $photo = $_FILES['photo'];
        if($photo['size'] == 0) {
            $_SESSION['error'] = 'Không được bỏ trống thông tin';
            header('location:./add-slide.php');
            exit;
        }
        $note = "Thêm bởi ".$_SESSION['name'];
        $file = '../assets/img/';
        $end_name = explode('.', $photo['name'])[1];
        $name_file = time() . '.' . $end_name;
        $link = $file . $name_file;
        move_uploaded_file($photo["tmp_name"], $link);

        require '../connect.php';
        $sql = "insert into slide(photo, note)
                value('$name_file', '$note')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./slide.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>