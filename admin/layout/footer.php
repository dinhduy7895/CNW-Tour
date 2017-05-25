<footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
      
  </footer>

  

</div>
<!-- jQuery 2.2.3 -->
<script src="<?php echo $_SESSION['root'] ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $_SESSION['root'] ?>plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $_SESSION['root'] ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $_SESSION['root'] ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $_SESSION['root'] ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $_SESSION['root'] ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $_SESSION['root'] ?>plugins/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $_SESSION['root'] ?>plugins/dist/js/demo.js"></script>
<script src="<?php echo $_SESSION['root'] ?>plugins/multiselect/bootstrap-multiselect.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
     
      "searching": false,
      
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#select').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            selectAllJustVisible: false
        });
    });
</script>
  <script src="<?php echo $_SESSION['root'] ?>plugins/myJs/login.js"></script>

</body>
</html>