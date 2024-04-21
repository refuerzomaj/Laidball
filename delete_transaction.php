<?php 

include'include/config.php';

$sid=$_GET['x'];

if ($con->query("delete from transaction where id='$sid'") === TRUE) {
    echo $sid;
    echo "<script>alert('Record deleted successfully');</script>";
    echo"<script>window.location.href='account.php';</script>";	
} else {
    echo "Error deleting record: " . $conn->error;
}

?>