@extends('front.main')
@section('content')
    <div class="content">
        <!---contact--->
        <div class="contact">
            <div class="container">
                <h2 class="tittle">How To Find Us</h2>
                <div class="contact-bottom">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24208.257297137407!2d-74.00459896044924!3d40.673260299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25afeeec2a7c9%3A0xad18759baca1029a!2sHotel+Le+Bleu!5e0!3m2!1sen!2sin!4v1459521299656"  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4 contact-left">
                    <h4>Address</h4>
                    <p>Est eligendi optio cumque nihil impedit quo minus id quod maxime
                        <span>26 56D Rescue,US</span></p>
                    <ul>
                        <li>Free Phone :+1 078 4589 2456</li>
                        <li>Telephone :+1 078 4589 2456</li>
                        <li>Fax :+1 078 4589 2456</li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="col-md-8 contact-left cont">
                    <h4>Contact Form</h4>
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
                        <textarea type="text" name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit" >
                        <input type="reset" value="Clear" >
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!---contact--->
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
    @endsection