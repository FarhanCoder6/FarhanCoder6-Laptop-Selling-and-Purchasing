<?php include 'header.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "delete from `category` where `id` = '$id'";
    if (mysqli_query($con, $sql)) {
        header("refresh:2, url=cat_view.php");
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
                            <h1 class="h3 m-0">View Categorys</h1>
                            <small class="text-muted">Welcome to View Categorys</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>category</th>
                                
                            </tr>    
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($_GET['vie'])){
                                $id = $_GET['vie'];
                                    $sql = "select * from `category` where `designer` = '$id'";
                                    $sqlr = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($sqlr)) {
                                    ?>
                            <tr>
                                <td> <?php echo $row['category']; ?></td>
                                <td>
                                    <img src="uploads/<?php echo $row['image']; ?>" style="width:120px;" alt="">
                                </td>
                                <td><a href="cat_view.php?del=<?php echo $row['id']; ?>" class="btn btn-default">Delete</a>
                                <a href="update_category.php?up=<?php echo $row['id']; ?>">Update</a>
                                </td>                                                                                 

                            </tr>
                        <?php } } ?>
                        </tbody>
                        

                    </table>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>