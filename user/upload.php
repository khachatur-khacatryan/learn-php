<?php

     require_once "../db/db.php";

$image = $_FILES["image"]; 

if(is_dir('../uploads') == FALSE) {  // проверка на существование папки
     mkdir('../uploads',0007,true);   // создаем папку
}

$result = move_uploaded_file($image['tmp_name'], "../uploads/" .  $image['name']); // 1 из "временой пути  перемещаем  в ту папку где указали названия папки 2 каталоге"

$user_id = $_SESSION['auth']['id']; // получаем  ид текущего юзера

// UPDATE `users` WHERE id = '$user_id'  SET `avatar`= '$image[name]'

$query = "UPDATE `users` SET `avatar` = '$image[name]' WHERE  id = '$user_id' ";


$finalresult = mysqli_query($connect,$query);

if($finalresult === TRUE){
     header("Location: /");
}else{
     header("Location: uploadImage.php");
}



?>