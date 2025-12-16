<?php
include 'header.php';
if(isset($_POST['btn-submit'])){
    $cat    = $_POST['cat_id'];
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $image  = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $dir    = 'uploads/';
   
   $sql = "insert into `item` (`cat_id`,`name`,`price`,`image`) values ('$cat','$name','$price','$image')";
   if(mysqli_query($con, $sql)){
     move_uploaded_file($tmp_name,$dir.$image);
     $msg = "<div class='alert alert-success'>Item Added Successfully.</div>";
   }else{
    $msg = "<div class='alert alert-danger'>Item Not Added Successfully.</div>";
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
                            <h1 class="h3 m-0">Add Products</h1>
                            <small class="text-muted">Welcome to Add Products</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <?php if(isset($msg)){echo $msg;} ?>
                    <div class="col-md-5">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Select Category First</label>
                                <select name="designer" id="des" class="form-control">
                                    <option>-- SELECT CATEGORY --</option>
                                    <?php 
                                            $sqlcat = "select * from `tbl_category`";
                                            $sqlcr = mysqli_query($con, $sqlcat);
                                            while ($row = mysqli_fetch_array($sqlcr)) {
                                                
                                     ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                            </div>
                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="number" name="price" class="form-control" min="0" placeholder="Enter Product Price">
                            </div>
                            <div class="form-group">
                                <span class="btn btn-raised btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Add Image...</span>
                                                <input type="file" name="image" multiple>
                                            </span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add Item" name="btn-submit" class="btn-success btn-raised btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
                
                
                
                
                
                
                
                
            </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>
   <script type="text/javascript">
       $(document).ready(function(){
        $('#des').change(function(){
            $id = $(this).val();
            // alert($id);
            $.ajax({
                type:"post",
                url:"ajcat.php",
                data:{"des_id":$id},
                success:function(data){
                   $("#catid").html(data);
                    // alert(data);
                },
            });
        });
       });
   </script>