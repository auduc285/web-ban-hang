<?php
    session_start();
    if(isset($_SESSION['ID'])) {
        if(empty($_FILES['photo']) || empty($_POST['content'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header('location:./add-bell.php');
            exit;
        }
        $photo = $_FILES['photo'];
        $content = $_POST['content'];
        $note = "Tạo bởi ".$_SESSION['name'];
        $file = '../assets/img/';
        $end_file = explode('.', $photo['name'])[1];
        $name_file = time() . '.' . $end_file;
        $link = $file . $name_file;
        move_uploaded_file($photo["tmp_name"], $link);

        require '../connect.php';
        $sql = "insert into bell(photo, content, note)
                value('$name_file', '$content', '$note')";
        mysqli_query($connect, $sql);
        header('location:./bell.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>