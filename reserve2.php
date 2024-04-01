<?php 
include('include/header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('include/config.php');

$url = "";
$delay = 5;
if(isset($_POST['submit'])){
    if($_SESSION['login']!=""){
        $url = "http://localhost/real/login.php";
        $id = $_SESSION['id'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $date= $_POST['date'];
        $property = "Property";
        $sql=mysqli_query($con,"insert into transaction(date,user_id,property,fee,status) values('$date','$id','$property',500, 'Not Paid')");
        echo "<script>alert('You are successfully register');</script>";
        //$url = "http://localhost/real/transaction.php";
        //echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
    }else{
        $url = "http://localhost/real/login.php";
        echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
    }
}

?>

<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Reserve Now</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Reserve Now</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-1 content-area-7">
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <input type="date" name="date">
            <input type="text" name="fname">
            <input type="text" name="lname">
            <input type="text" name="phone">
            <input type="email" name="email">
            <input type="submit" name="submit">
        </form>
    </div>
</div>
<?php include('include/footer.php');?>
