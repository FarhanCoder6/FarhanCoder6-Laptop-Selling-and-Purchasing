<?php include 'header.php';
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "delete from `item` where `id` = '$id'";
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
                            <h1 class="h3 m-0">Dashboard</h1>
                            <small class="text-muted">Welcome to Falcon application</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>

                            </tr>    
                        </thead>
                        <tbody>
                            <?php 
                            $gtotal = "0";
                                if(isset($_GET['d'])){
                                    $idd = $_GET['d'];
                                    $sql = "select * from `purchase_details` where `purchase_id` = '$idd'";
                                    $sqlr = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($sqlr)) {
                                        $pid = $row['product_id'];
                                        $psql = "select * from `item` where `id` = '$pid'";
                                        $psqlr = mysqli_query($con, $psql);
                                        $prow = mysqli_fetch_array($psqlr);
                                    ?>
                            <tr>
                                <td><img src="uploads/<?php echo $prow['image']; ?>" style="width:160px;" alt=""></td>
                                <td><?php echo $prow['name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td>RS <?php echo $row['unit_cost']; ?></td>
                                <td><?php echo $sub = $row['subtotal']; $gtotal = $gtotal + $sub;  ?></td>
                                    
                            </tr>
                        <?php } } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Grand Total</td>
                            <td><?php echo $gtotal; ?></td>
                        </tr>
                        </tbody>
                        

                    </table>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>