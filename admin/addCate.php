<?php
ob_start();
include('view/layouts/header.php');
require 'model/dbCon.php';

if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $sql = "INSERT INTO `categories`(`category_name`) VALUES ('$name')";
   if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:category.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                            </div>
                            <button name="submit" type="submit" class="btn btn-default">Save</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php include('view/layouts/footer.php'); ?>