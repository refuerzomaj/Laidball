<?php 
include('include/header.php');
include('include/config.php');
$url = "";
$delay = 0;
if( isset($_POST['submit'])  ){
    if(isset($_POST['date']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['property']) && isset($_POST['checkbox'])){
        if(isset($_SESSION['login'])){
            $url = "http://localhost/real/login.php";
            $id = $_SESSION['id'];
            $email = $_POST['email'];
            $phone= $_POST['phone'];
            $date= $_POST['date'];
            $property = $_POST['property'];
            $sql=mysqli_query($con,"insert into transaction(date,user_id,property,phone,fee_status,fee,transaction_status) values('$date','$id','$property','$phone',0,500, 0)");
            //echo "<script>alert('You are successfully register');</script>";
            echo "<script>alert('You are redirect to payment form!');</script>";
            $url = "http://localhost/real/transaction.php";
            echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
            exit();
        }else{
            echo "<script>alert('You need to login first!');</script>";
            $url = "http://localhost/real/login.php";
            echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
            exit();
        }
    }else{
        echo "<script>alert('All fields are required!');</script>";
    }
    
}
?>
<!-- main header end -->

<!-- Sub banner start -->
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
<!-- Sub banner end -->

<!-- Contact 1 start -->

<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Laidball Real Estate Brokerage Services</h1>
            <p>Real Estate from based in Davao City</p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-7 col-md-7">
                <!--<form action="#" method="GET" enctype="multipart/form-data">-->
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;" for="date">Date</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="date" name="date" data-date-format="dd/mm/yyyy"  class="form-control" id="date" placeholder="Date" id="datepicker" require>
                                <small id="dateHelp" class="form-text text-muted">Date</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Client Name</h2>
                        </div>
                        <?php 
                        if(isset($_SESSION['id'])){
                        ?>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text"id="firstname" name="firstname" class="form-control" placeholder="Firstname" value="<?php echo $_SESSION['fname']; ?>" disabled>
                                <small id="firstnameHelp" class="form-text text-muted">Firstname</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" value="<?php echo $_SESSION['lname']; ?>" disabled>
                                <small id="lastnameHelp" class="form-text text-muted">Lastname</small>
                            </div>
                        </div>
                        <?php 
                        }else{
                        ?>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text"id="firstname" name="firstname" class="form-control" placeholder="Firstname" require>
                                <small id="firstnameHelp" class="form-text text-muted">Firstname</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" require>
                                <small id="lastnameHelp" class="form-text text-muted">Lastname</small>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Contact Number</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number" require>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Email</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" require>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Property Name</h2>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select name="property" require>
                                    <option selected>Choose Property</option>
                                    <?php 

                                        $query=mysqli_query($con,"select title from property");
                                        while($result = mysqli_fetch_array($query))
                                        {
                                            $pname=$result['title'];
                                    ?>
                                            <option value="<?php echo $pname;?>"><?php echo $pname;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                <small id="lastnameHelp" class="form-text text-muted">Note: Reservation fee cost 500php and not refundable.</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" name="checkbox" type="checkbox" id="gridCheck" require>
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to the <a href="#"> Terms </a> & <a href="#"> Privacy Policy </a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Reserve Now</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <br>
    </div>
</div>

<?php //include('include/footer.php');?>