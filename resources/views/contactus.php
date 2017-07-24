<?php include 'header.php'; ?>


    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
            <div class="text">Helping you make the right Move</div>
        </div>
    </section>


    <!--Contact Section-->
    <div class="contact-section">
        <div class="auto-container">
            <div class="outer-box clearfix">

                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="title"><h2>Send Us Message</h2></div>
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" id="contact-form" action="sendemail.php">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="website" placeholder="Website" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Message</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Contact Form -->
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="title"><h2>Contact Information</h2></div>
                        <ul class="contact-info">
                            <li><div class="icon-box"><span class="fa fa-map-marker"></span></div> 1419 Liverpool Street. <br>London </li>
                            <li><div class="icon-box"><span class="fa fa-phone"></span></div> +020 111 234 4567 <br>+020 111 234 4568</li>
                            <li><div class="icon-box"><span class="fa fa-envelope"></span></div> support@ukeandcs.com</li>
                        </ul>

                        <!--Social Links-->
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Map Section-->
    <section class="map-section">
        <!--Map Box-->
        <div class="map-box">
            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="8"
                 data-lat="51.510110"
                 data-lng="-0.135132"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="ukeandcs.com"
                 data-content="London ABC Street 3000, United Kingdom<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>