<?php 
include "includes/db.php";
include "includes/header.php";
$page = "rate";
include "includes/navigation.php"; ?>

    <section class="breadcrumb_area" style="margin-top: 70px;">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Hourly Rate</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Rate</a></li>
                        <li class="breadcrumb-item active">Hourly Rate</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section style="padding:50px 0">
        <div class="text-center event_top">
            <h2 class="p-3">Chauffeured Events</h2>
        </div>
        <div class="container">
            <div class="row hourly_rate">
                <div class="col-12 col-md-6 p-0">
                    <img src="./img/object/rate.jpg" alt="Chauffeured Events" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-3 hourly_rate_content">
                    <h4>Chauffeured Evening Events</h4>
                    <sub>$40.00 Hr Minimum 3Hr Booking</sub>
                    <p>(Gratuity Not Included)</p>
                    <p class="para">*After 5:00pm **$10.00 additional per stop</p>
                    <p class="para">Examples: Dinner Date, Meeting/Drinks with Clients,Graduations, Corporate Events,
                        Concerts, Class
                        Reunions</p>
                </div>
            </div>
            <div class="row hourly_rate">
                <div class="col-12 col-md-6 p-0">
                    <img src="./img/object/rate.jpg" alt="Chauffeured Events" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-3 hourly_rate_content">
                    <h4>Chauffeured Evening Events</h4>
                    <sub>$40.00 Hr Minimum 3Hr Booking</sub>
                    <p>(Gratuity Not Included)</p>
                    <p class="para">*After 5:00pm **$10.00 additional per stop</p>
                    <p class="para">Examples: Dinner Date, Meeting/Drinks with Clients,Graduations, Corporate Events,
                        Concerts, Class
                        Reunions</p>
                </div>
            </div>
            <div class="row hourly_rate">
                <div class="col-12 col-md-6 p-0">
                    <img src="./img/object/rate.jpg" alt="Chauffeured Events" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-3 hourly_rate_content">
                    <h4>Chauffeured Evening Events</h4>
                    <sub>$40.00 Hr Minimum 3Hr Booking</sub>
                    <p>(Gratuity Not Included)</p>
                    <p class="para">*After 5:00pm **$10.00 additional per stop</p>
                    <p class="para">Examples: Dinner Date, Meeting/Drinks with Clients,Graduations, Corporate Events,
                        Concerts, Class
                        Reunions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
   <?php include "includes/footer.php";?>
       
    <script src="assets/jquery/jquery-3.5.1.min.js"></script> 
	<script src="./js/jquery.datetimepicker.full.min.js"></script>

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