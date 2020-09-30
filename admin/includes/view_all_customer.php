                         <div class="table-responsive">
      
       <table class="table table-bordered table-hover">  	
        	<thead>
        		<tr>
        			<th>Sl.no</th>
        			<th>Id</th>
        			<th>Customer Name</th>
        			<th>Customer Phone Number</th>
        			<th>Customer Email</th>
        			<th>Delete</th>
        		</tr>
        	</thead>
        <tbody>
<?php
	$counter = 1;
$query = "SELECT * FROM customer_details order by customer_id desc";
        $select_customer = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_customer )) {
		
$customer_id = $row['customer_id'];
$customer_name = $row['customer_name'];
$customer_ph	 = $row['customer_ph'];
$customer_email = $row['customer_email'];
echo "<tr>";
			echo "<td>" . $counter ."</td>";	
            echo "<td>$customer_id</td>";
			echo "<td>$customer_name</td>";
			echo "<td>$customer_ph</td>";
			echo "<td>$customer_email</td>";
			echo "<td><a href='customer_details.php?delete={$customer_id}'>Delete</td>";
			
echo "</tr>";
		$counter = $counter+1;
		}
?>
        		
        	
        </tbody>
  </table>
</div>    
         
   <?php





if(isset($_GET['delete'])) {
	
	if(isset($_SESSION['admin_role'])) {
		
	if($_SESSION['admin_role'] == 'admin') {
	

	
$the_customer_id =$_GET['delete'];
	
	$query = "DELETE FROM customer_details WHERE customer_id = {$the_customer_id} ";
	$delete_query = mysqli_query($connection, $query);
	
	header("LOCATION: customer_details.php");
	}
}
}

?>     
       
      
     
    
   