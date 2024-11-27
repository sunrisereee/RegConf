<?php
session_start();
require_once('connect_to_bd.php');
if (isset($_POST['input_text']))
{
    $id = $_SESSION['user_id'];
    $text = $_POST['input_text'];
    //$id = mysqli_query($d,"SELECT User_ID FROM `about_user` WHERE User_login = '$login'");
        $result2 =  mysqli_query($d,"INSERT INTO `message`(`User_ID`, `Message_text`) VALUES ('$id','$text')");
        if($result2){
            echo "message has been send.";
        }
        else{
            echo "Send Error!";
        }
}





?>