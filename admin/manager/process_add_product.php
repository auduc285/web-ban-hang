<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0) {
        if(empty($_POST['name']) || empty($_FILES['photo']) || empty($_POST['ID_manufacturer']) ||
           empty($_POST['price']) || empty($_POST['review'])) {
            $_SESSION['error'] = 'Không được để trống thông tin';
            header('location:./add-product.php');
            exit;
        }

        $name = $_POST['name'];
        $photo = $_FILES['photo'];
        $ID_manufacturer = $_POST['ID_manufacturer'];
        $price = $_POST['price'];
        $review = $_POST['review'];
        $note = 'Thêm bởi '.$_SESSION['name'];
        $file = '../assets/img/';
        $end_file = explode('.', $photo['name'])[1];
        $name_file = time() . '.' . $end_file;
        $link = $file . $name_file;
        move_uploaded_file($photo["tmp_name"], $link);

        require '../connect.php';
        $sql = "insert into product(name, photo, ID_manufacturer, price, review, note)
                value('$name', '$name_file', '$ID_manufacturer', '$price', '$review', '$note')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header('location:./product.php');
    }else {
        header('location:../index.php');
        exit;
    }
?>