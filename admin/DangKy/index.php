<?php
require_once '../layout/header.php';
require_once '../layout/left.php';
require_once './_search.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="pull-left">
            <div class="title" >
                <h1>ADDRESS MANAGER</h1>
            </div>
        </div>
        <?php if (isset($_SESSION['mess'])) { ?>
            <div class="search alert alert-success">
                <a class="close" href="#">&times;</a>
                <p><strong>SUCCESS!!! </strong><?php echo $_SESSION['mess']; ?></p>
            </div>
            <?php
            unset($_SESSION['mess']);
        }
        ?>

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
                                <th>MaKH</th>
                                <th>Ten Khach Hang</th>
                                <th>Tour</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr >
                                <td> <input type='text' name='id'></td>
                                <td> <input type='text' name='maKH'></td>
                                <td> <input type='text' name='nameKH'></td>
                                <td> <input type='text' name='tour'></td>
                                <td><button type="submit" name="search"> Search</button></td>
                            </tr>
                            <?php while ($row = $adrress_stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class="row">
                                        <a class="btn btn-default action col-lg-4" href="view.php?id=<?php echo $row['id']; ?>"> VIEW</a> 
                                        <a data-toggle="modal" data-target="#myModal<?php echo $row['id']; ?>" class="btn btn-default col-lg-4">DELETE </a>
                                        <div <?php echo "id='myModal" . $row['id'] . "'"; ?> class="modal fade" role="dialog">
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