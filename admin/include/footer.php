</div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>



    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <!-- prismjs plugin -->
    <!-- <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script> -->
   
    <!-- listjs init -->
    <!-- <script src="assets/js/pages/listjs.init.js"></script> -->

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
   
    <!-- App js -->
    <script src="assets/js/app.js"></script>
   
    <!-- <script src="assets/js/dataTables.bootstrap4.min.js"></script> -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/fullcalendar.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
<!-- Include jQuery (required by Summernote) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Summernote JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {


//       function prepareDescription() {
//     // Get the HTML content from Summernote
//     var descriptionHtml = $('#DescrptionSumeernote').summernote('code');

//     // Set the value of the hidden input field with the HTML content
//     $('#descriptionHtmlInput').val(descriptionHtml);
// }


      $(".removeservice").click(function(e) {
        var url = './dbOperation/delete-data.php';
        var id = $(this).data('remove_id');

               if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
                url: url,
               type: "GET",
               data: {id: id},
               success: function(data) {
                alert("Record removed successfully");
                location.reload();  
               },
               error: function(err) {
                  alert("Failed to delete record.");
               },
            });
        }

       });


      $("#SelectType").change(function(){
              
              var data = $(this).val();
               if (data == "pest-control")
                {
                  $("#pestControl").show(); 
                  $("#pestControlBHK").show(); 
                  $("#pestControlService").show(); 
                  $("#homeCleaning").hide(); 
                  $("#homeCleaningBHK").hide(); 
                  $("#homeCleaningService").hide(); 
                }

            
                else if(data == "home-cleaning") 
                {
                  $("#pestControl").hide();
                  $("#pestControlBHK").hide();
                  $("#pestControlService").hide();
                  $("#homeCleaning").show();  
                  $("#homeCleaningBHK").show();  
                  $("#homeCleaningService").show();  
                }
              

          
               
                 
           });

        $('#DescrptionSumeernote').summernote({
            placeholder: 'Enter Description', // Placeholder text
            height: 150, // Set the height of the editor
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>

        <script>
       
          
       $(document).ready(function () {
       $('#customerTable').DataTable();
   });
   $(document).ready(function () {
       $('#customerTable2').DataTable();
   });

   function CloseAlert() {  
        $(".add1").hide();
        $(".edit1").hide();
}  

function GFGFun() {
   
                setTimeout(function() {
                    $('#TimerEdit').fadeOut('fast');
                }, 2000);
               
            }
      </script>
   
   <script>
  $(document).ready(function() {
    // Initialize FullCalendar
    $('#calendar').fullCalendar({
        events: events
    });
   
  var events = [
    {
      title: 'Event 1',
      start: '2023-07-31'
    },
    {
      title: 'Event 2',
      start: '2023-08-05'
    },
    // Add more events as needed
  ];


  // Initialize datepicker
  $('.datepicker').datepicker({
    format: 'yyyy-mm', // Format the date to 'YYYY-MM' (e.g., 2023-07)
    autoclose: true,
    viewMode: 'months',
    minViewMode: 'months'
  });


function fetchAttendanceData() {
  var selectedMonth = $('#datepicker').val();

  // Make an AJAX request to fetch attendance data for the selected month
  $.ajax({
    url: 'fetch_attendance.php', // Update the URL to your PHP file
    method: 'POST',
    data: { selected_month: selectedMonth },
    success: function(data) {
      $('#attendance-table-container').html(data);
    },
    error: function(err) {
      console.error('Error fetching attendance data:', err);
    }
  });
}



  });
</script>

       
         