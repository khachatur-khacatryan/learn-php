<?php

    require_once "../db/db.php";

    $username = $_POST['username'];
    $password = $_POST['password'];


    if(mb_strlen($username) < 5 || mb_strlen($username) > 20){
        $_SESSION['userName'] = "Длина  ЮзерНейма слишком Длиная или Короткая";
    }
    if(mb_strlen($password) < 3 || mb_strlen($password) > 15){
        $_SESSION['passValid'] = "Длина  Пароля слишком Длиная или Короткая";
    }
    

    $get_username = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result =  mysqli_query($connect,$get_username);
    $finalResult =  mysqli_fetch_assoc($result);
    
    $hash = $finalResult['password'];

    if($finalResult !== NULL){
        if (password_verify($password, $hash)) {
            $_SESSION['auth'] = $finalResult;
        } else {
            $_SESSION['passError'] = "Пароль Не Верный";
        }
    }else{
       $_SESSION['userError'] = "Такой Пользователь не найден";
    }

    if(empty($_SESSION['userError']) && empty($_SESSION['passError']) ){
        header("Location: /");
    }else{
        header("Location: signin.php");
    }


    

    ?>