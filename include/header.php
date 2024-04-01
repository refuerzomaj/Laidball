<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Google Tag Manager -->
    <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDTWJ3Z');</script>-->
    <!-- End Google Tag Manager -->
    <title> Laidball</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <?php include'links.php';?>
</head>
<body id="top">
<!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
End Google Tag Manager (noscript) 
<div class="page_loader"></div>
-->
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <div class="logo">
                        <img src="assets/pic/logo2.png" alt="Logo">
                    </div>    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
							
							<li class="nav-item megamenu-li">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link" href="properties.php">Properties</a>
                            </li>
							                                                        
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reserve.php">Reserve Now</a>
                            </li>
                            <?php if(isset($_SESSION['login'])){   ?>
                            <li class="nav-item">
                                <a class="nav-link" href="include/account.php">My Account</a>
                            </li>	
                            <?php }else{   ?>	
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>	
                            <?php }   ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php //include'include/config.php';?>
<!-- main header end -->
