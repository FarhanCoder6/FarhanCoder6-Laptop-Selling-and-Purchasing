<?php include 'config.php';
if(isset($_SESSION['admin'])){
}else{
   header('location:login.php'); 
}
 ?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: Falcon - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="index.php">
                        <span>Laptop</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                    
                    
                </ul>
                <!-- Left-side navigation end -->
                
                <!-- Search end -->

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    
                    
                    
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if(isset($_SESSION['admin'])){
                                    $data =  $_SESSION['admin'];
                                    $id = $data['id'];
                                    $sqls = "select * from `admin` where `id` = '$id'";
                                    $sqlr = mysqli_query($con,$sqls);
                                    $row = mysqli_fetch_array($sqlr);

                             ?>
                            <img src="uploads/<?php echo $row['image']; ?>" alt="" class="0 size-30x30"> </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name"><?php echo $row['name']; ?></div>
                                    <div class="user-position online">Available</div>
                                </div>
                            </li>
                            <li>
                                <a href="profile.php" role="button" tabindex="0">
                                    
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                            
                            
                            <li class="divider"></li>
                            
                            <li>
                                <a href="logout.php" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    <?php } ?>
                    </li>
                    
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>