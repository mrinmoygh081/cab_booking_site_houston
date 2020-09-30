<?php
if(!isset($_SESSION['admin_role'])){
header("location: ../index.php");
}

?>
         
         
        
        
        <div class="row">
 
      <div class="col-xs-4">
       <br>
      
<h4>Blog Search</h4>
<form action="" method="post">
<div class="input-group">
<input name="search" type="text" class="form-control">
<span class="input-group-btn">
<button name="find" class="btn btn-default" type="submit">
<span class="glyphicon glyphicon-search"></span>
</button>
</span>
</div>
</form><!--search form-->
<!-- /.input-group -->
<?php  ?>
      

      </div> 
      		
      				
     </div>
      <div class="table-responsive">
      
       <table class="table table-bordered table-hover">  	

<thead>
<br>
	<tr>
	<br>
	<th><input name="selectAllBoxes" id="selectAllBoxes" type="checkbox"> </th>
		<th>Sl.No</th>
		<th>Booking Id</th>
		<th>Customer Name</th>
		<th>Pickup Address</th>
		<th>Dropoff Address</th>
		<th>Booking Hourly</th>
		<th>Pickup Date & Time</th>
		<th>Payment Mode</th>
		<th>View</th>
	</tr>

</thead>

<tbody>
<?php
	if(isset($_POST['find'])){
		$search = $_POST['search'];
	$counter = 1;
$query = "SELECT * FROM booking WHERE booking_id = $search";
        $select_product = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_product )) {
			
$booking_id= $row['booking_id'];


echo "<tr>";
?>
<td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $booking_id;  ?>'> </td>

<td> <?php  echo $counter;   ?></td>
<td> <?php  echo $row['booking_id'];  ?></td>
<td> <?php  echo $row['first_name'];?>  <?php  echo $row['last_name'];?></td>
<td> <?php  echo $row['pickup_address'];  ?></td>
<td> <?php  echo $row['dropup_address'];  ?></td>
<td> <?php  echo $row['booking_hour'];  ?></td>
<td> <?php  echo $row['booking_date'];?> , <?php echo $row['booking_time'];?></td>
<td> <?php  echo $row['payment_mode'];?></td>

<?php		
	echo "<td><a href='view_details.php?id={$booking_id}'>View</td>";
echo "</tr>";
			
			$counter = $counter+1;
		
		}	
	}else{
		$counter = 1;
$query = "SELECT * FROM booking ORDER BY booking_id DESC";
        $select_product = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_product )) {
			
$booking_id= $row['booking_id'];


echo "<tr>";
?>
<td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $booking_id;  ?>'> </td>

<td> <?php  echo $counter;   ?></td>
<td> <?php  echo $row['booking_id'];  ?></td>
<td> <?php  echo $row['first_name'];?>  <?php  echo $row['last_name'];?></td>
<td> <?php  echo $row['pickup_address'];  ?></td>
<td> <?php  echo $row['dropup_address'];  ?></td>
<td> <?php  echo $row['booking_hour'];  ?></td>
<td> <?php  echo $row['booking_date'];?> , <?php echo $row['booking_time'];  ?></td>
<td> <?php  echo $row['payment_mode'];?></td>

<?php		
	echo "<td><a href='view_details.php?id={$booking_id}'>View</td>";
echo "</tr>";
			
			$counter = $counter+1;
		
		}	
	}

	
?>
 		        		        		        		
        	
        </tbody>
</table>
</div>
          
 <div>
 	 <script src="js/scripts.js"></script>

 </div>     
     
    
   