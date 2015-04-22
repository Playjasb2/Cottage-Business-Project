<!DOCTYPE html>
<html>
<head>
    <title>Minimum Setup</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="calendar/css/calendar.css">
</head>
<body>

    <div id="calendar"></div>

    <script type="text/javascript" src="calendar/js/vendor/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="calendar/js/vendor/underscore-min.js"></script>
    <script type="text/javascript" src="calendar/js/calendar.js"></script>
    <script type="text/javascript">
        var calendar = $("#calendar").calendar(
            {
                tmpl_path: "/tmpls/",
                events_source: function () { return []; }
            });         
    </script>
</body>
</html>