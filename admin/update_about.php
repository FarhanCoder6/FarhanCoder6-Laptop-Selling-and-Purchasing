<?php
include 'header.php';
if(isset($_POST['btn-update'])){
    $data  = $_POST['data']; 
 
   
    $id = $_GET['up'];
   $sql = "update `about` set `data` = '$data' where `id` = '$id'";
   if(mysqli_query($con, $sql)){
    
     $msg = "<div class='alert alert-success'>category Update Successfully.</div>";
   }else{
    $msg = "<div class='alert alert-danger'>category Not Added Successfully.</div>";
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
                                if(isset($_GET['up'])){
                                    $id = $_GET['up'];

                                    $sqlsl = "select * from `about` where `id` = '$id'";
                                    $sqlr = mysqli_query($con, $sqlsl);
                                    $row = mysqli_fetch_array($sqlr);
                                }
                         ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">About</label>
                                <textarea name="data" rows="10" class="form-control"><?php echo $row['data']; ?></textarea>
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