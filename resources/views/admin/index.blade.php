<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Availability Calendar Plugin Demo</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/availability-calendar.css" rel="stylesheet" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <style>
        body { font-family:'Open Sans'; background-color:#ECF0F1;}
        .container { max-width:60%; margin:150px auto;}
    </style>
</head>

<body><div id="jquery-script-menu">
    <div class="jquery-script-center">
        <ul>
            <li><a href="http://www.jqueryscript.net/time-clock/Simple-Responsive-Availability-Calendar-Plugin-For-jQuery.html">Download This Plugin</a></li>
            <li><a href="http://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
        </ul>
        <div class="jquery-script-ads"><script type="text/javascript"><!--
                google_ad_client = "ca-pub-2783044520727903";
                /* jQuery_demo */
                google_ad_slot = "2780937993";
                google_ad_width = 728;
                google_ad_height = 90;
                //-->
            </script>
            <script type="text/javascript"
                    src="//pagead2.googlesyndication.com/pagead/show_ads.js">
            </script></div>
        <div class="jquery-script-clear"></div>
    </div>
</div>
<div class="container">
    <h1 style="margin-bottom:50px;">jQuery Availability Calendar Plugin Demo</h1>
    <div id="calendar"></div>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/availability-calendar.js"></script>
<script>
    var unavailableDates = [
        {start: '2015-08-31', end: '2015-09-05'},
        {start: '2015-09-11', end: '2015-09-15'},
        {start: '2015-09-15', end: '2015-09-23'},
        {start: '2015-10-01', end: '2015-10-07'}
    ];

    $('#calendar').availabilityCalendar(unavailableDates);
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
