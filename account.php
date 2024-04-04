<?php 
include('include/header.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
extract($_REQUEST);
include('include/config.php');

$userId = $_SESSION['id'];

if(isset($_POST['logout'])){
    session_destroy();
    session_unset();
    $url = "http://localhost/real/";
    $delay = 0;
    echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
    exit();
}

if(isset($_POST['cancel'])){
    $url = "http://localhost/real/";
    $delay = 0;
    echo '<meta http-equiv="refresh" content="' . $delay . ';url=' . $url . '">';
    exit();
}

?>
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Welcome <?php echo $_SESSION['fname']. " " . $_SESSION['lname'];   ?></h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home </a></li>
                <li class="active">My Account</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-1 content-area-7" >
    <div class="container">
        <div>
            <h2>Your Property</h2>
            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>S.no</th>
                                            <th>Property Name</th>
                                            <th>Property Image</th>
                                            <th>Date of Reservation</th>
                                            <th>Reservation Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/config.php';



// Select specific data from the first table
$query1 = mysqli_query($con,"SELECT `transaction`.*, users.*, property.* FROM transaction JOIN users ON transaction.user_id = users.id JOIN property ON transaction.property = property.title WHERE transaction.user_id = $userId ");
while($result1 = mysqli_fetch_array($query1)){


?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $result1['title'];?></td>
                                            <td><img src="admin/images/property_image/<?php echo $result1['image'];?>" width="120"></td>
                                            <td><?php echo $result1['date'];?></td>
                                            <td>
                                                <?php 
                                                if($result1['fee_status']==0){
                                                    echo 'Not Paid';
                                                }
                                                else if($result1['fee_status']==1){
                                                    echo 'Paid';
                                                }
                                                else if($result1['fee_status']==2){
                                                    echo 'Cancelled';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <form method="post" enctype="multipart/form-data">
                                                    <button type="submit" name="cancel" class="btn btn-primary">Cancel</button>
                                                </form>
                                            </td>
                                        </tr>
<?php 
} 
?>
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
</div>

<div class="content-area-7">
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <button type="submit" name="logout" class="btn btn-primary" style="background-color:red; border-color:red;">Logout</button>
        </form>
    </div>
</div>
<?php 
//include('include/footer.php');
?>

