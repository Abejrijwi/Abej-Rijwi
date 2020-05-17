</div>
<!-- jQuery-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Malihu Scrollbar-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Animo.js-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/animo.js/animo.min.js"></script>
<!-- Bootstrap Progressbar-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- DataTables-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/jszip/dist/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/pdfmake/build/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<!-- Custom JS-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>build/js/second-layout/app.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>build/js/second-layout/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>build/js/page-content/tables/data-tables.js"></script>

<!-- jQuery Easy Pie Chart-->
<script type="text/javascript" src="<?php echo base_url("public/admin/"); ?>plugins/toastr/toastr.min.js"></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<script type='text/javascript'>
    $(function () {
        $('.input-group.date').datepicker({
            calendarWeeks: true,
            todayHighlight: true,
            autoclose: true
        });
    });

</script>
<script>
    $(document).ready(function () {
        $(".successmsg").delay(5000).slideUp(300);
    });
</script>
</body>
</html>