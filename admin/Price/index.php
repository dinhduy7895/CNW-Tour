<?php
require_once '../layout/header.php';
require_once '../layout/left.php';
include('../connect/connect.php');
require_once './_search.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="pull-left">
            <div class="title" >
                <h1>PRICE MANAGER</h1>
            </div>
        </div>
        <?php
        if (isset($_SESSION['mess'])){?>
                <div class="search alert alert-success">
                    <a class="close" href="#">&times;</a>
                    <p><strong>SUCCESS!!! </strong><?php echo $_SESSION['mess']; ?></p>
                </div>
            <?php 
            unset($_SESSION['mess']);
        } ?>
        <div class="create">
            <a class="btn btn-success" href="create.php">Create Price</a>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hover Data Table </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action='' method="get">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tour</th>
                                <th>1-2</th>
                                <th>3-5</th>
                                <th>Over 5</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td> <input type='text' name='id'></td>
                                <td> <input type='text' name='tour' readonly="readonly"></td>
                                <td> <input type='text' name='f1t2'></td>
                                <td> <input type='text' name='f3t5'></td>
                                <td> <input type='text' name='over5'></td>
                                <td><button type="submit" name="search"> Search</button></td>
                            </tr>
                            <?php while ($row = $stmtPrice->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php include './viewTour.php'; ?></td>
                                    <td><?php echo $row['f1t2']; ?></td>
                                    <td><?php echo $row['f3t5']; ?></td>
                                    <td><?php echo $row['over5']; ?></td>
                                    <td>
                                        <a class="btn btn-default action" href="view.php?id=<?php echo $row['id']; ?>"> VIEW</a> 
                                        <a class="btn btn-default action" href="update.php?id=<?php echo $row['id']; ?>"> UPDATE</a> 
                                        <a data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" class="btn btn-default">DELETE </a>
                                        <div id="<?php echo 'myModal'.$row['id'];?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p>Bạn có chắc chắn xóa không ?.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                      <a  class="action btn btn-default" href="delete.php?id=<?php echo $row['id']; ?>"> YES</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </section>
</div>
<?php
require_once '../layout/footer.php';
?>