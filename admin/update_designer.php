<?php
include 'header.php';
if(isset($_POST['btn-update'])){
    $name   = $_POST['category']; 
  $image  = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir    = 'uploads/';
   
    $id = $_GET['up'];
   $sql = "update `tbl_category` set `name` = '$name',`image`='$image'
 where `id` = '$id'";
   if(mysqli_query($con, $sql)){
    move_uploaded_file($tmp_name,$dir.$image);
     $msg = "<div class='alert alert-success'>Category Update Successfully.</div>";
     header("refresh:1, url=category_view.php");
   }else{
    $msg = "<div class='alert alert-danger'>Category Not Added Successfully.</div>";
   }
}

                           if(isset($_GET['up'])){
                              $id = $_GET['up'];

                            $sqlsl = "select * from `tbl_category` where `id` = '$id'";
                            $sqlr = mysqli_query($con, $sqlsl);
                            $roww = mysqli_fetch_array($sqlr);
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
                            <h1 class="h3 m-0">Update Category</h1>
                            <small class="text-muted">Welcome to Update Category</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <?php if(isset($msg)){echo $msg;} ?>
                    <div class="col-md-5">
                        
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Update Category</label>
                                <input type="text" value="<?php echo $roww['name']; ?>" name="category" class="form-control" >
                            </div>
                            <div class="form-group">
                                <span class="btn btn-raised btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Add Image...</span>
                                                <input type="file" name="image" multiple>
                                            </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update Category" name="btn-update" class="btn-success btn-raised btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
                
                
                
                
                
                
                
                
            </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>