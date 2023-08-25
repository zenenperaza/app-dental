    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
        <!--Bootstrap Datetimepicker component-->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/bootstrap-datetimepicker/tempusdominus-bootstrap-4.js"></script>
    <!-- Datatables component-->
    <script src='plugins/datatables/datatables.min.js'></script>
    <script>
        $(document).ready(function() {
            //table element
            var table = $('#datatable').DataTable({
                // "dom": 'lrtip'
            });
            //datetime picker
            $('#datetimepicker7').datetimepicker();
            $('#datetimepicker8').datetimepicker({
                useCurrent: false
            });
            $("#datetimepicker7").on("change.datetimepicker", function(e) {
                $('#datetimepicker8').datetimepicker('minDate', e.date);
            });
            $("#datetimepicker8").on("change.datetimepicker", function(e) {
                $('#datetimepicker7').datetimepicker('maxDate', e.date);
            });
            //Custom filtering function which will search data in column four between two values 
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var min = parseInt($('#age_min').val(), 10);
                    var max = parseInt($('#age_max').val(), 10);
                    var age = parseFloat(data[3]) || 0; // use data for the age column
                    if ((isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && age <= max) ||
                        (min <= age && isNaN(max)) ||
                        (min <= age && age <= max)) {
                        return true;
                    }
                    return false;
                }
            );
            $('#filter').on('click', function(e) {
                e.preventDefault();
                // Manually redraw the table after filtering
                table.draw();
            });
            // Clear the filter. 
            $('#clearFilter').on('click', function(e) {
                e.preventDefault();
                $('#datatables_searchform')[0].reset();
                table.draw();
            });
        });
    </script>
    <!-- inicio calendario -->
    <script src='plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src='plugins/fullcalendar/gcal.min.js'></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $(function() {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,listYear'
                    },
                    googleCalendarApiKey: 'AIzaSyC57jOkmvJllvtzVxDw6O4o1rn_9C1dIIs',
                    events: {
                        googleCalendarId: 'themeforest@inspiro-media.com',
                    }
                });
            });
        });
    </script>
    <!-- fin calendario -->
    
   