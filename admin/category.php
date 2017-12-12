<?php 
include 'view/layouts/header.php';
require 'model/dbCon.php';
$sql = "SELECT * FROM Categories";
$req = mysqli_query($conn, $sql);
$id =1;
?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($req)) { ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$id++ ?></td>
                                <td><?= $row['category_name']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm (' Có muốn xóa k?')" href="deleteCate.php?id=<?=$row['id']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="editCate.php?id=<?=$row['id']?>">Edit</a></td>
                            </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
	        </div>
<?php 
include('view/layouts/footer.php');
?>
