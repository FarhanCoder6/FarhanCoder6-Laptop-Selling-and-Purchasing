<?php include 'header.php';
if(isset($_SESSION['admin'])){
    $data1 = $_SESSION['admin'];
    $id = $data['id'];
    if(isset($_POST['btn-up'])){
        $name   = $_POST['name'];
        $email  = $_POST['email'];
        $ups = "update `admin` set `name` = '$name', `email` = '$email' where `id` = '$id'";
        $upsr = mysqli_query($con, $ups);

    }


    if(isset($_POST['btn-pass'])){
        $opass  = $_POST['opass'];
        $npass  = $_POST['npass'];

        $sk = "select * from `admin` where `pass` = '$opass' AND `id` = '$id'";
        $skt = mysqli_query($con, $sk);
        if(mysqli_num_rows($skt) > 0){
            $update_password = "update `admin` set `pass` = '$npass' where `id` = '$id'";
            if(mysqli_query($con, $update_password)){
            $msg = "<div class='alert alert-success'>Password Update successfully.</div>";
            header("refresh:5, url=logout.php");

            }else{

            $msg = "<div class='alert alert-danger'>Password Not Update.</div>";
            }
        }else{
            $msg = "<div class='alert alert-danger'>Password Not Match with this Account.</div>";
            header("refresh:5, url=profile.php");
        }

    }

    if(isset($_POST['btn-img'])){
        $image      = $_FILES['image']['name'];
        $tmp_name   = $_FILES['image']['tmp_name'];
        $dir        = 'uploads/';

        $update_img = "update `admin` set `image` = '$image' where `id` = '$id'";
        if(mysqli_query($con, $update_img)){
            move_uploaded_file($tmp_name, $dir.$image);
            $msg1 = "<div class='alert alert-success'>Profile Image Update successfully :) </div>";
            header("refresh:4, url=profile.php");
        }else{
            $msg1 = "<div class='alert alert-danger'>Image Not Update.</div>";
        }
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
                        <?php if (isset($_SESSION['admin'])) {
                            $data = $_SESSION['admin'];
                            $id = $data['id'];
                            $sql = "select * from `admin` where `id` = '$id'";
                            $sqlr = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($sqlr);
                        }
                        ?>
                    <div class="col-md-4">
                        <h2>Personal Information</h2>
                        <form method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="<?php echo $row['email']; ?>" class="form-control" name="email">
                            </div>
                            
                            <button class="btn btn-info btn-raised" type="submit" name="btn-up">Update Info</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h2>Update Password</h2>
                        <?php if(isset($msg)){echo $msg;} ?>

                        <form method="post">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" name="opass">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="npass">
                            </div>
                            
                            <button class="btn btn-info btn-raised" type="submit" name="btn-pass">Update Password</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h2>Update Profile Image</h2>
                        <?php if(isset($msg1)){echo $msg1;} ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-md-12" style="margin: 0 auto; float: none; text-align: center;">
                                <img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-circle" style="max-width:200px; max-height: 170px; min-height: 150px; ">
                            </div>

                            <div class="form-group">
                                <span class="btn btn-raised btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Choose Profile Image...</span>
                                                <input type="file" name="image" multiple>
                                            </span>
                            </div>
                            
                            
                            <button class="btn btn-info btn-raised" type="submit" name="btn-img">Update Profile Image</button>
                        </form>
                    </div>
                    
                </div>
               </div>
        </section>
    </div>
   <?php include 'footer.php'; ?>