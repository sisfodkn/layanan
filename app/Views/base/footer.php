  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/vendor/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url('assets/vendor/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url('assets/vendor/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/jszip/jszip.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/pdfmake/pdfmake.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/pdfmake/vfs_fonts.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
  <script>
    $(function() {
      $("#tableUnitkerja").DataTable({
        "pageLength": 20,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tableUnitkerja_wrapper .col-md-6:eq(0)');

      $("#tableJabatan").DataTable({
        "pageLength": 20,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tableJabatan_wrapper .col-md-6:eq(0)');

      $("#tableRuangan").DataTable({
        "pageLength": 20,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tableRuangan_wrapper .col-md-6:eq(0)');

    });
  </script>

  </body>

  </html>