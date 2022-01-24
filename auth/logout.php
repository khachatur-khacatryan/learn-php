<?php 
    
    include_once("../db/db.php");  

    if(isset($_SESSION['auth'])){

        unset($_SESSION['auth']);
        header("Location: /");

    }
   

?>