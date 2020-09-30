
   
   <?php include "includes/admin_header.php";?>
<style>
	tr th {
		text-align: center;
	}
</style>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
        <div id="page-wrapper">
          <div class="container-fluid">
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
                Welcome admin panel
                <small><?php echo $_SESSION['admin_name'];?></small>
            </h1>
            
<!--
		   <small><?php echo $_SESSION['admin_name'] ?>
		  </small>
-->
		
		
	</div>
</div>
<!-- row-->
				
				
				       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-4 col-md-6">
         <a href="booking.php">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        <i class="fa fa-group fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
<?php
$query = "SELECT * FROM booking";
$select_all_products = mysqli_query($connection, $query);
$products_count = mysqli_num_rows($select_all_products);
echo "<div class='huge'>{$products_count}</div>"

?>
                    
                  
                        <div><h4>Booking</h4></div>
                    </div>
                </div>
            </div>
          
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
           
        </div>
         </a>
    </div>
    <div class="col-lg-4 col-md-6">
        <a href="car_details.php">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
$query = "SELECT * FROM car_details";
$select_all_category = mysqli_query($connection, $query);
$category_count = mysqli_num_rows($select_all_category);
echo "<div class='huge'>{$category_count}</div>"

?>
                      <div><h4>Car</h4></div>
                    </div>
                </div>
            </div>
           
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
        </div>
             </a>
    </div>
     <div class="col-lg-4 col-md-6">
        <a href="coupon.php">
        <div class="panel panel-ylow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-picture fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
$query = "SELECT * FROM coupon_details";
$select_coupon_orders = mysqli_query($connection, $query);
$coupon_count = mysqli_num_rows($select_coupon_orders);
echo "<div class='huge'>{$coupon_count}</div>"

?>
                      <div><h4>Coupons</h4></div>
                    </div>
                </div>
            </div>
           
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
          
        </div>
          </a>
    </div>
    
       <div class="col-lg-4 col-md-6">
          <a href="customer_details.php">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-film fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
$query = "SELECT * FROM customer_details";
$select_all_customer = mysqli_query($connection, $query);
$user_count = mysqli_num_rows($select_all_customer);
echo "<div class='huge'>{$user_count}</div>"

?>
                         <div><h4>Customers</h4></div>
                    </div>
                </div>
            </div>
         
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
          
        </div>
          </a>
    </div>
     <div class="col-lg-4 col-md-6">
          <a href="transaction.php">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-film fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
$query = "SELECT * FROM billing_details";
$select_all_billing = mysqli_query($connection, $query);
$user_count = mysqli_num_rows($select_all_billing);
echo "<div class='huge'>{$user_count}</div>"

?>
                         <div><h4>All Transaction</h4></div>
                    </div>
                </div>
            </div>
         
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
          
        </div>
          </a>
    </div>
   

    <div class="col-md-8 col-12">
    <div class="text-center">
    	<h2 style="font-weight:700; text-transform:uppercase; color:#FFC107; margin-bottom:8px;"> Recent Bookings </h2>
    	<hr style="width:20%; border:2px solid #FFC107; margin-top:0px;">
    </div>
    <table class="table table-bordered text-center table-striped" >
				<tbody>
					<tr>
						<th class="th">Customer Name</th>
						<th>Pick Up</th>
						<th>View</th>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
						<td>Somnath Da</td>
					</tr>
				</tbody>
			</table>
    	</div>   	
   	</div>
    
</div>
               
            
			   </div> 
			</div>      
			
			
				<!-- container-->
		
	
		 <?php include "includes/admin_footer.php" ?>
        
