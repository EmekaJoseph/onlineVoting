<div class=" row w-100 justify-content-center footer">
    &copy;&nbsp;2020 iProffix | 08139590011
</div>
</body>
<script src="../vendor/fonts/font-awesome-5.15.1/js/all.js"></script>
<script src="../vendor/jquery/jquery-3.5.1.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/js/moment.min.js"></script>
<script src="../vendor/js/sweetalert2.js"></script>
<!-- <script src="/vendor/js/custom/voterControl.js"></script> -->
<script src="/vendor/js/custom/System.js"></script>
<!-- <script src="../vendor/js/datatables.js"></script> -->
<script src="../vendor/js/dataTables.bootstrap4.min.js"></script>
<script src="../vendor/js/jquery.dataTables.js"></script>
<script src="../vendor/calendar/main.js"></script>
<script src="../vendor/js/custom/adminControl.js"></script>

<script>
    var adminDetails = JSON.parse(localStorage.getItem('admin'));
    if (adminDetails.role == "admin") {
        $("#positionInput").prop('disabled', true);
        $("#positionBtn").prop('disabled', true);
        $("#settingsId").hide();
        $("#editingCandidatesId").hide();
        $("#positionsTable").hide();

        // $('.deletePst').each(function(i, obj) {
        //     obj.prop('disabled', true);
        // })

        // document.getElementById("editUsersLink").style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
            eventClick: function (arg) {
                // opens events in a popup window
                window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');
                arg.jsEvent.preventDefault() // don't navigate in main tab
            },
        });

        calendar.render();
    });

</script>

</html>