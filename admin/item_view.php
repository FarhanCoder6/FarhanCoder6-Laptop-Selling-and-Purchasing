<?php include 'header.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "delete from `tbl_item` where `id` = '$id'";
    if (mysqli_query($con, $sql)) {
        header("refresh:2, url=item_view.php");
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
                            <h1 class="h3 m-0">View Items</h1>
                            <small class="text-muted">Welcome to View items</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php 
                                    $sql = "select * from `tbl_item`";
                                    $sqlr = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($sqlr)) {
                                    ?>
                            <tr>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['company']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><a href="item_view.php?del=<?php echo $row['id']; ?>" class="btn btn-default">Delete</a>
                                <a href="update_item.php?up=<?php echo $row['id']; ?>" class="btn btn-danger">Update</a></td>

                            </tr>
                        <?php } ?>
                        </tbody>
                        

                    </table>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>