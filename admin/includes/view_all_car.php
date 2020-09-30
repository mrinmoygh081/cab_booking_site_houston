
<?php
if(isset($_POST['checkBoxArray'])){
	
foreach($_POST['checkBoxArray'] as $carValueId){
	
	
 $bulk_options = $_POST['bulk_options'];
	
	switch($bulk_options) {
		case 'delete':
	$query = " DELETE FROM car_details  WHERE car_id={$carValueId} ";
			
			$delete_status = mysqli_query($connection, $query);
			confirmQuery($delete_status);
			
			
			break;
			
			
			
		case 'clone':
			
			
			
			
			
	}
	
		
	}
	
}
?>
      

       
        
         
           <form action="" method="post"> 
        
               
       <table class="table table-bordered table-hover">
       
<div id="bulkOptionsContainer" class="col-xs-4">
	
<select class="form-control" name="bulk_options" id="">
<option value="">Select Option</option>
<option value="published">Publish</option>
<option value="draft">Draft</option>
<option value="delete">Delete</option>
<option value="clone">Clone</option>
	
</select>	

</div>       	
      <div class="col-xs-4">
      	<input type="submit" name="submit" class="btn btn-success" value="Apply">
      	<a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>
      </div> 	
     
        	

<thead>
	<tr>
	<th><input name="selectAllBoxes" id="selectAllBoxes" type="checkbox"> </th>
		<th>Sl.No</th>
		<th>Car Name</th>
		<th>Car Type</th>
		<th>Car Color</th>
		<th>Per Mile Price</th>
		<th>Hourly Price</th>
		<th>Image</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

</thead>

<tbody>
<?php
	$counter = 1;
$query = "SELECT * FROM car_details";
        $select_car = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_car )) {
			
$car_id = $row['car_id'];
$car_name = $row['car_name'];
$car_type = $row['car_type'];
$car_color = $row['car_color'];
$car_price = $row['car_price'];
$hourly_price = $row['hourly_price'];
$car_img = $row['car_img'];
echo "<tr>";
?>
<td><input id='selectAllBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $car_id;  ?>'> </td>



<?php		
echo "<td>" . $counter ."</td>";
			echo "<td>$car_name</td>";
			echo "<td>$car_type</td>";
			echo "<td>$car_color</td>";
			echo "<td>$car_price</td>";
			echo "<td>$hourly_price</td>";
			echo "<td><img width='100px'src='../img/object/$car_img'</td>";
			echo "<td><a href='car_details.php?source=edit_car&car_id={$car_id}'>Edit</td>";
			echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete
	'); \" href='car-details.php?delete={$car_id}'>Delete</td>";
      echo "</tr>";
			$counter = $counter+1;
		}
?>
        </tbody>
  </table>
     </form>     
         
   <?php
if(isset($_GET['delete'])) {
	
$the_car_id = $_GET['delete'];
	
	$query = "DELETE FROM car_details WHERE car_id = {$the_car_id} ";
	$delete_query = mysqli_query($connection, $query);
	header("LOCATION: posts.php");
	
}


?>     
       
 <div>
 	 <script src="js/scripts.js"></script>

 </div>     
     
    
   