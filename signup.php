<?php 
include('include/links.php');
extract($_REQUEST);
include('include/config.php');

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
    $password= $_POST['password'];
    $cpassword= $_POST['confirm-password'];
    if($password==$cpassword && isset($_POST['checkbox']) ){
        $sql=mysqli_query($con,"insert into users(fname,lname,email,password) values('$fname','$lname','$email','$password')");
        echo "<script>alert('You are successfully register');</script>";
        header("location:login.php");
        exit();
    }
    else{
        echo "<script>alert('All fields are required!');</script>";
    }
}
?>
<div class="content-area-7">
    <div class="container">
        <a href="http://localhost/real/" >&#x2716;</a>
    </div>
    <br><br>
    <div class="container">
        <div class="signup-box">
            <h1>Signup</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Firstname</label>
                    <input type="text" class="form-control" name="fname" id="fullname" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" name="lname" id="fullname" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
                </div>
                <div class="form-group form-check col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                <p class="signup-text">Have an account?</p>
                <p class="signup-link"><a href="login.php">Login</a></p>
            </form>
        </div>
        
    </div>
</div>

