<?Php 
    require_once "../db/db.php";
    $title = $_SESSION['auth']['name'];
    require_once "../layouts/app.php";

    $user_link = $_GET['user'];
    $query = "SELECT * FROM `users` WHERE username  = '$user_link' ";
    
    $result = mysqli_query($connect,$query);
    $finalResult = mysqli_fetch_assoc($result);
   
    if($finalResult == Null ){
        header("Location: ../404.php");
    }else{
        echo "<pre>";
        print_r($finalResult);
        echo "</pre>";
    }

?>