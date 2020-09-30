
<?php
if(isset($_POST['checkBoxArray'])){
	
foreach($_POST['checkBoxArray'] as $couponValueId){
	
	
 $bulk_options = $_POST['bulk_options'];
	
	switch($bulk_options) {
		case 'delete':
	$query = " DELETE FROM coupon_details  WHERE coupon_id={$couponValueId} ";
			
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
      	<a class="btn btn-primary" href="coupon.php?source=add_coupon">Add New</a>
      </div> 	
     
        	

<thead>
	<tr>
	<th><input name="selectAllBoxes" id="selectAllBoxes" type="checkbox"> </th>
		<th>Sl.No</th>
		<th>Coupon Id</th>
		<th>Coupon Code</th>
		<th>Coupon Discount (In Percent)</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

</thead>

<tbody>
<?php
	$counter = 1;
$query = "SELECT * FROM coupon_details";
        $select_coupon = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_coupon )) {
			
$coupon_id = $row['coupon_id'];
$coupon_code = $row['coupon_code'];
$coupon_discount = $row['coupon_discount'];

echo "<tr>";
?>
<td><input id='selectAllBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $car_id;  ?>'> </td>



<?php		
echo "<td>" . $counter ."</td>";
			echo "<td>$coupon_id</td>";
			echo "<td>$coupon_code</td>";
			echo "<td>$coupon_discount</td>";
			echo "<td><a href='coupon.php?source=edit_coupon&coupon_id={$coupon_id}'>Edit</td>";
			echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete
	'); \" href='coupon.php?delete={$coupon_id}'>Delete</td>";
      echo "</tr>";
			$counter = $counter+1;
		}
?>
        </tbody>
  </table>
     </form>     
         
   <?php
if(isset($_GET['delete'])) {
	
	if(isset($_SESSION['admin_role'])) {
		
	if($_SESSION['admin_role'] == 'admin') {
	

	
$the_coupon_id =$_GET['delete'];
	
	$query = "DELETE FROM coupon_details WHERE coupon_id = {$the_coupon_id} ";
	$delete_query = mysqli_query($connection, $query);
	
	header("LOCATION: coupon.php");
	}
}
}


?>     
       
 <div>
 	 <script src="js/scripts.js"></script>

 </div>     
     
    
   