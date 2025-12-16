<?php 
include('header.php');
$msg ='';
      if(isset($_POST['btn-submit'])){
     $category     = $_POST['category'];
     $title        = $_POST['title'];
     $condition    = $_POST['condition'];
     $company      = $_POST['company'];
     $color        = $_POST['color'];
     $warrenty     = $_POST['warrenty'];
     $price        = $_POST['price'];
     $description  = $_POST['description'];
     $name         = $_POST['name'];
     $location     = $_POST['location'];
     $email        = $_POST['email'];
     $phone        = $_POST['phone'];
     
    $query = "insert into `tbl_item` (`category`,`title`,`brand_condition`,`company`,`color`,`warrenty`,`price`,`description`,`name`,`location`,`email`,`phone`) values ('$category','$title','$condition','$company','$color','$warrenty','$price','$description','$name','$location','$email','$phone')";
                
                 if(mysqli_query($con,$query)){
                 $productID = mysqli_insert_id($con);
                 $files = count($_FILES['photo']['name']);
                
                 for($i=0; $i<$files; $i++){ 
                    if($_FILES['photo']['error'][$i]==0){

                    $filename = uniqid().'_'.$_FILES['photo']['name'][$i];
                    $file_tmp = $_FILES['photo']['tmp_name'][$i];
                    $dir = 'uploads/';
                    if(!is_dir($dir)){
                        mkdir($dir);
                    }
                        move_uploaded_file($file_tmp, $dir.$filename );
                        $queryg ="insert into `tbl_gallery` (`product_id`,`photo`)values('$productID','$filename')";
                        mysqli_query($con,$queryg);
                    }else{
                        $filename = '';
                    }
                }
        
        $msg = "<div class='alert alert-success'>Your Product Post Successfully!<span class='close' data-dismiss'alert'>&times;<span></div>";
        header("refresh:2;url=index.php");
    }else{
        $msg = "<div class='alert alert-danger'>Error! saving. <span class='close' data-dismiss='alert'>&times;</div>";
        
    }
}


?>
        <!-- Post Ad Page Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body" style="margin-top: 130px;">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li class="active">Post A Add</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb--sm">
                        <div class="gradient-wrapper">
                            <div class="gradient-title">
                                <h2>Post A Free Add</h2>
                            </div>
                            <div class="input-layout1 gradient-padding post-ad-page">
                                <form id="post-add-form" method="post" enctype="multipart/form-data">
                                    <div class="border-bottom-2 mb-50 pb-30">
                                        <?php echo $msg; ?>
                                        <div class="section-title-left-dark border-bottom d-flex">
                                            <h3><img src="img/post-add1.png" alt="post-add" class="img-fluid"> Product Information</h3>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Category<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        

                                                        <select id="" class='select2' name="category">
                                                        <?php 

                                                            $query_cat = "select * from `tbl_category`";
                                                            $result_cat = mysqli_query($con,$query_cat);
                                                            while($row=mysqli_fetch_array($result_cat)){
                                                           ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Ad Title <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" name="title" class="form-control" placeholder="Brand Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="">Condition<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" name="condition" class="form-control" placeholder="Product Condition">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="">Brand <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" name="company" class="form-control" placeholder="Company">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Color <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" name="color" class="form-control" placeholder="Color">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Warranty <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="add-title" name="warrenty" class="form-control" placeholder="Warranty">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="first-name">Set Price <span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" name="price" id="describe-ad2" class="form-control price-box" placeholder="Rs ...........">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label">Description<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <textarea placeholder="What makes your ad unique" class="textarea form-control" name="description" id="description" rows="4" cols="20" data-error="Message field is required" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Upload Picture<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <ul class="picture-upload">
                                                        <li>
                                                            <input type="file" id="img-upload1" multiple name="photo[]" class="form-control">
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom-2 mb-50 pb-30">
                                        <div class="section-title-left-dark border-bottom d-flex">
                                            <h3><img src="img/post-add2.png" alt="post-add" class="img-fluid"> Seller Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="seller-name">Name<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="seller-name" name="name" class="form-control" placeholder="Seller Name">
                                                </div>
                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="location">Location<span> *</span></label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="location" name="location" class="form-control" placeholder="Enter Your Location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="seller-mail">Seller Email<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="email" id="seller-mail" name="email" class="form-control" placeholder="Enter Your E-mail Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="phone">Phone<span> *</span></label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter your Mobile">
                                                </div>
                                            </div>
                                            <div class="form-group mt-20" style="padding-left: 212px;">
                                            <button type="submit" name="btn-submit" class="cp-default-btn-sm">Submit Now!</button>
                                        </div>
                                        </div>
                                        
                                      
                                    </div>
                                  
                                
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-item-box">
                            <img src="img/banner/sidebar-banner1.jpg" alt="banner" class="img-fluid m-auto">
                        </div>
                        <div class="sidebar-item-box">
                            <div class="gradient-wrapper">
                                <div class="gradient-title">
                                    <h3>How To Sell Quickly?</h3>
                                </div>
                                <ul class="sidebar-sell-quickly">
                                    <li><a href="faq.php">Use a brief title and description of the item.</a></li>
                                    <li><a href="faq.php">Make sure you post in the correct category</a></li>
                                    <li><a href="faq.php">Add nice photos to your ad</a></li>
                                    <li><a href="faq.php">Put a reasonable price</a></li>
                                    <li><a href="faq.php">Check the item before publish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Post Ad Page End Here -->
 <?php include('footer.php'); ?>