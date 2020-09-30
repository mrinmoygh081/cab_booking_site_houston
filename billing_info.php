<?php 
include "includes/header.php";
include "includes/db.php";
$page = "admin_login";
include "includes/navigation.php";
if(isset($_GET['id']) && !empty($_GET['id'])){
	$_SESSION['id'] = $_GET['id'];
	if(!isset($_SESSION['id'])){
		header("location: getTaxi.php");
	}
	if(!isset($_SESSION['customer_id'])){
	   header("location: login.php");
    }else{
        $id=$_SESSION['id'];
        $query = "SELECT * FROM car_details WHERE car_id=$id";
        $select_car = mysqli_query($connection, $query);
        $row=mysqli_fetch_assoc($select_car);
        $car_name=$row['car_name'];
        $_SESSION['car_name'] = $car_name;
        $service = $_SESSION['service'];
//        $rand=$_SESSION['rand'];
    }
}else{
	if(isset($_SESSION['customer_id'])){
		if(!isset($_SESSION['id'])){
            header("location: getTaxi.php");
        }
        $id=$_SESSION['id'];
        $query = "SELECT * FROM car_details WHERE car_id=$id";
        $select_car = mysqli_query($connection, $query);
        $row=mysqli_fetch_assoc($select_car);
        $car_name=$row['car_name'];
        echo $car_name;
        $service = $_SESSION['service'];
    }
}
 if(!isset($_SESSION['id'])){
 header("location: getTaxi.php");
	}
if($service=="OneWay"){
    if(!isset($_SESSION['distance'])){
        header("location: getTaxi.php");
    }
     $_SESSION['oneway_price']=$_SESSION['distance']*$row['car_price'];
	if($_SESSION['oneway_price']<=20){
		$_SESSION['oneway_price']=20;
	}
	if(!isset($_SESSION['coupon_code'])){
		$_SESSION['pay_money']= $_SESSION['oneway_price'];
	}else{
		$_SESSION['pay_money']= $_SESSION['discount_oneway_price'];
	}
}else{
	$_SESSION['hourly_price']=$_SESSION['hours']*$row['hourly_price'];
	if($_SESSION['oneway_price']<=20){
		$_SESSION['oneway_price']=20;
	}
	if(!isset($_SESSION['coupon_code'])){
	$_SESSION['pay_money']= $_SESSION['hourly_price'];
}else{
	$_SESSION['pay_money']= $_SESSION['discount_hourly_price'];
	}
}




?>
       <!-- breadcrumb -->
    <section class="breadcrumb_area" style="margin-top: 70px; padding: 68px 0">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Billing Info</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/selectCar.html">Select Car</a></li>
                        <li class="breadcrumb-item active">Billing Info</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- <div class="" style="padding-top: 120px;"></div> -->

    <div style="margin-top: 30px; margin-bottom: 50px;">
        <div class="container border box_shadow py-3">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="trip_heading"> Trip Summary </h2>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <img src="./img/bg/car1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-9 trip">
                            <h3 class="p-0">
                                <span><?php echo $service; ?></span>
                                <span><?php echo $_SESSION['date']; ?></span>
                                at <span><?php echo $_SESSION['time']; ?></span>
                                -vehicle: <span><?php echo $car_name; ?></span>
                                <span><?php  ?> (<?php  
									if($service=="OneWay"){
									echo $_SESSION['distance'];
										echo " mile";
									}else{
										echo "for ";
										echo $_SESSION['hours'] ;
										echo " hours";
									}
									?> 
                           
                          ) </span>
                            </h3>
                            <div class="trip_details">
                                <ul>
                                    <li>
                                        <i class="fas fa-user"></i> <span><?php echo $_SESSION['passenger']; ?></span>
                                        <i class="fas fa-suitcase"></i> <span><?php echo $_SESSION['luggage'];?></span>
                                    </li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span><?php echo $_SESSION['pickup'] ?></span> </li>
                                    <li><i class="fas fa-map-marker-alt"></i> <span><?php echo $_SESSION['dropoff']; ?></span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="charges">
                        <h2> Charges </h2>
                        <div class="d-flex justify-content-between" style="padding-bottom: 15px;">
                            <span>Base Price</span>
                            <span>$<?php  
								if($service=="OneWay"){
								  $_SESSION['oneway_price']=$_SESSION['distance']*$row['car_price'];
									if($_SESSION['oneway_price']<=20){
										$_SESSION['oneway_price']=20;
										echo $_SESSION['oneway_price'];
									}else{
										echo $_SESSION['oneway_price'];
									}
								}else{
									$_SESSION['hourly_price']=$_SESSION['hours']*$row['hourly_price'];
									if($_SESSION['hourly_price']<=20){
										$_SESSION['hourly_price']=20;
										echo $_SESSION['hourly_price'];
								}else{
										echo $_SESSION['hourly_price'];
									}
								}
								?></span>
                  </div>
                       
                        <form action="coupon_verify.php" method="post" >
                        <div class="form-group">
                            <input type="text" name="promocode" placeholder="Promo Code" class="form-control input_promo">
                            <input type="submit" name="submit" value="Apply" class="btn btn-success promo_apply">
                        </div>
                        </form>
                        <div class="final_charges d-flex justify-content-between">
                            <h3 class="m-0">Total</h3>
                            <span>$<?php  
							 echo $_SESSION['pay_money'];
								?></span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div>
                        <h2 class="trip_heading"> Personal Info </h2>
                        <div>
                            <form action="booking_confirm.php" method="post">
                              
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <div class="input-group">
                                        <input type="text" name="phone" placeholder="Phone" class="form-control" required>
                                        <div class="input-group-prepend">
                                            <button type="button" id="toggle" class="btn input-group-text"><i
                                                    class="fas fa-phone"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="terms text-center align-middle py-2">
                                        By checking this box you agree to our<span class="px-1">Terms &
                                            Conditions</span>
                                        <input type="checkbox" name="agreeTerms" required>
                                    </p>
                                </div>
                                
                             <div class="form-group">
                        <h2 class="specialRequests"> Special Requests </h2>
                        <input type="text" class="form-control" name="request"
                            placeholder="(Enter any specialized instructions or requests here)">
                    </div>
                    
<!--
                    <div class="text-right">
                        <input type="submit" name="done" value="Pay Now >" class="btn btn-success">
                    </div>
-->
                 <div class="row">
                 	<div class="col-8">
                 	    <label class="pr-4"><input type="radio" name="pay_type" value="pay_now" checked> Pay Now </label>
                        <label><input type="radio" name="pay_type" value="pay_after"> Pay After Ride </label>
<!--
                 		<select name="pay_type" style="width:100%;" id="">
                 			<option value="pay_now">Pay Now</option>
                 			<option value="pay_after">Pay After Ride</option>
                 		</select>
-->
                 	</div>
                 	
                 	<div class="text-center col-4">
                        <input type="submit" name="done" value="Checkout" class="btn btn-success">
                    </div>
                 </div>
								
                     
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
   
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