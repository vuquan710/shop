<?php
ob_start();
include('view/layouts/header.php');
require 'model/dbCon.php';
$sql = "SELECT * FROM Categories";
$req = mysqli_query($conn, $sql);
if (isset($_POST['submit'])) {
	$name =  $_POST['name'];
	$price =  $_POST['price'];
	$cate =  $_POST['cate'];
	$sql = "INSERT INTO `products`(category_id,product_name,price) VALUES ('$cate','$name','$price')";
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			header('location:product.php');
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
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                        	<div class="form-group">
                        		<label>Category</label>
                        		<select name="cate" class="form-control">
                        			<?php while ($row = mysqli_fetch_assoc($req)) { ?>
                        			<option value="<?=$row['id']?>"><?=$row['category_name']?></option>
                        			<?php }; ?>
								</select>
                        	</div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" required placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" required placeholder="Please Enter Password" />
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