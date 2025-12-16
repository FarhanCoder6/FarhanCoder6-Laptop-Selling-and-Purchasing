<?php
include 'header.php';
if(isset($_POST['btn-update'])){
    $cat    = $_POST['cat_id'];
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $image  = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir    = 'uploads/';
   
   $sql = "update `item` set `cat_id` = '$cat', `name` = '$name', `price` = '$price', `image` = '$image'";
   if(mysqli_query($con, $sql)){
     move_uploaded_file($tmp_name,$dir.$image);
     $msg = "<div class='alert alert-success'>Item Update Successfully.</div>";
   }else{
    $msg = "<div class='alert alert-danger'>Item Not update Successfully.</div>";
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
                            <h1 class="h3 m-0">Dashboard</h1>
                            <small class="text-muted">Welcome to Falcon application</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <?php if(isset($msg)){echo $msg;} ?>
                    <div class="col-md-5">
                        <?php 
                            if (isset($_GET['up'])) {
                                $id = $_GET['up'];
                                $sql = "select * from `item` where `id` = '$id'";
                                $sqlr = mysqli_query($con, $sql);
                                $row = mysqli_fetch_array($sqlr);

                            }
                         ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Product Category</label>
                                <select name="cat_id" class="form-control">
                                    <?php 
                                            $sqlcat = "select * from `category`";
                                            $sqlcr = mysqli_query($con, $sqlcat);
                                            while ($row1 = mysqli_fetch_array($sqlcr)) {
                                                
                                     ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row1['category']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" value="<?php echo $row['name']; ?>" name="name" class="form-control" placeholder="Enter Product Name">
                            </div>
                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="number" value="<?php echo $row['price']; ?>" name="price" class="form-control" min="0" placeholder="Enter Product Price">
                            </div>
                            <div class="form-group">
                                <span class="btn btn-raised btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Add Image...</span>
                                                <input type="file" name="image" multiple>
                                            </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update Item" name="btn-update" class="btn-success btn-raised btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
                
                
                
                
                
                
                
                
            </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>