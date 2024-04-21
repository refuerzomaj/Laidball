<?php 
session_start();
error_reporting(0);
include('include/links.php');
extract($_REQUEST);
include('include/config.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $checkbox=$_POST['checkbox'];
    $query=mysqli_query($con,"SELECT * FROM users WHERE email = '$email' and password = '$password'");
    $count=mysqli_fetch_array($query);
    if($count>0){
        $_SESSION['login'] = $_POST['email'];
        $_SESSION['id'] = $count['id'];
        $_SESSION['fname'] = $count['fname'];
        $_SESSION['lname'] = $count['lname'];

        header("location:index.php");
        exit();
    }
    else{
        echo "<script>alert('Please enter correct email or password!');</script>";
    }
}
?>
<div class="content-area-7">
    <div class="container">
        <a href="http://localhost/real/">&#x2716;</a>
    </div>
    <br><br>
    <div class="container">
        <div class="login-box">
            <h1>Login</h1>
            <form method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                <p class="login-text">Don't have an account?</p>
                <p class="login-link"><a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>

