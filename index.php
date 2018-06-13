<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <!-- Base Css Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom Files -->
  <link href="css/helper.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel='stylesheet' href='assets/fullcalendar/fullcalendar.css' />
  <link href="favicon.ico" rel="icon" type="image/x-icon" />

</head>

<body class="fixed-left">

  <div id="wrapper">
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container">
          <div id='calendar'></div>
        </div> <!-- container -->
      </div> <!-- content -->
    </div>

  </div>
  <!-- END wrapper -->

  <script>
  var resizefunc = [];
  </script>
  <!-- jQuery  -->
  <script src="js/jquery.min.js"></script>''
  <script src="js/bootstrap.min.js"></script>

  <script src='assets/fullcalendar/moment.js'></script>
  <script src='assets/fullcalendar/fullcalendar.js'></script>

  <script>

  $(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
      editable:false,
      header:{
        left: 'month,agendaWeek,agendaDay custom1',
        center: 'title',
        right: 'custom2 prevYear,prev,next,nextYear,listWeek'
      },
      events: "load.php",
      eventRender: function(event, element) {
        $(element).tooltip({html: true, title: event.title});
      },
      eventAfterRender: function (event, element, view) {
        if (event.sts == 1) {
          element.css('background-color', '#7a7a7a');
        } else if(event.sts == 2) {
          event.color = "#0060b5";
          element.css('background-color', '#0060b5');
        }else if (event.sts == 3) {
          event.color = "#6e61f9";
          element.css('background-color', '#6e61f9');
        }else{}
      },
    });
  });

  </script>

</body>
</html>
