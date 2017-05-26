<?php
require './_checkId.php';
require_once '../layout/header.php';
require_once '../layout/left.php';
?>
<div class="content-wrapper">
    <section class="content">
        <div class="pull-left">
            <div class="title" >
                <h1><?php echo $row['Name']; ?></h1>
            </div>
        </div>
        <div class="view">
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
                    <td><?php echo $row['Id']; ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?php echo $row['Name']; ?></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><?php echo $row['Email']; ?></td>
                </tr>
                <tr>
                    <td>FirstName</td>
                    <td><?php echo $row['FirstName']; ?></td>
                </tr>
                <tr>
                    <td>LastName</td>
                    <td><?php echo $row['LastName']; ?></td>
                </tr>
                <tr>
                    <td>YearOld </td>
                    <td><?php echo $row['YearOld']; ?></td>
                </tr>
                <tr>
                    <td>PhoneNumber</td>
                    <td><?php echo $row['PhoneNumber']; ?></td>
                </tr>
            </table>
        </div>
    </section>
</div>
<?php
require_once '../layout/footer.php';
?>