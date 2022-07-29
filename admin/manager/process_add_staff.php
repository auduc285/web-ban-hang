<?php
    session_start();
    if(isset($_SESSION['ID']) && $_SESSION['level'] == 0){
        if(empty($_POST['name']) || empty($_FILES['photo']) || empty($_POST['date']) ||
           empty($_POST['adress']) || empty($_POST['phone']) || empty($_POST['email']) ||
           empty($_POST['password'])){
            $_SESSION['error'] = 'Vui lòng điền đầy đủ thông tin';
            header('location:add-staff.php');
            exit;
        }

        $name = $_POST['name'];
        $photo = $_FILES['photo'];
        $sex = $_POST['sex'];
        $date = $_POST['date'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $file = '../assets/img/';
        $end_file = explode('.', $photo['name'])[1];
        $name_file = time() . '.' . $end_file;
        $link = $file . $name_file;
        move_uploaded_file($photo["tmp_name"], $link);

        require '../connect.php';
        $sql = "select * from staff where email = '$email' or phone = '$phone'";
        $result = mysqli_query($connect, $sql);
        $num = mysqli_num_rows($result);

        if($num == 0){
            $sql = "insert into staff(photo, name, sex, date, adress, phone, email, password, level)
                    value('$name_file', '$name', '$sex', '$date', '$adress', '$phone', '$email', '$password', '1')";
            mysqli_query($connect, $sql);
            header('location:staff.php');
            exit;
        }else{
            $_SESSION['error'] = 'Thông tin đăng nhập đã tồn tại';
            header('location:./add-staff.php');
            exit;
        }
    }else{
        header('location:../index.php');
        exit;
    }
?>