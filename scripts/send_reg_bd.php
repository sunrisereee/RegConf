<?php
    require_once('connect_to_bd.php');

    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $data_birthday = $_POST['data_birthday'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `participants`(`p_fname`, `p_lname`, `p_date`, `p_mail`) VALUES ('$surname','$name','$data_birthday','$email')";

    if (mysqli_query($d, $sql)){
        echo "Пользователь успешно зарегистрирован";
    }
    else{
        echo "Ошибка: " + mysqli_error($connection);
    }
?>