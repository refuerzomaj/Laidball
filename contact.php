<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Would like to contact, please provide me with the name or details, 
			and I can try to assist you further in finding their contact information.</p>
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <!--<form action="#" method="GET" enctype="multipart/form-data">-->
                <form onsubmit="sendEmail(); reset(); return false;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" id="message" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
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
            </div>
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
<!-- SMTP Script end -->

<!-- Google map start -->
<div class="mapouter"><div class="gmap_canvas">
<iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com/maps?width=700&amp;height=400&amp;hl=en&amp;q=UniversityNarra St., Nova Tierra, Lanang Davao City, Davao City, Philippines of 
Oxford&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
<a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div>
<style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
<!-- Google map end -->

<!-- Footer start -->
<?php include('include/footer.php');?>