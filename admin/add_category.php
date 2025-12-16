<?php
include 'header.php';
if(isset($_POST['btn-submit'])){
    $name   = $_POST['name'];
    $image      = $_FILES['image']['name'];
    $tmp_name   = $_FILES['image']['tmp_name'];
    $dir        = 'uploads/';


   $sql = "insert into `tbl_category` (`name`,`image`) values ('$name','$image')";
   if(mysqli_query($con, $sql)){
    move_uploaded_file($tmp_name,$dir.$image);
     $msg = "<div class='alert alert-success'>Designer Added Successfully.</div>";
     header("refresh:2, url=add_category.php");
   }else{
    $msg = "<div class='alert alert-danger'>Designer Not Added Successfully.</div>";
   }



}

 ?>
        <!--/ HEADER Content  -->
        <?php include 'navbar.php'; ?>
        <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Add Category</h1>
                            <small class="text-muted">Welcome to Add Category</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <?php if(isset($msg)){echo $msg;} ?>
                    <div class="col-md-5">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" name="name" class="form-control" placeholder="Add Category">
                            </div>
                            <div class="form-group">
                                <span class="btn btn-raised btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Add Image...</span>
                                                <input type="file" name="image" multiple>
                                            </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Category" name="btn-submit" class="btn-success btn-raised btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
                
                
                
                
                
                
                
                
            </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>