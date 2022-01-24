<?php 

    require_once "../db/db.php";
    $title = "Загрузка Картинки";
    require_once "../layouts/app.php"; 

    if($_SESSION['auth'] == NULL){
        header("Location: ../auth/signin.php");
    }

?>




<div class="container">
    <div class="row col-md-5 mx-auto mt-5">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="formFileMultiple" class="form-label">Загрузка Картинки</label>
            <input class="form-control" type="file" id="formFileMultiple"  name="image" multiple />
            <input type="submit" class="btn btn-success mt-5">
        </form>
    </div>
</div>