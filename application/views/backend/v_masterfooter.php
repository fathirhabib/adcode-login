  <?php $a = $application->row_array();?>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b><?= cetak($a['fullname_aplikasi']);?></b> <?= cetak($a['versi_aplikasi']);?>
    </div>
    <strong>Hak Cipta &copy; <?= date('Y');?>  <a href="<?= cetak($a['url_hakcipta']);?>"><img src="<?= base_url('files/images/logokominfo.png');?>" height="25" alt=""></a> <?= cetak($a['hak_cipta']);?></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

      </div>

    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('template/adminlte/bower_components/');?>jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('template/adminlte/bower_components/');?>jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('template/adminlte/bower_components/');?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('template/adminlte/bower_components/');?>raphael/raphael.min.js"></script>
<script src="<?= base_url('template/adminlte/bower_components/');?>morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('template/adminlte/bower_components/');?>jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url('template/adminlte/plugins/');?>jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('template/adminlte/plugins/');?>jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('template/adminlte/bower_components/');?>jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('template/adminlte/bower_components/');?>moment/min/moment.min.js"></script>
<script src="<?= base_url('template/adminlte/bower_components/');?>bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url('template/adminlte/bower_components/');?>bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('template/adminlte/plugins/');?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url('template/adminlte/bower_components/');?>jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('template/adminlte/bower_components/');?>fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('template/adminlte/dist/');?>js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('template/adminlte/dist/');?>js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('template/adminlte/dist/');?>js/demo.js"></script>

<script src="<?= base_url('template/adminlte/bower_components/');?>datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('template/adminlte/bower_components/');?>datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?= base_url('template/sweetalert');?>/sweetalert2.all.min.js"></script>
<script src="<?= base_url('template/sweetalert');?>/myscript.js"></script>
</body>
</html>