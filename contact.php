<?php include "includes/header.php";
$page = "contact";
?>
<?php include "includes/navigation.php";?>

    <section class="breadcrumb_area" style="margin-top: 70px;">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Contact Left -->
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Contact
                                    us</h5>
                                <h2 class="wow animate__rotateInDownLeft" data-wow-duration="1.5s" data-wow-delay="0s">
                                    Get<br />In <strong>Touch</strong></h2>
                            </div>
                            <p> Our Primary Goal is Our Customers' Satisfaction </p>

                            <div id="offices">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="office">
                                            <h4>Houston, USA</h4>
                                            <ol class="office-details">
                                                <li>
                                                    <i class="fa fa-mobile"></i>
                                                    <span><b>+(91) 8240491818</b></span>
                                                </li>
                                                <br />
                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    <span>mail@houstontaxiservices.com</span>
                                                </li>
                                                <br />
                                                <li>
                                                    <i class="fa fa-map-marker"></i> <span> Houston, USA</span>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ol class="social-list">
                                <li>
                                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus"></i></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Contact Right -->
                        <div id="contact-right">
                            <form>
                                <h4>How Can I Help You?</h4>
                                <p>
                                    We would love to hear from you! Provide your business details
                                    and queries below. We will get back to you in a jiffy!
                                </p>

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Full Name<span>*</span></label><br />
                                            <input type="text" class="form-control" id="name" placeholder="Your Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email ID<span>*</span></label><br />
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label>Subject</label><br />
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="(e.g., Digital Marketing)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message"
                                        placeholder="Type your message here..."></textarea>
                                </div>

                                <div id="submit-btn">
                                    <a class="btn btn_stylish" href="#" title="Submit" role="button">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Ends -->

    <!-- Google Map -->
    <section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <!-- Google Map Ends -->

    <?php include "includes/footer.php";?>
       
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>

	<script src="assets/bootstrap/bootstrap.min.js"></script>

	<script src="assets/wow.min.js"></script>

	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/fontawesome/fontawesome.min.js"></script>
	
	<script src="./js/script.js"></script>

	<script>
        var loader = document.getElementById('preloader');
        function myfunction(){
            loader.style.display = 'none';	
        }
    </script>

</body>

</html>
