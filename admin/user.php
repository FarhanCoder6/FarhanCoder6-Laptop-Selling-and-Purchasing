<?php include 'header.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sqll = "delete from `tbl_user` where `id` = '$id'";
    if (mysqli_query($con, $sqll)) {
        header("refresh:2, url=user.php");
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
                            <h1 class="h3 m-0">User's</h1>
                            <small class="text-muted">Welcome to User's</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php 
                                    $sql = "select * from `tbl_user`";
                                    $sqlr = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($sqlr)) {
                                    ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="user.php?del=<?php echo $row['id']; ?>" class="btn btn-default">Delete</a>

                            </tr>
                        <?php } ?>
                        </tbody>
                        

                    </table>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>