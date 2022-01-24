<?php
    require_once "../db/db.php";

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $time = date("Y-m-d H:i:s");
   
    unset($_SESSION['nameError'],$_SESSION['userName'],$_SESSION['email'],$_SESSION['passError']);

    if(mb_strlen($name) < 3 || mb_strlen($name) > 15){
        $_SESSION['nameError'] = "Длина Имени слишком Длиная или Короткая";
    }
    if(mb_strlen($username) < 5 || mb_strlen($username) > 20){
        $_SESSION['userName'] = "Длина  ЮзерНейма слишком Длиная или Короткая";
    }
    if(mb_strlen($email) < 8 || mb_strlen($email) > 28){
        $_SESSION['email'] = "Длина Email слишком Длиная или Короткая";
    }
    if(mb_strlen($password) < 3 || mb_strlen($password) > 15){
        $_SESSION['passError'] = "Длина  Пароля слишком Длиная или Короткая";
    }
    

    $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    
    // проверяет если ли пользователь таким никнеймом 
    $get_users_count = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($connect,$get_users_count);
  
    $finalResult = mysqli_num_rows($result);
    

    if($finalResult > 0 ){
        $_SESSION['userError'] = "Юзер с таким именим уже существует ";
    }



    $query =  "INSERT INTO `users`(`name`, `username`, `email`, `password`, `reg_date`) VALUES 
    ('$name','$username','$email','$passwordHash','$time')";

    if(empty($_SESSION)){
        
        if(mysqli_query($connect,$query)){
            echo "Запрос создан успешно";
        }else{
            echo "Ошибка: " . $query . "<br>" . mysqli_error($connect);
        }
        header("Location: /");
        
    }else{
        header("Location: signup.php");
    }

    

    ?>