<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        if(empty($_POST['ID'])) {
            header('location:../index.php');
            exit;
        }
        $ID = $_POST['ID'];
        require '../connect.php';
        $sql = "select * from bell where ID = '$ID'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);
        if($num == 0) {
            header('location:../index.php');
            exit;
        }

        if(empty($_POST['old_photo']) || empty($_POST['content'])) {
            header("location:./edit-bell.php?id='$ID'");
        }

        $old_photo = $_POST['old_photo'];
        $new_photo = $_FILES['new_photo'];
        $content = $_POST['content'];
        $note = "Chỉnh sửa bởi ".$_SESSION['name'];
        
        if($new_photo['size'] > 0) {
            $file = '../assets/img/';
            $end_name = explode('.', $new_photo['name'])[1];
            $name_file = time() . '.' . $end_name;
            $link = $file . $name_file;
            move_uploaded_file($new_photo["tmp_name"], $link);
        }else {
            $name_file = $old_photo;
        }

        $sql = "update bell set
                photo = '$name_file',
                content = '$content',
                note = '$note'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./bell.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>