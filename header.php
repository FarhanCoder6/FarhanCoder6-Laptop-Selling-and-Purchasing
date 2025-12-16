<?php
include('admin/config.php');
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Classified | Home 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-three" class="header-style2 header-fixed bg-body" style="height:131px;">
                <div class="header-top-bar top-bar-style2 have_any" style="background-color:#000;">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="top-bar-left">
                                    <a href="post-ad.php" class="cp-default-btn d-lg-none">Post Your Ad</a>
                                    <p class="d-none d-lg-block" style="color:#ccc; padding-top: 7px;">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +088 199990 or mail@classipost
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="top-bar-right">
                                    <ul>
                                            <?php if(!isset($_SESSION['user_session'])){ ?>
                                        <li>
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal" style="color:#ccc; cursor: pointer;">
                                            <i class="fa fa-lock" aria-hidden="true"></i> Login
                                        </button>


                                        </li>
                                    <?php }else{ ?>
                                        <li>
                                            <h5 style="color:#ccc;"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; <?php echo $_SESSION['user_session']['name']; ?></h5>
                                        </li>
                                        <li>
                                                <a href="logout.php" class="btn btn-danger"  style="color:#fff; padding: 8px 10px;">Logout</a>
                                            
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <a href="index.php" class="img-fluid"><img src="img/logo-dark.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                                <div class="cp-main-menu">
                                    <nav>
                                        <?php if(isset($_SESSION['user_session'])){?>
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a></li>
								            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="faq.php">faq</a></li>
                                        </ul>
                                    <?php }else{ ?>
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="faq.php">faq</a></li>
                                            <li><a href="login.php">Creat Account</a></li>
                                        </ul>
                                    <?php } ?>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                                <a href="post-ad.php" class="cp-default-btn">Post Your Ad</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <?php if(isset($_SESSION['user_session'])){?>
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="Product.php">Product</a></li>
                                            <li><a href="faq.php">faq</a></li>
                                        </ul>
                                    <?php }else{ ?>
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="Product.php">Product</a></li>
                                            <li><a href="faq.php">faq</a></li>
                                            <li><a href="login.php">Creat Account</a></li>
                                        </ul>
                                    <?php } ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
