<?php
include ('inc/connection.php');

// make the action when user click on Save Button
if(isset($_POST['submit'])){


    $image_name = $_FILES['cat_image']['name'];
    $tmp_name   = $_FILES['cat_image']['tmp_name'];
    $path       = 'images/admin_images/';


     // move image to folder
  move_uploaded_file($tmp_name,$path.$image_name);
   


  // Take Data From Web Form 
  $name=$_POST['cat_name'];



//insert a new data into category
  $query = "insert into categories (name,cat_image)
            values('$name','$path$image_name')";
     
  mysqli_query($conn,$query);
}



?>




<?php include ('inc/header.php') ?>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index-2.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal" >Add Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add a new category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="needs-validation" action="" method="post" enctype="multipart/form-data" >
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                                <input class="form-control" id="validationCustom01" type="text" name="cat_name">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                                <input class="form-control" id="validationCustom02" type="file" name="cat_image" >
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                    <input class="btn btn-primary" type="submit" name="submit" placeholder="SUBMIT">
                                                    <!-- <button class="btn btn-secondary" type="submit" data-dismiss="modal">Close</button>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                                     <span id="payment-button-amount">Create</span> </button> -->
                                                </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="basicScenario" class="product-physical">
     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        <?php include ('inc/footer.php') ?>