    <!-- footer content -->
    <footer>
        <div class="pull-right">
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
   
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="{{ url('js/gauge/gauge.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/gauge/gauge_demo.js') }}"></script>
    <!-- bootstrap progress js -->
    <script src="{{ url('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- icheck -->
    <script src="{{ url('js/icheck/icheck.min.js') }}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{ url('js/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/datepicker/daterangepicker.js') }}"></script>
    <!-- chart js -->
    <script src="{{ url('js/chartjs/chart.min.js') }}"></script>

    <script src="{{ url('js/custom.js') }}"></script>
    <!-- /footer content -->

    <!-- Datatables-->
    <script src="{{ url('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('js/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('js/datatables/dataTables.fixedHeader.min.js') }}"> </script>
    <script src="{{ url('js/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ url('js/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('js/datatables/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ url('js/datatables/dataTables.scroller.min.js') }}"></script>

    <!-- pace -->
    <script src="{{ url('js/pace/pace.min.js') }}"></script>
    <script>
      var handleDataTableButtons = function() {
          "use strict";
          0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [{
              extend: "copy",
              className: "btn-sm"
            }, {
              extend: "csv",
              className: "btn-sm"
            }, {
              extend: "excel",
              className: "btn-sm"
            }, {
              extend: "pdf",
              className: "btn-sm"
            }, {
              extend: "print",
              className: "btn-sm"
            }],
            responsive: !0
          })
        },
        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons()
            }
          }
        }();
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });
      });
      TableManageButtons.init();
    </script>
