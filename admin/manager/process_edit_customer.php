<?php
    if(isset($_SESSION['ID'])) {
        if(empty($_POST['ID'])) {
            header('../index.php');
            exit;
        }
        $ID = $_POST['ID'];
        if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header('location:./edit-customer.php');
            exit;
        }
        
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = "Chỉnh sửa bởi ".$_SESSION['name'];

        require '../connect.php';
        $sql = "update customer set
                name = '$name',
                phone = '$phone',
                email = '$email',
                note = '$note'
                where ID = '$ID'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./customer.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>