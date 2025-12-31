<?php
include('header.php');
?>
        <!-- Products Area Start Here -->
        <section class="s-space-bottom-full bg-accent-shadow-body" style="margin-top: 132px;">
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
                                                <!-- <li>
                                                    <div class="page-controls-sorting">
                                                        <button class="sorting-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Sort By<i class="fa fa-sort" aria-hidden="true"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Date</a>
                                                            <a class="dropdown-item" href="#">Best Sale</a>
                                                            <a class="dropdown-item" href="#">Rating</a>
                                                        </div>
                                                    </div>
                                                </li> -->
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

                                        $query_cat = "select * from `tbl_item`";
                                        $result_cat = mysqli_query($con,$query_cat);
                                        while($row=mysqli_fetch_array($result_cat)){


                                       $ids = $row['id'];
                                       $query = "select * from `tbl_gallery` where `product_id`='$ids'";
                                       $result = mysqli_query($con,$query);
                                       $rows = mysqli_fetch_array($result);
                                     ?>
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                        <div class="product-box item-mb zoom-gallery">
                                            <div class="item-mask-wrapper">
                                                <div class="item-mask secondary-bg-box"><img src="uploads/<?php echo $rows['photo'];?>"  alt="categories" class="img-fluid" style="height: 190px;">
                                                    <div class="trending-sign" data-tips="Featured"> <i class="fa fa-bolt" aria-hidden="true"></i> </div>
                                                    <div class="title-ctg"><?php echo $row['title']; ?></div>
                                                    <ul class="info-link">
                                                        <li><a href="uploads/<?php echo $rows['photo'];?>" class="elv-zoom" data-fancybox-group="gallery" title="Title Here"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                                        <li><a href="single.php?id=<?php echo $row['id'];?>"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <div class="symbol-featured active"><img src="img/banner/symbol-featured.png" alt="symbol" class="img-fluid"> </div>
                                                </div>
                                            </div>
                                            <div class="item-content">
                                                <div class="title-ctg"><?php echo $row['category']; ?></div>
                                                <h3 class="short-title"><a href=""><?php echo $row['title']; ?></a></h3>
                                                <ul class="upload-info">
                                                    <li class="date"><i class="fa fa-clock-o" aria-hidden="true"></i>07 Mar, 2017</li>
                                                    <li class="place"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $row['location']; ?></li>
                                                    <li class="tag-ctg"><i class="fa fa-tag" aria-hidden="true"></i><?php echo $row['category']; ?></li>
                                                </ul>
                                                <div class="price">Rs.<?php echo $row['price']; ?></div>
                                                <a href="" class="product-details-btn">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                
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
                                        <a href="product.php?id=<?php echo $row['id']; ?>"><img src="admin/uploads/<?php echo $row['image']; ?>" alt="category" class="img-fluid" style="width:50px; height:35px;"><?php echo $row['name']; ?></a>
                                    </li>
                                    
                                </ul>
                            <?php } ?>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Area End Here -->
       
        
        <!-- Selling Process Area Start Here -->
        <section class="bg-accent s-space-regular">
            <div class="container">
                <div class="section-title-dark">
                    <h2>How To Start Selling Your Products</h2>
                    <p>It’s very simple to choose pricing &amp; level of exposure on pricing page</p>
                </div>
                <ul class="process-area">
                    <li>
                        <img src="img/banner/process1.png" alt="process" class="img-fluid">
                        <h3>Upload Your Products</h3>
                        
                    </li>
                    <li>
                        <img src="img/banner/process2.png" alt="process" class="img-fluid">
                        <h3>Set Your Price</h3>
                        
                    </li>
                    <li>
                        <img src="img/banner/process3.png" alt="process" class="img-fluid">
                        <h3>Start Your Business</h3>
                        
                    </li>
                </ul>
            </div>
        </section>
        <!-- Selling Process Area End Here -->
      <?php include('footer.php'); ?>