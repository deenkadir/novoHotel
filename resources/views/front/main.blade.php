<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Novo Hotel a  Travel Agency Category Flat Bootstrap Responsive website Template | About :: w3layouts</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novo Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!---->
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="banner">

</div>
<div class="header">
    <div class="container">
        <div class="header-menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand logo">
                            <h1><a href="index.html"><span>Novo  </span> Hotel</a></h1>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html" data-hover="Home">Home </a></li>
                            <li class="active"><a href="about.html" data-hover="About">About</a></li>
                            <li><a data-hover="Gallery" href="gallery.html">Gallery</a></li>
                            <li><a data-hover="Rooms" href="rooms.html">Rooms</a></li>
                            <li><a data-hover="Contact" href="contact.html">Contact</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<!---header--->

@yield('content')


<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>Get In Touch</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
                    <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailto:info@example.com">info@example.com</a></a></li>
                    <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Hotel top links</h4>
                <ul>
                    <li>Our Story</li>
                    <li>Sleep Program</li>
                    <li>Executive Travel Program</li>
                    <li>Enriched Wellness</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Our Rooms</h4>
                <ul>
                    <li>Superior Room</li>
                    <li>Deluxe Room</li>
                    <li>Business Room</li>
                    <li>Executive Corner Room</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Our Services </h4>
                <ul>
                    <li>Room services</li>
                    <li>Free internet Wifi</li>
                    <li>Television (50 channels)</li>
                    <li>Pets allowed</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-->
<div class="copy-section">
    <div class="container">
        <div class="footer-top">
            <p>&copy; 2016 Novo Hotel. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class="social-icons">
            <a href="#"><i class="icon"></i></a>
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
        </div>
    </div>
</div>
<!--footer-->

</body>
</html>
