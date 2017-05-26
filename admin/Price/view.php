<?php
require './_checkId.php';
require_once '../layout/header.php';
require_once '../layout/left.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="pull-left">
            <div class="title" >
                <h1><?php include './viewTour.php'; ?></h1>
            </div>
        </div>
        <div class="view">
            <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Update</a>    
            <a data-toggle="modal" data-target="#myModal" class="btn btn-danger">DELETE </a>
            <div id="myModal" class="modal fade" role="dialog">
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
            <table class="table table-striped table-bordered detail-view">
                <tr>
                    <td>Id</td>
                    <td><?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td>Tour</td>
                    <td><?php include './viewTour.php'; ?></td>
                </tr>
                <tr>
                    <td>From 1 to 2</td>
                    <td><?php echo $row['f1t2']; ?></td>
                </tr>
                
                <tr>
                    <td>From 3 to 5</td>
                    <td><?php echo $row['f3t5']; ?></td>
                </tr>
                 <tr>
                    <td>From 3 to 5</td>
                    <td><?php echo $row['over5']; ?></td>
                </tr>
                <tr>
                    <td>Over 5</td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td><?php echo $row['updated_at']; ?></td>
                </tr>
            </table>
        </div>
    </section>
</div>
<?php
require_once '../layout/footer.php';
?>