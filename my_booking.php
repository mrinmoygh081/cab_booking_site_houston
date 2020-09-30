<?php
    require_once"includes/db.php";
    require_once"includes/header.php";
    $page = "my_booking";
?>
<style>
    @media only screen and (max-width: 992px) {
        .btn_danger {
            margin: 10px 0;
        }
    }
</style>
<?php
include "includes/navigation.php";

unset($_SESSION['id']);
unset($_SESSION['distance']);
unset($_SESSION['pickup']);
unset($_SESSION['dropoff']);
unset($_SESSION['pay_money']);

if(isset($_SESSION['customer_id'])){
	$customer_id=$_SESSION['customer_id'];
	$query="SELECT * FROM booking WHERE coustomer_id = $customer_id ORDER BY booking_id DESC";
	$booking_details=mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($booking_details);
	
	?>
    <div style="margin-top: 90px; margin-bottom: 50px;">
        <div class="container">
            <div class="trip_info">
                <h2> Your Booking </h2>
                <h4>Name : <span><?php echo $_SESSION['customer_name'];?></span></h4>
                <h4>Email : <span><?php echo $_SESSION['customer_email']?></span></h4>
            </div>
        </div>
        <div class="container border box_shadow py-3">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <img src="./img/bg/car1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-9 trip">
                            <h3 class="p-0">
                                <span><?php 
									$hour = $row['booking_hour'];
	                              if($hour!=""){
									  echo "Hourly Service";
								  }else{
									 echo "One Way Service";
								  }
									?></span>
                                <span><?=$row['booking_date']; ?></span>
                                at <span><?=$row['booking_time']  ?></span>
                                -vehicle: <span><?=$row['booking_car_type']; ?></span>
                                <span></span>
                            </h3>
                            <div class="trip_details">
                                <ul>
                                    <li>
                                        <i class="fas fa-user"></i> <span><?php echo $row['passengers']; ?> </span>
                                        <i class="fas fa-suitcase"></i> <span> <?php echo $row['luggage']; ?> </span>
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span><?php echo $row['pickup_address']; ?>  </span> </li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span> <?php echo $row['dropup_address']; ?> </span> </li>
                                </ul>

                                <div class="charges">
                                    <p>Booking Id: <span class="mrinmoy"><?php echo $row['booking_id']; ?></span></p>
                                    <p>Transactional Id: <span class="mrinmoy"><?php echo $row['transaction_id']; ?></span></p>
                                    <p>Payment Status: <span class="mrinmoy"><?php echo $row['payment_mode']; ?></span> </p>
                                    <div class="row py-2">
                                        <div class="col-12 col-md-8 final_charges d-flex justify-content-between">
                                            <span class="m-0">You Paid</span>
                                            <span>$ <?php echo $row['payment_amount']; ?> USD</span>
                                        </div>
                                        <div class="col-12 col-md-3">
                                            <button class="btn_danger" id="cancel_trip">Cancel Trip</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<?php	
} else {
    echo "<div style='text-align:center; margin: 120px 0 70px;'><h2>Atfirst Login Your Accout First</h2>
    <a href='login.php' class='btn btn-lg btn-primary'>Login</a></div>";
}

?>

    <?php require_once "includes/footer.php";  ?>
    <script src="assets/jquery/jquery-3.5.1.min.js"></script> 

	<script src="assets/bootstrap/bootstrap.min.js"></script>

	<script src="assets/wow.min.js"></script>

	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/fontawesome/all.js"></script>
	
	<script src="./js/script.js"></script>

	<script>
        var loader = document.getElementById('preloader');
        function myfunction(){
            loader.style.display = 'none';	
        }
    </script>

</body>

</html>