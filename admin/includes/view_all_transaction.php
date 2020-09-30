<?php
if(!isset($_SESSION['admin_role'])){
header("location: ../index.php");
}
//if(isset($_POST['checkBoxArray'])){
//	
//foreach($_POST['checkBoxArray'] as $billingValueId){
//	
//	
// $bulk_options = $_POST['bulk_options'];
//	
//	switch($bulk_options) {
//		
//			
//		case 'delete':
//			
//	$query = "DELETE FROM builling_details  WHERE billing_details_id = {$billingValueId} ";
//			
//			$delete_status = mysqli_query($connection, $query);
//			confirmQuery($delete_status);
//			break;
//		case 'clone':
//			
//	}
//		
//	}
//}
?>
         
   
        <div class="row">
<!--
 <div id="bulkOptionsContainer" class="col-xs-4">
<select class="form-control" name="bulk_options" id="">
<option value="">Select Option</option>
<option value="published">Publish</option>
<option value="draft">Draft</option>
<option value="delete">Delete</option>
<option value="clone">Clone</option>
	
</select>	

</div>
       
-->
              	
       
      
      	         	
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
		<th>Customer Id</th>
		<th>booking Id</th>
		<th>Transaction Id</th>
		<th>Billing Ammount</th>
		<th>Date</th>
		<th>View</th>
	</tr>

</thead>

<tbody>
<?php
	if(isset($_POST['find'])){
		$search = $_POST['search'];
	$counter = 1;
$query = "SELECT * FROM billing_details WHERE transaction_id = $search";
        $select_product = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_product )) {
			
$booking_id= $row['booking_id'];


echo "<tr>";
?>
<td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $booking_id;  ?>'> </td>

<td> <?php  echo $counter;   ?></td>
<td> <?php  echo $row['customer_id'];  ?></td>
<td> <?php  echo $row['booking_id'];?></td>
<td> <?php  echo $row['transaction_id'];  ?></td>
<td> <?php  echo $row['billing_ammount'];  ?></td>
<td> <?php  echo $row['date'];  ?></td>
<?php		
	echo "<td><a href='view_details.php?id={$booking_id}'>View</td>";
echo "</tr>";
			
			$counter = $counter+1;
		
		}	
	}else{
$counter = 1;
$query = "SELECT * FROM billing_details ORDER BY date DESC";
        $select_product = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_product )) {
			
$booking_id= $row['booking_id'];


echo "<tr>";
?>
<td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $booking_id;  ?>'> </td>

<td> <?php  echo $counter;   ?></td>
<td> <?php  echo $row['customer_id'];  ?></td>
<td> <?php  echo $row['booking_id'];?></td>
<td> <?php  echo $row['transaction_id'];  ?></td>
<td> <?php  echo $row['billing_ammount'];  ?></td>
<td> <?php  echo $row['date'];  ?></td>
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
     
    
   