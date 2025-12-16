<?php 
include('header.php'); 
$message='';
     
    if(isset($_POST['btn-submit'])){
     $name       = $_POST['name'];
     $phone      = $_POST['phone'];
     $email      = $_POST['email'];
     $password   = $_POST['password'];
     
     
           $query = "INSERT INTO `tbl_user`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";

         if(mysqli_query($con,$query)){
            $message = "<div class='alert alert-success'>Your Account Created Successfully!<span class='close' data-dismiss'alert'>&times;</span></div>";
                header("refresh:2;url=index.php");       
        
        }else{
        $message = "<div class='alert alert-danger'>Error! saving. <span class='close' data-dismiss='alert'>&times;</span></div>";
        
       }
}


?>
        <!-- Login Area Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body" style="margin-top: 130px;">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li class="active">SignUp Page</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="gradient-wrapper mb--sm">
                            <div class="gradient-title">
                                <h2>Creat An Account</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                                <form id="" method="post">
                                    <?php echo $message; ?>
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <label class="control-label" for="first-name"> Name <span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="text" id="first-name" name="name" class="form-control" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <label class="control-label" for="">Phone <span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="text" id="" name="phone" class="form-control" placeholder="Your Phone Number">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <label class="control-label" for="first-name">Email <span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="email" id="first-name2" name="email" class="form-control" placeholder="Enter your e-mail here . . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-12">
                                            <label class="control-label" for="password">Password <span>*</span></label>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="form-group">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Type  Your Password">
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="row">
                                        <div class="ml-auto col-sm-9 col-12 ml-none--mb">
                                            <div class="form-group">
                                                <button type="submit" name="btn-submit" class="cp-default-btn-sm">SignUp Now!</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-item-box">
                            <ul class="sidebar-more-option">
                                <li>
                                    <a href="post-ad.php"><img src="img/banner/more1.png" alt="more" class="img-fluid">Post a Free Ad</a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/banner/more2.png" alt="more" class="img-fluid">Manage Product</a>
                                </li>
                                <li>
                                    <a href="favourite-ad-list.php"><img src="img/banner/more3.png" alt="more" class="img-fluid">Favorite Ad list</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item-box">
                            <img src="img/banner/sidebar-banner1.jpg" alt="banner" class="img-fluid m-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Area End Here -->
 <?php include('footer.php'); ?>