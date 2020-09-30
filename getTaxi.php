<?php include "includes/header.php";
$page = "get_texi";
?>
<?php include "includes/navigation.php";?>
    <!-- breadcrumb -->
    <section class="breadcrumb_area" style="margin-top: 70px; padding: 68px 0">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Get Taxi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Get Taxi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Get Taxi Code -->
    <div class="container" style="margin-top: 50px;">
        <div class="text-center book_top">
            <h2>Reservations</h2>
            <p>Book a trip or request a quote by filling out the form below.</p>
        </div>
        <div class="border rounded box_shadow">
            <div class="p-3 d-flex">
                <div class="col-md-6 col-12">

                    <div class="row bg-danger text-white">
                        <div id="error" class="px-3">
                            <?php 
                                if(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                }
                            ?>
                        </div>
                    </div>

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
                                    <label>Pickup Time</label>
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
                                style="width: 100%;" value="Continue">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
   <?php include "includes/footer.php";?>
    
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
