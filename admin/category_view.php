<?php include 'header.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "delete from `tbl_category` where `id` = '$id'";
    if (mysqli_query($con, $sql)) {
        header("refresh:2, url=category_view.php");
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
                            <h1 class="h3 m-0">View Categories</h1>
                            <small class="text-muted">Welcome to View Categories</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>category</th>
                                <th>Images</th>
                                <th>Action</th>
                                
                            </tr>    
                        </thead>
                        <tbody>
                            <?php 
                                    $sql = "select * from `tbl_category`";
                                    $sqlr = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($sqlr)) {
                                    ?>
                            <tr>
                                <td> <a href="cat_view.php?vie=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                                <td>
                                    <a href="uploads/<?php echo $row['image']; ?>" target="blank">
                                        <img src="uploads/<?php echo $row['image']; ?>" style="width:40px;" alt="">
                                    </a>
                                </td>
                                <td><a href="category_view.php?del=<?php echo $row['id']; ?>" class="btn btn-default">Delete</a>
                                <a href="update_designer.php?up=<?php echo $row['id']; ?>">Update</a>
                                </td>                                                                                 

                            </tr>
                        <?php } ?>
                        </tbody>
                        

                    </table>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>