<?php include "includes/header.php";
$page = "index";
?>
<?php include "includes/navigation.php";?>

	<!-- Home Section -->
	<div id="home">
		<div class="home_carousel">
			<!-- <div class="home_bgimg"></div> -->
			<div class="crossfade">
				<figure></figure>
				<figure></figure>
				<figure></figure>
				<figure></figure>
				<figure></figure>
			</div>

			<div class="home_overlay"></div>

			<div id="home-content" class="carousel_middle_text">
				<div id="home-content-inner">
					<div class="home_heading">
						<h2>Houston Taxis Service</h2>
						<h3>Move Beyond Your Choice</h3>
						<p>Incredible Destinations At Incredible Deals.!</p>
						<div class="content_btn text-center">
							<a href="getTaxi.php" class="btn btn-warning">Get Your Taxi</a>
							<a href="contact.php" class="btn btn-secondary">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Arrow Down -->
		<a href="#service" id="arrow_down" class="smooth-scroll">
			<i class="fas fa-angle-down"></i>
		</a>
	</div>

	<!-- Book Taxi -->
	<section id="taxiBooking">
		<div class="taxiBooking container">
			<div class="row">
				<div class="col-12 col-md-6 book_taxi_img">
					<div class="bg_yellow_overlay wow animate__slideInLeft" data-wow-duration="1.5s"
						data-wow-delay="0s"></div>
					<div class="booking_car wow animate__zoomIn" data-wow-duration="1.5s" >
						<img src="./img/object/bookingCar.png" alt="Taxi Online" class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="bookingContent">
						<div class="row">
							<h1 class="p-0">Booking Taxi Online</h1>
						</div>
                    <div>
					 <form action="selectCar.php" method="post" id="bookForm">
                       
                        <div class="form-group">
                            <div class="row">
                                <label>Service Details</label>
                                <select name="services" id="service" class="form-control" onchange="initMap()">
                                    <option value="" selected> -- Select Your Service -- </option>
                                    <option value="OneWay">One Way Transfer</option>
                                    <option value="Hourly">Hourly </option>
                                </select>
                            </div>
                        </div>
                        <div id="origin-div">
                            <div class="form-group">
                                <div class="row">
                                    <label>Pickup Address</label><br>
                                    <input name="pickup" type="text" placeholder="Enter Your Pickup Address" class="form-control"id="origin-input">
                                </div>
                            </div>
                        </div>

                        <div id="destination-div">
                            <div class="form-group">
                                <div class="row">
                                    <label>Dropoff Address</label><br>
                                    <input name="dropoff" type="text" placeholder="Enter Your Dropoff Address" class="form-control"
                                        id="destination-input">
                                </div>
                            </div>
                        </div>


                        <div id="hourly-time-div">
                            <div class="form-group">
                                <div class="row">
                                    <label> Booking Time Period </label><br>
                                    <input name="hours" type="number" placeholder="Booking Time Period" class="form-control" min="3"
                                        max="12" id="hourlyInput">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-6 miniP-0" style="padding-left: 0;">
                                    <label for="">Pickup Date</label>
                                    <div class="input-group">
                                        <input type="date" name="date" placeholder="Pickup date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 miniP-0" style="padding-right: 0;">
                                    <label><?php 
										if(isset($_SESSION['error'])){
											echo $_SESSION['error'];
										}else{
											echo "pickup time";
										}
										?></label>
                                    <div class="input-group">
                                      
                                       <input class="form-control" type="time" name="time" placeholder="Pickup Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label>Passengers</label>
                                <select name="passenger" id="passenger" class="form-control">
                                    <option value="1">1 passenger</option>
                                    <option value="2">2 passenger</option>
                                    <option value="3">3 passenger</option>
                                    <option value="4">4 passenger</option>
                                    <option value="5">5 passenger</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label>Luggage</label>
                                <select name="luggage" id="luggage" class="form-control">
                                    <option value="0">0 luggage</option>
                                    <option value="1">1 luggage</option>
                                    <option value="2">2 luggage</option>
                                    <option value="3">3 luggage</option>
                                    <option value="4">4 luggage</option>
                                    <option value="5">5 luggage</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div id="distance2"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div id="travelTime"></div>
                            </div>
                        </div>

                        <div class="row">
                            <input type="submit" name="submit" id="continueBtn" class="btn btn-warning"
                                style="width: 100%;" value="Book Now">
                        </div>
                    </form>
					</div>
				</div>
			</div>
			<div id="map" style="display: none;"></div>
		</div>
		</div>
	</section>

	<!-- Service Section -->
	<section id="service">
		<div class="container" style="margin: 100px auto">
			<div class="service_top text-center">
				<h2 class="wow animate__bounce" data-wow-duration="1s" >What we offer</h2>
				<p style="font-size: 18px;">OUR MISSION IS CLIENT’S SATISFACTION</p>
			</div>
			<div id="service_carousel">
				<div id="service_carousel_content">
					<div class="text-center service_carousel_bg">
						<div>
							<i class="far fa-building" style="font-size: 60px; color: #FFC107"></i>
						</div>
						<h3 style="font-size: 17px !important; padding: 20px 0 !important;">Move Anywhere You Want</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque condimentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							condimentum
						</p>
					</div>
				</div>
				<div id="service_carousel_content">
					<div class="text-center service_carousel_bg">
						<div>
							<i class="fas fa-plane-departure" style="font-size: 60px; color: #FFC107"></i>
						</div>
						<h3 style="font-size: 17px !important; padding: 20px 0 !important;">Airport Pick/Drop</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque condimentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							condimentum
						</p>
					</div>
				</div>
				<div id="service_carousel_content">
					<div class="text-center service_carousel_bg">
						<div>
							<i class="fas fa-shipping-fast" style="font-size: 60px; color: #FFC107"></i>
						</div>
						<h3 style="font-size: 17px !important; padding: 20px 0 !important;">Fast & Easy Transport</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque condimentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							condimentum
						</p>
					</div>
				</div>
				<div id="service_carousel_content">
					<div class="text-center service_carousel_bg">
						<div>
							<i class="fas fa-user-shield" style="font-size: 60px; color: #FFC107"></i>
						</div>
						<h3 style="font-size: 17px !important; padding: 20px 0 !important;">Safe & Secure Transport</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque condimentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							condimentum
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- features -->
	<section id="features">
		<div class="container">
			<div class="row features_row">
				<div class="col-12 col-sm-6 wow animate__slideInLeft"  data-wow-duration="1s">
					<div class="features_content">
						<!-- <h3>HOUSTON TAXI SERVICES</h3> -->
						<h2>Why Houston Taxis Service?</h2>
						<p>Let me describe the reason. Houston Taxi Services are most Trustful cab booking service in
							Houston. We understand the value of your time and money.!</p>
						<ul class="clear">
							<li><i class="far fa-check-circle"></i> Quick & Easy Booking</li>
							<li><i class="far fa-check-circle"></i> 24/7 Service Available</li>
							<li><i class="far fa-check-circle"></i> Reliable GPS Enabled</li>
							<li><i class="far fa-check-circle"></i> Cost Effective</li>
						</ul>
						<button class="btn btn-outline-primary" onclick="getTaxi()">Read More</button>
					</div>
				</div>
				<div class="col-12 col-sm-6 wow animate__slideInRight"  data-wow-duration="1s">
					<div>
						<img src="./img/bg/img1.jpg" alt="" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Advantages -->
	<section id="advantages">
		<div class="container">
			<div class="row ">
				<div class="col-12 advantage_row">
					<h3 class="wow animate__bounce" data-wow-duration="2s" >MAIN FEATURES</h3>
					<h2>Our Advantages</h2>
				</div>
				<div class="col-12 col-sm-6 col-md-4 my-2 wow animate__bounceInLeft" data-wow-duration="2s">
					<div class="advantages_div">
						<div>
							<img src="./img/bg/car1.jpg" alt="" class="img-fluid">
						</div>
						<div class="advantages_content p-3">
							<h2>Cost Effective</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum. Lorem ipsum
								dolor sit amet, consectetur adipiscing elit. Quisque condimentum</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 my-2 wow animate__bounceInUp" data-wow-duration="3s"
					>
					<div class="advantages_div">
						<div>
							<img src="./img/bg/car2.jpg" alt="" class="img-fluid">
						</div>
						<div class="advantages_content p-3">
							<h2>Secure & Comfartable Journey</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum. Lorem ipsum
								dolor sit amet, consectetur adipiscing elit. Quisque condimentum</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 my-2 wow animate__bounceInRight" data-wow-duration="2s"
					>
					<div class="advantages_div">
						<div>
							<img src="./img/bg/img1.jpg" alt="" class="img-fluid">
						</div>
						<div class="advantages_content p-3">
							<h2>Relaxable Rydes</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum. Lorem ipsum
								dolor sit amet, consectetur adipiscing elit. Quisque condimentum</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Reviews -->
	<section id="testimonial">
		<div class="testimonial_overlay"></div>
		<div class="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-10 text-center m-auto">
						<h2 class="text-center">Reviews</h2>
						<div class="border-bottoms"></div>

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<!-- Wrapper for carousel items -->
							<div class="carousel-inner">
								<div class="item carousel-item active">
									<div class="img-box"><img src="./img/author/houstion_taxi_services_author.jpg"
											alt=""></div>
									<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
										eu
										sem
										tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
										semper
										malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh
										non
										aliquet.</p>
									<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
								</div>
								<div class="item carousel-item">
									<div class="img-box"><img src="./img/author/houstion_taxi_services_author.jpg"
											alt=""></div>
									<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus.
										Pellentesque
										eget
										nisi
										a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra
										sagittis
										quam
										at
										mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida
										odio.
									</p>
									<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
								</div>
								<div class="item carousel-item">
									<div class="img-box"><img src="./img/author/houstion_taxi_services_author.jpg"
											alt=""></div>
									<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante
										id
										lacinia.
										Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan
										tincidunt.
										Phasellus
										risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit
										dolor
										eget
										rutrum.</p>
									<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
								</div>
							</div>
							<!-- Carousel controls -->
							<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="carousel-control right carousel-control-next" href="#myCarousel"
								data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- callus -->
	<section id="callus">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="callus_img wow animate__bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0s">
						<div class="callus_overlay"></div>
						<img src="./img/object/asking_for_lifft.jpg" alt="Houston Taxi Services" class="img-fluid">
					</div>
				</div>
				<div class="col-12 col-md-6 align-items-center d-flex wow animate__flipInY" data-wow-duration="1.5s"
					data-wow-delay="0s">
					<div class="callus_content">
						<h3>Call us to Book a Taxi</h3>
						<h2>+1(647)560-1059</h2>
						<h4>The operator will call back immediately and report the cost of travel</h4>
						<a href="tel:+1(647)560-1059" class="btn_stylish">Call Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php include "includes/footer.php"; ?>
	    
    <script src="assets/jquery/jquery-3.5.1.min.js"></script> 
	<script src="./js/jquery.datetimepicker.full.min.js"></script>

	<script src="assets/bootstrap/bootstrap.min.js"></script>

	<script src="assets/wow.min.js"></script>

	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/fontawesome/fontawesome.min.js"></script>

	<script src="./js/map.js"></script>
	
	<script src="./js/script.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3Fvc0bRRWw4hTtD2Sln45D4D7CV1de2I&libraries=places&callback=initMap"
		async defer></script>
	<script>
        var loader = document.getElementById('preloader');
        function myfunction(){
            loader.style.display = 'none';	
        }
    </script>

</body>

</html>