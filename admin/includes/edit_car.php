<?php


if(isset($_GET['car_id'])) {
	
$the_car_id = $_GET['car_id'] ;
	
	
}

$query = "SELECT * FROM car_details WHERE car_id = $the_car_id ";
        $select_car_by_id = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc( $select_car_by_id )) {

            $car_id = $row['car_id'];
            $car_name = $row['car_name'];
            $car_type = $row['car_type'];
            $car_color = $row['car_color'];
            $car_price = $row['car_price'];
            $hourly_price = $row['hourly_price'];
            $car_img = $row['car_img'];
		}

if(isset($_POST['update_car'])) {
	
	
    $car_name = $_POST['car_name'];
	$car_type = $_POST['car_type'];
	$car_color = $_POST['car_color'];
	$car_price = $_POST['car_price'];
	$car_image = $_FILES['image']['name'];
	$car_image_temp = $_FILES['image']['tmp_name'];
	$hourly_price = $_POST['hourly_price'];
	
	
	
	move_uploaded_file($car_image_temp, "../img/object/$car_image");
	
	if(empty($car_image)) {
		
		$query = "SELECT * FROM car_details WHERE car_id = $the_car_id ";
		
		$select_image = mysqli_query($connection, $query);
		
		while($row = mysqli_fetch_array($select_image)) {
			
			$car_image = $row['car_img'];
		}
		
	}
	
	
	$query = "UPDATE car_details SET ";
	$query .= "car_name = '{$car_name}', ";
	$query .= "car_type = '{$car_type}', ";
	$query .= "car_color = '{$car_color}', ";
	$query .= "car_price = '{$car_price}', ";
	$query .= "hourly_price = '{$hourly_price}', ";
	$query .= "car_img = '{$car_image}' ";
	$query .= "WHERE car_id = '{$the_car_id}' ";
	
	$update_post = mysqli_query($connection, $query);
	
	
	confirmQuery($update_post);
	
	
	echo "<p class='bg-success'>Post Updated.</p>";
	

}

?>





<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
	<label for="car_name">Car Name</label>
	<input  value="<?php echo $car_name; ?>" type="text" class="form-control" name="car_name">
</div>
<div class="form-group">
	<label for="car_type">Car Type</label>
	<input value="<?php echo $car_type; ?>" type="text" class="form-control" name="car_type">
</div>
<div class="form-group">
	<label for="car_color">Car Color</label>
	<input value="<?php echo $car_color; ?>" type="text" class="form-control" name="car_color">
</div>
<div class="form-group">
	<label for="car_price">Price Per Mile</label>
	<input  value="<?php echo $car_price; ?>" type="text" class="form-control" name="car_price">
</div>
<div class="form-group">
	<label for="hourly_price">Hourly Price</label>
	<input  value="<?php echo $hourly_price; ?>" type="text" class="form-control" name="hourly_price">
</div>
<div class="form-group">
	<img width="100" src="../images/<?php echo $car_img ?>" alt="">
	<input type="file" name="image">
</div>
<div class="form-group">
	
	<input class="bt btn-primary" type="submit" name="update_car" value="Update post">
</div>
</form>