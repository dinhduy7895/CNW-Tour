<?php
require './_checkId.php';
require_once '../layout/header.php';
require_once '../layout/left.php';

?>
<div class="content-wrapper">
    <section class="content">
        <div class="pull-left">
            <div class="title" >
                <h1>USER MANAGER</h1>
            </div>
        </div>
        <div class="update" >  
                <?php require './_form.php'; ?>
        </div>


    </section>
</div>
<?php
require '../layout/footer.php';
?>
