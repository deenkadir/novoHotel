@extends('front.main')
@section('content')
<div class="content">
    <!---Rooms--->
    <div class="welcome">
        <div class="container">
            <h2 class="tittle">Special Rooms</h2>
            <p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
            <div class="wel-grids">
                <div class="col-md-3 wel-grid">
                    <img src="images/ga6.jpg" class="img-responsive gray" alt=""/>
                    <h4>Family Room</h4>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <img src="images/w5.jpg" class="img-responsive gray" alt=""/>
                    <h4>Standard Room</h4>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <img src="images/w3.jpg" class="img-responsive gray" alt=""/>
                    <h4>Deluxe Room</h4>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <img src="images/ga5.jpg" class="img-responsive gray" alt=""/>
                    <h4>Luxury Room</h4>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---Rooms--->
    <div class="reservation">
        <div class="container">
            <h3 class="tittle">Make reservation</h3>
            <div class="reservation-grids">
                <div class="col-md-4 reser-grid">
                    <h5>Check in</h5>
                    <div class="book_date">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                    </div>
                </div>
                <div class="col-md-4 reser-grid">
                    <h5>Check out</h5>
                    <div class="book_date">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                    </div>

                </div>
                <div class="col-md-4 reser-grid">
                    <h5>Adults:</h5>
                    <div class="best-hot">
                        <input type="text" value="Adults" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Here';}" required="">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="reservation-grids">
                <div class="col-md-4 reser-grid">
                    <h5>Kids:</h5>
                    <div class="best-hot">
                        <input type="text" value="Kids" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Here';}" required="">
                    </div>
                </div>
                <div class="col-md-4 reser-grid">
                    <h5>Room:</h5>
                    <select class="sel">
                        <option value="">All</option>
                        <option value="">Family Room</option>
                        <option value="">Standard Room</option>
                        <option value="">Deluxe Room</option>
                        <option value="">Luxury Room</option>
                        <option value="">Single Room</option>
                    </select>
                </div>
                <div class="col-md-4 reser-grid">
                    <div class="best-hot">
                        <input type="submit" value="Search">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="rooms-rates">
        <div class="container">
            <h3 class="tittle">Rooms & Rates</h3>
            <div class="rates-grids">
                <div class="rates-grid">
                    <img src="images/s.jpg" class="img-responsive gray" alt=""/>
                </div>
                <div class="rates-text">
                    <h4>Luxury Room</h4>
                    <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
                    <h5>$260.00 <span class="small">/ Night</span></h5>
                </div>
            </div>
            <div class="rates-grids rate1">
                <div class="rates-grid1">
                    <img src="images/ga2.jpg" class="img-responsive gray" alt=""/>
                </div>
                <div class="rates-text1">
                    <h4>Single Room</h4>
                    <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
                    <h5>$260.00 <span class="small">/ Night</span></h5>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="rates-grids">
                <div class="rates-grid">
                    <img src="images/ga7.jpg" class="img-responsive gray" alt=""/>
                </div>
                <div class="rates-text">
                    <h4>Standard Room</h4>
                    <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
                    <h5>$260.00 <span class="small">/ Night</span></h5>
                </div>
            </div>
            <div class="rates-grids rate1">
                <div class="rates-grid1">
                    <img src="images/ga5.jpg" class="img-responsive gray" alt=""/>
                </div>
                <div class="rates-text1">
                    <h4>Couple Room</h4>
                    <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
                    <h5>$260.00 <span class="small">/ Night</span></h5>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
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
@endsection()