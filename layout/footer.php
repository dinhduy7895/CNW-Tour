<footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
      
  </footer>

  

</div>
<!-- jQuery 2.2.3 -->
<script src="http://localhost/CNW/Tour/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="http://localhost/CNW/Tour/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="http://localhost/CNW/Tour/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/CNW/Tour/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://localhost/CNW/Tour/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/CNW/Tour/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/CNW/Tour/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/CNW/Tour/dist/js/demo.js"></script>
<script src="http://localhost/CNW/Tour/plugins/multiselect/bootstrap-multiselect.js"></script>
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
  <script src="http://localhost/CNW/Tour/plugins/myJs/login.js"></script>

</body>
</html>