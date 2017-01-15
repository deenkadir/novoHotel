@extends('front.main')
@section('content')
    <div class="banner-section">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="slider-info">
                            <img src="images/ba1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Outdoor & Indoor Luxury</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/ba2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Luxury & Oriental Harmony</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/ba3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>A Brand New Hotel</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function(){
                SyntaxHighlighter.all();
            });
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- FlexSlider -->
        <!-- slider -->
    </div>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---header--->
    <div class="content">
        <!---welcome--->
        <div class="welcome">
            <div class="container">
                <h2 class="tittle">Welcome To Novo Hotel</h2>
                <p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                <div class="wel-grids">
                    <div class="col-md-3 wel-grid">
                        <img src="images/w1.jpg" class="img-responsive gray" alt=""/>
                        <h4>Premier Suite</h4>
                        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                    </div>
                    <div class="col-md-3 wel-grid">
                        <img src="images/w2.jpg" class="img-responsive gray" alt=""/>
                        <h4>Deluxe Suite</h4>
                        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                    </div>
                    <div class="col-md-3 wel-grid">
                        <img src="images/w3.jpg" class="img-responsive gray" alt=""/>
                        <h4>Luxury Suite</h4>
                        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                    </div>
                    <div class="col-md-3 wel-grid">
                        <img src="images/w4.jpg" class="img-responsive gray" alt=""/>
                        <h4>Spa Suite</h4>
                        <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---welcome--->
        <div class="resort-section">
            <div class="container">
                <h3 class="tittle">Resort latest <span>deals</span></h3>
                <div class="resort-grids">
                    <!-- start content_slider -->
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item">
                            <div class="col-md-6 cap-img">
                                <img src="images/p.jpg" class="img-responsive gray" alt=""/>
                            </div>
                            <div class="col-md-6 cap">
                                <h4>Surrounded By Custom Designed</h4>
                                <ul class="cap1">
                                    <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                    <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                    <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                </ul>
                                <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                <div class="detais">
                                    <div class="col-md-9 deatils-left">
                                        <div class="list">
                                            <ul>
                                                <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
                                                <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 deatils-right">
                                        <div class="detail-top">
                                            <span>PER NIGHT</span>
                                            <h4>$45</h4>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 cap-img">
                                <img src="images/p1.jpg" class="img-responsive gray" alt=""/>
                            </div>
                            <div class="col-md-6 cap">
                                <h4>Free High Speed Wi-Fi Internet in Room</h4>
                                <ul class="cap1">
                                    <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                    <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                    <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                </ul>
                                <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                <div class="detais">
                                    <div class="col-md-9 deatils-left">
                                        <div class="list">
                                            <ul>
                                                <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M. - 12:09 P.M.</li>
                                                <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 deatils-right">
                                        <div class="detail-top">
                                            <span>PER NIGHT</span>
                                            <h4>$45</h4>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 cap-img">
                                <img src="images/p2.jpg" class="img-responsive gray" alt=""/>
                            </div>
                            <div class="col-md-6 cap">
                                <h4>Surrounded By Custom Designed</h4>
                                <ul class="cap1">
                                    <li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
                                    <li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
                                    <li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
                                </ul>
                                <p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
                                <div class="detais">
                                    <div class="col-md-9 deatils-left">
                                        <div class="list">
                                            <ul>
                                                <li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
                                                <li><i class="glyphicon glyphicon-cutlery"></i> In Room Dining is Available 09:00 P.M.-12:09 P.M.</li>
                                                <li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 deatils-right">
                                        <div class="detail-top">
                                            <span>PER NIGHT</span>
                                            <h4>$45</h4>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="superlist">
            <div class="container">
                <h3 class="tittle">Hand Picked by Superlist</h3>
                <p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                <div class="super-grids">
                    <div class="col-md-8 super-grid">
                        <div class="super-top">
                            <img src="images/s1.jpg" class="img-responsive gray" alt=""/>
                        </div>
                        <div class="super-bottom">
                            <div class="col-md-6 super-left">
                                <img src="images/s2.jpg" class="img-responsive gray" alt=""/>
                            </div>
                            <div class="col-md-6 super-right">
                                <img src="images/s3.jpg" class="img-responsive gray" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 super-grid1">
                        <div class="super-top">
                            <img src="images/s4.jpg" class="img-responsive gray" alt=""/>
                            <h4>Luxury Suite</h4>
                            <p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="testimonial-section">
            <div class="container">
                <h3 class="tittle">Testimonials</h3>
                <div class="testimonial-grids">
                    <div class="col-md-6 testimonial-grid">
                        <div class="testimonial-left">
                            <img src="images/t1.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Exactly What I Need</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 testimonial-grid test3">
                        <div class="testimonial-left">
                            <img src="images/t2.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Novo Support Ever</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="testimonial-grids test2">
                    <div class="col-md-6 testimonial-grid">
                        <div class="testimonial-left">
                            <img src="images/t3.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Totally Impressed</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">- Kim Glove</div><!-- /.testimonial-sign -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 testimonial-grid test3">
                        <div class="testimonial-left">
                            <img src="images/t8.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Exactly What I Need</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="testimonial-grids">
                    <div class="col-md-6 testimonial-grid">
                        <div class="testimonial-left">
                            <img src="images/t9.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Exactly What I Need</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">- Fiona Wilson</div><!-- /.testimonial-sign -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 testimonial-grid test3">
                        <div class="testimonial-left">
                            <img src="images/t10.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="testimonial-right">
                            <div class="testimonial-text">
                                <h5>Exactly What I Need</h5>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="clearfix"></div>
                            <p>Quisque aliquet ornare nunc in viverra. Nullam ornare molestie ligula in luctus. Suspendisse ac cursus elit. Donec vel enim sit amet lorem vulputate condimentum.</p>
                            <div class="testimonial-sign">-Rachel Fast</div><!-- /.testimonial-sign -->

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    @endsection