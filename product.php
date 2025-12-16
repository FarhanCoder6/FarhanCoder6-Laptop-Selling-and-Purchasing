<?php include('header.php'); 
      
?>
        <!-- Category Grid View Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body"  style="margin-top: 111px;">
            <div class="container">
                <div class="breadcrumbs-area">
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li class="active">All ads</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="gradient-wrapper item-mb">
                            <div class="gradient-title">
                                <div class="row">
                                    <div class="col-4">
                                        <h2>All Ads</h2>
                                    </div>
                                    <div class="col-8">
                                        <div class="layout-switcher">
                                            <ul>
                                                <li>
                                                    <div class="page-controls-sorting">
                                                        <button class="sorting-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Sort By<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Date</a>
                                                            <a class="dropdown-item" href="#">Best Sale</a>
                                                            <a class="dropdown-item" href="#">Rating</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="active"><a class="product-view-trigger" href="#" data-type="category-grid-layout1"><i class="fa fa-th-large"></i></a></li>
                                                <li><a href="#" data-type="category-list-layout1" class="product-view-trigger"><i class="fa fa-list"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="category-view" class="category-grid-layout1 gradient-padding zoom-gallery">
                                <div class="row">
                                        <?php 



                                            if(isset($_GET['id'])){
                                            $id = $_GET['id'];

                                            $sel_qry = "select * from `tbl_item` where `category`='$id'";
                                            $res_sel =mysqli_query($con,$sel_qry);
                                            while($sel_row=mysqli_fetch_array($res_sel)){

                                            $iddd = $sel_row['id'];

                                            $qry_sel = "select * from `tbl_gallery` where `product_id`='$iddd'";
                                            $sel_res =mysqli_query($con,$qry_sel);
                                            $rows=mysqli_fetch_array($sel_res);

                                        ?>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                        <div class="product-box item-mb zoom-gallery">
                                            <div class="item-mask-wrapper">
                                                <div class="item-mask secondary-bg-box"><img src="uploads/<?php echo $rows['photo']; ?>" alt="photo" class="img-fluid">
                                                    <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                    <div class="title-ctg"><?php echo $sel_row['title']; ?></div>
                                                    <ul class="info-link">
                                                        <li><a href="" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                        <li><a href="single.php?id=<?php echo $sel_row['id'];?>"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <div class="symbol-featured active"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="short-title"><a href=""><?php echo $sel_row['title']; ?></a></h3>
                                                <h3 class="long-title"><a href=""></a></h3>
                                                <ul class="upload-info">
                                                    <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                    <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $sel_row['location']; ?></li>
                                                    <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i></li>
                                                </ul>
                                                <div class="price">Rs <?php echo $sel_row['price']; ?></div>
                                                <a href="" class="product-details-btn"></a>
                                            </div>
                                        </div>
                                    </div>
											<?php }} ?>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="gradient-wrapper mb-60">
                            <ul class="cp-pagination">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">Next<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="add-layout2-left d-flex align-items-center">
                                    <div>
                                        <h2>Do you Have Something To Sell?</h2>
                                        <h3>Post your ad on classipost.com</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="add-layout2-right d-flex align-items-center justify-content-end mb--sm">
                                    <a href="post-ad.php" class="cp-default-btn-sm-primary">Post Your Ad Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-xl-1 order-lg-1 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-item-box">
                            <div class="gradient-wrapper">
                                <div class="gradient-title">
                                    <h3>All Categories</h3>
                                </div>
                                <?php 

                                    $query = "select * from `tbl_category`";
                                    $result = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result)){
                                 ?>
                                <ul class="sidebar-category-list">
                                    <li>
                                        <a href="product.php?id=<?php echo $row['id']; ?>"><img src="admin/uploads/<?php echo $row['image']; ?>" alt="category" class="img-fluid" style="hight:50px;width:80px;"><?php echo $row['name']; ?></a>
                                    </li>
                                    
                                </ul>
                            <?php } ?>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Grid View End Here -->
   
   <?php include('footer.php'); ?>