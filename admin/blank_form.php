<?php include 'header.php'; ?>
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
                    <div class="col-md-5">
                        <form method="post">
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
                                                <span>Add files...</span>
                                                <input type="file" name="files[]" multiple>
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