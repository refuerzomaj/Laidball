<?php include('include/header.php');?>
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
                <form onsubmit="sendEmail(); reset(); return false;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;" for="date">Date</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group date">
                                <input type="date" data-date-format="dd/mm/yyyy"  class="form-control" id="date" placeholder="Date" id="datepicker">
                                <small id="dateHelp" class="form-text text-muted">Date</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Client Name</h2>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group firstname">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname">
                                <small id="firstnameHelp" class="form-text text-muted">Firstname</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group lastname">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname">
                                <small id="lastnameHelp" class="form-text text-muted">Lastname</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Contact Number</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Contact Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Email</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 style="font-size:15px;">Property Name</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id="streetaddress" name="streetaddress" class="form-control" placeholder="Street Address">
                                <small id="streetaddressHelp" class="form-text text-muted">Street Address</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id="streetaddress2" name="streetaddress2" class="form-control" placeholder="Street Address 2">
                                <small id="streetaddress2Help" class="form-text text-muted">Street Address 2</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group firstname">
                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                                <small id="cityHelp" class="form-text text-muted">City</small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group lastname">
                                <input type="text" id="state" name="state" class="form-control" placeholder="State / Province">
                                <small id="stateHelp" class="form-text text-muted">State / Province</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id="postal" name="postal" class="form-control" placeholder="Postal / Zipcode">
                                <small id="postalHelp" class="form-text text-muted">Postal / Zipcode</small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to the <a href="#"> Terms </a> & <a href="#"> Privacy Policy </a>.
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="reserve-btn">
                                <button type="submit" class="btn btn-success btn-md btn-message">Reserve Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!--<div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p>Narra St., Nova Tierra, Lanang Davao City, Davao City, Philippines</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Mobile<a href="">:0925 824 3352</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="#">LaidBall</a></p>
                            <p><a href="#">laidballREBS@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- SMTP Script-->
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
    function sendEmail(){
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let subject = document.getElementById("subject").value;
        let phone = document.getElementById("phone").value;
        let message = document.getElementById("message").value;
        let body = "Name:" + name +"<br/> Email:" + email + "<br/> Subject:" + subject + "<br/> Phone Number:" + phone +  "<br/> Message:" + message;
        console.log(body);
        Email.send({
        Host : "smtp.elasticemail.com",
        Username : "laidball.official@gmail.com",
        Password : "D3F2481973C9E29076014162BDCEF5218848",
        To : "laidball.official@gmail.com",
        From : "laidball.official@gmail.com",
        Subject : "New Message from Laidball",
        Body : body
    }).then(
    message => alert("Message successfully sent!")
    );
    }
</script>
<div id="paypal-button-container"></div>
<p id="result-message"></p>
<script src="https://www.paypal.com/sdk/js?client-id=ASnDR4rfgH2JfYKvnK6ti3l2Af1ji9rgWP-6k1zFJFgX7mgc0tHf_zJpJM2Ud0vsmCPviF_JGJ_kgdwC&currency=PHP"></script>
<script>
    paypal.Buttons({
			createOrder: (data, actions)=> {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: <?php echo 1000;?>
						}
					}]
				});
			},
			onApprove: (data, actions)=>{
				return actions.order.capture().then(function(orderData){
					console.log('capture result',orderData,JSON.stringify(orderData,null,2));
					const transaction = orderData.purchase_units[0].payments.captures[0];
					alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

					//Trigger submit button
					// Assuming you have a button element with the ID "myButton"
					showBtn();
					triggerSubmitBtn();
				});
			}
		}).render('#paypal-button-container');
</script>

<!-- Google map start -->
<!--<div class="mapouter"><div class="gmap_canvas">
<iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com/maps?width=700&amp;height=400&amp;hl=en&amp;q=UniversityNarra St., Nova Tierra, Lanang Davao City, Davao City, Philippines of 
Oxford&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
<a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div>
<style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
-->
<!-- Google map end -->

<!-- Footer start -->
<?php include('include/footer.php');?>