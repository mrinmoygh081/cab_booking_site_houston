<?php include "includes/admin_header.php" ?>
<style>
	.th {
		font-weight: 700;
	}
	tr td {
		font-size: 25px;
	}
	@media (max-width:996px){
		tr td {
			font-size: 18px;
		}
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
            
<?php
	if(isset($_GET['id']) && !empty($_GET['id'])){
		 $id = $_GET['id'];
		$query="SELECT * FROM booking WHERE booking_id=$id";
			$booking_connection = mysqli_query($connection, $query);
			$row = mysqli_fetch_assoc($booking_connection);

			$pickup_address= $row['pickup_address'];
			$dropoff_address= $row['dropup_address'];

		}		

?>
           <div class="bg-white" style="background-color: #fff !important;">
			<div class="text-center">
				<h1>Customer Details</h1>
			</div>
			<table class="table table-bordered text-center table-striped" >
				<tbody>
					<tr>
						<td class="th">Booking id</td>
						<td>641654</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
					</tr>
					<tr>
						<td>name</td>
						<td>Somnath Da</td>
					</tr>
				</tbody>
			</table>
		</div>
            </div>
        </div>
 
    </div>
</div>
</div>
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>










