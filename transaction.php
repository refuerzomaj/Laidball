<?php 
include('include/links.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
extract($_REQUEST);
include('include/config.php');
function updateTransactionStatus($transactionId) {
    include('include/config.php');
    $query ="UPDATE transaction SET fee_status = 1 WHERE id = $transactionId";
    mysqli_query($con,$query);
}

?>
<div class="content-area-7">
    <div class="container">
        <a href="http://localhost/real/">&#x2716;</a>
    </div>
    <br><br>
    <div class="container">
        <div class="transaction-box row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="border-right: 1px solid #e5e5e5;">
                <h1>Summary</h1>
                <hr>
                <?php
                $query=mysqli_query($con,"SELECT * FROM transaction WHERE user_id = '" . $_SESSION['id'] ."'");
                $result = mysqli_fetch_array($query);
                $transactionId = $result['id'];
                ?>
                <p>Date Reserve: <?php echo $result['date']; ?></p>
                <p>Property Name: <?php echo $result['property']; ?></p>
                <p>Reservation Fee: <?php echo $result['fee']; ?></p>
                <hr>
                <p><b>Total amount: <?php echo $result['fee']; ?></b></p>
                <?php
                ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div id="paypal-button-container" syle="margin:0 auto; width: 50%;"></div>
                    <p id="result-message"></p>
                </div>
                </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <?php 
                $query2=mysqli_query($con,"SELECT * FROM property WHERE title = '" . $result['property'] . "'");
                $result2= mysqli_fetch_array($query2);
                ?>
                <img src="admin/images/property_image/<?php echo $result2['image'];?>" style="width: 100%;">
            </div>
            
        </div>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=ASnDR4rfgH2JfYKvnK6ti3l2Af1ji9rgWP-6k1zFJFgX7mgc0tHf_zJpJM2Ud0vsmCPviF_JGJ_kgdwC&currency=PHP"></script>
<script>
    function updateDatabase() {
        console.log("<?php echo updateTransactionStatus($transactionId);?>");
        window.location.href = "http://localhost/real/account.php"; 
    }
    paypal.Buttons({
			createOrder: (data, actions)=> {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: <?php echo $result['fee'];?>
						}
					}]
				});
			},
			onApprove: (data, actions)=>{
				return actions.order.capture().then(function(orderData){
					console.log('capture result',orderData,JSON.stringify(orderData,null,2));
					const transaction = orderData.purchase_units[0].payments.captures[0];
                    updateDatabase();
				});
			}
		}).render('#paypal-button-container');
</script>

