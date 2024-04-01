<?php 
session_start();
extract($_REQUEST);

if(isset($_POST['submit'])){
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    session_destroy();
    session_unset();
    header("location:../index.php");
}

?>
<div class="content-area-7">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <button type="submit" name="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
</div>

