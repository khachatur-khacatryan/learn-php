<?php

    $title = "Регистрация";
    require_once "../db/db.php";
    require_once "../layouts/app.php";

?>

    <div class="container mt-5 col-md-5">

        <div class="row">
                <h1>Регистрация</h1>
                <form action="postsignup.php" method="POST">

                <p class="text-danger">
                    <?php
                    if(isset( $_SESSION['userError'])){
                        echo $_SESSION['userError'];
                        unset($_SESSION['userError']);
                    }
                    ?>
                 </p>
                    <div class="row mb-4">
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form3Example1" class="form-control"  name="name"/>
                            <label class="form-label" for="form3Example1">Имя</label>
                        </div>
                            <p class="text-danger">
                                <?php 
                                
                                 if(isset($_SESSION['nameError'])){
                                    echo $_SESSION['nameError'];
                                    unset($_SESSION['nameError']);
                                }
                                
                                ?>
                            </p>
                        </div>
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form3Example2" class="form-control"  name="username"/>
                            <label class="form-label" for="form3Example2">Имя Пользователя</label>
                        </div>

                        <p class="text-danger">
                                <?php 
                                
                                 if(isset($_SESSION['userName'])){
                                    echo $_SESSION['userName'];
                                    unset($_SESSION['userName']);
                                }
                                
                                ?>
                            </p>    

                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control"  name="email"/>
                        <label class="form-label" for="form3Example3">Почта</label>
                    </div>
                    <p class="text-danger">
                                <?php 
                                
                                 if(isset($_SESSION['email'])){
                                    echo $_SESSION['email'];
                                    unset($_SESSION['email']);
                                }
                                
                                ?>
                            </p>

                    <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control"  name="password"/>
                        <label class="form-label" for="form3Example4">Пароль</label>
                    </div>

                    <p class="text-danger">
                                <?php 
                                
                                 if(isset($_SESSION['passError'])){
                                    echo $_SESSION['passError'];
                                    unset($_SESSION['passError']);
                                }
                                
                                ?>
                            </p>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Регистрация</button>

                </form>

        </div>

    </div>





<?php require_once "../layouts/footer.php"; ?>