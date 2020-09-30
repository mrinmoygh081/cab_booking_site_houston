<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php";
$page = "admin_login"; ?>
 <?php  include "includes/navigation.php"; ?>
     <!-- breadcrumb -->
    <section class="breadcrumb_area" style="margin-top: 70px; padding: 68px 0">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Select Car</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/getTaxi.html">Get Taxi</a></li>
                        <li class="breadcrumb-item active">Select Car</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
<?php

$_SESSION['date']='';
$_SESSION['time']='';
date_default_timezone_set("Asia/Calcutta");

$date = "" . date("Y-m-d") . "";
$time=date('H:i');
$c_time = "" . date("12:00");
$time2 = date('H:i', strtotime($time.'+12 hour'));
$next_date = date('Y-m-d', strtotime(' + 1 days'));
if(isset($_POST['submit'])){
unset($_SESSION['coupon_code']);
$r_date =htmlspecialchars(stripslashes(trim($_POST['date'])));
$r_time =htmlspecialchars(stripslashes(trim($_POST['time'])));
	if($r_date==$date) {
		if($time<$c_time){
		if($r_time>=$time2){
			$_SESSION['date']=$r_date;	
			$_SESSION['time']=$r_time;	
			} 
		} 
	}elseif($r_date==$next_date){
		if($time<=$c_time){
		  $_SESSION['date']=$r_date;	
	      $_SESSION['time']=$r_time;		
		}else{
			if($r_time>=$time2){
		        $_SESSION['date']=$r_date;	
	            $_SESSION['time']=$r_time;	
			}
		}
	}elseif($r_date>$next_date){
	    $_SESSION['date']=$r_date;	
	    $_SESSION['time']=$r_time;		
	}else {
        $_SESSION['error'] = "You must set time 12 hours later.";
        header("location:getTaxi.php");
    }

if($_SESSION['date']!="" && $_SESSION['time']!=""){
    unset ($_SESSION['error']);
    $_SESSION['service']=htmlspecialchars(stripslashes(trim($_POST['services'])));
	$_SESSION['pickup']=htmlspecialchars(stripslashes(trim($_POST['pickup'])));
	$_SESSION['dropoff']=htmlspecialchars(stripslashes(trim($_POST['dropoff'])));
	$_SESSION['hours']=htmlspecialchars(stripslashes(trim($_POST['hours'])));
	$_SESSION['passenger']=htmlspecialchars(stripslashes(trim($_POST['passenger'])));
	$_SESSION['luggage']=htmlspecialchars(stripslashes(trim($_POST['luggage'])));
	
	$query = "SELECT * FROM car_details";
	$car_details_conn = mysqli_query($connection, $query);
	
	while($row=mysqli_fetch_assoc($car_details_conn)){
	?>
        <div class="container box_shadow border my-4">
            <div class="row p-4 book_page_display">
                <div class="col-md-4 col-12 p-0">
                    <img src="./img/object/bookingCar.png" class="img-fluid" id="carImg">
                </div>
                <div class="col-md-8 col-12 miniP-0">
                    <h2> <?php echo $row['car_name']; ?></h2>
                    <div class="car_features p-0">
                        <span class="border p-1"> <?php echo $row['car_type'];?> </span>
                        <span title="The car has 5 seats"><i class="fas fa-user"></i>4</span>
                        <span title="The car has 5 seats"><i class="fas fa-suitcase"></i>2</span>
                    </div>
                    
                    <div class="row p-0 car_speciality_display">
                        <div class="col-12 col-md-6 miniP-0">
                            
                            <p class="text-success"><b>Price includes:</b></p>
                            <ul class="car_insure">
                                <li><i class="fas fa-check-circle"></i>Amendments</li>
                                <li><i class="fas fa-check-circle"></i>Theft Protection</li>
                                <li><i class="fas fa-check-circle"></i>Collision Damage Waiver</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6" style="position: relative;">
                            <div class="price_select_car">
                                <p>Price:</p>
                                <h3  style="font-size: 1.5em;">$<span><?php 
		                         $service = $_SESSION['service'];
		                          if($service=="OneWay"){
									$oneway= $row['car_price']*$_SESSION['distance'];
									  if($oneway<=20){
										  echo 20;
									  }else{
										  echo $oneway;
									  }
								  } else {
									  $hourly= $row['hourly_price']*$_SESSION['hours'];
									  if($hourly<=20){
										  echo 20;
									  }else{
										  echo $hourly;
									  }
								 }
		                         ?></span></h3>
                                <br>
                                <a href="billing_info.php?id=<?php echo $row['car_id']; ?>"><button type="button" class="btn btn-primary"
                                    style="padding: 10px 25px; margin: 6px 0px;">Select
                                    Car</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } 
      } else {
         $_SESSION['error'] = "You must set time 12 hours before the journey";
         header("location:getTaxi.php");
      }
 }
?>
 <?php  include "includes/footer.php"; ?>
    
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
 
