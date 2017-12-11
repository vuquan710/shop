<?php 
ob_start();
include_once'view/layouts/header.php';
require 'model/dbCon.php';
$id =  $_GET['id'];
$sql = "SELECT * FROM Categories WHERE id ='$id'";
$req = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($req);

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    var_dump($name);
    $sql = "UPDATE Categories SET category_name='$name' WHERE id='$id' ";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('location:category.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" value="<?=$row['category_name']?>" placeholder="Please Enter Category Name" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Save</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php 
include('view/layouts/footer.php');
?>
