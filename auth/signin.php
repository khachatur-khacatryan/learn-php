<?php

    $title = "Авторизация";
    require_once "../db/db.php";
    require_once "../layouts/app.php";

?>

<div class="container mt-5 col-md-4 ">
        <div class="row">
            <h1>Авторизация</h1>
                <form method="POST" action="postsignin.php">
                    <div class="form-outline mb-4">
                        <input type="text" id="form1Example1" class="form-control" name="username" />
                        <label class="form-label" for="form1Example1">Юзер Нейм</label>

                    </div>
                        <p class="text-left text-danger">
                            <?php 
                                    if(isset($_SESSION['userError'])){
                                        echo $_SESSION['userError'];
                                        unset($_SESSION['userError']);
                                    }
                                ?>

                                <?php 
                                    if(isset($_SESSION['userName'])){
                                        echo $_SESSION['userName'];
                                        unset($_SESSION['userName']);
                                    }
                                ?>
                        </p>
                           
                 

                    
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example2" class="form-control"  name="password" />
                        <label class="form-label" for="form1Example2">Пароль</label>

                    </div>
                        <p class="text-left text-danger">
                            <?php
                                if(isset($_SESSION['passError'])){
                                        echo $_SESSION['passError'];
                                        unset($_SESSION['passError']);
                                    }
                            ?>


                            <?php
                                if(isset($_SESSION['passValid'])){
                                        echo $_SESSION['passValid'];
                                        unset($_SESSION['passValid']);
                                    }
                            ?>
                        </p>

                 


                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                </form>
        </div>
</div>


   



<?php require_once "../layouts/footer.php"; ?>