<?php


if(isset($_GET['coupon_id'])) {
	
$the_coupon_id = $_GET['coupon_id'] ;
	
	
}

$query = "SELECT * FROM coupon_details WHERE coupon_id = $the_coupon_id ";
        $select_coupon_by_id = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_coupon_by_id )) {
			
$coupon_id = $row['coupon_id'];
$coupon_code = $row['coupon_code'];
$coupon_discount = $row['coupon_discount'];
		}

if(isset($_POST['update_coupon'])) {
	
	
    $coupon_code = $_POST['coupon_code'];
	$coupon_discount = $_POST['coupon_discount'];
	
	$query = "UPDATE coupon_details SET ";
	$query .= "coupon_code = '{$coupon_code}', ";
	$query .= "coupon_discount = '{$coupon_discount}' ";
	$query .= "WHERE coupon_id = '{$the_coupon_id}' ";
	
	$update_post = mysqli_query($connection, $query);
	confirmQuery($update_post);
	echo "<p class='bg-success'>Coupon Updated.</p>";
}

?>





<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
	<label for="coupon_code">Coupon Code</label>
	<input  value="<?php echo $coupon_code; ?>" type="text" class="form-control" name="coupon_code">
</div>
<div class="form-group">
	<label for="coupon_discount">Coupon Discount (In percent)</label>
	<input value="<?php echo $coupon_discount; ?>" type="text" class="form-control" name="coupon_discount">
</div>
<div class="form-group">
	
	<input class="bt btn-primary" type="submit" name="update_coupon" value="Update coupon">
</div>
</form>