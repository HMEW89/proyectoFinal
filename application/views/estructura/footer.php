  <!-- Footer Section Start -->
  <!-- Footer Section End --> </main>




  <!-- Library Bundle Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/core/libs.min.js"></script>

  <!-- External Library Bundle Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/core/external.min.js"></script>

  <!-- Widgetchart Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/charts/widgetcharts.js"></script>

  <!-- mapchart Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/charts/vectore-chart.js"></script>
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/charts/dashboard.js"></script>

  <!-- fslightbox Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugins/fslightbox.js"></script>

  <!-- Settings Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugins/setting.js"></script>

  <!-- Slider-tab Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugins/slider-tabs.js"></script>

  <!-- Form Wizard Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugins/form-wizard.js"></script>

  <!-- AOS Animation Plugin-->

  <!-- App Script -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/hope-ui.js" defer></script>

  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/core/bootstrap.min.js"></script>
  <!-- jQuery UI -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
  <!-- Bootstrap Toggle -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <!-- jQuery Scrollbar -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Azzara JS -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/ready.min.js"></script>
  <!-- Azzara DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url(); ?>adminTemplate/assets/js/setting-demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tabla').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('#basic-datatables').DataTable({});

      $('#multi-filter-select').DataTable({
        "pageLength": 5,
        initComplete: function() {
          this.api().columns().every(function() {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '', true, false)
                  .draw();
              });

            column.data().unique().sort().each(function(d, j) {
              select.append('<option value="' + d + '">' + d + '</option>')
            });
          });
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
        ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
  </body>

  </html>