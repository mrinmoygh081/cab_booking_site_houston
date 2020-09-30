<div class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">Houston Taxis Services</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">

   <li><a href="">Users Online: <?php echo users_online(); ?></a></li>

<li><a href="../index.php">HOME SITE</a></li>




<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
<?php
	
if(isset($_SESSION['username'])) {
	
	echo $_SESSION['username'];
	
}
	
	
?>


<b class="caret"></b></a>
<ul class="dropdown-menu">
	<li>
		<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
	</li>
</ul>
</li>
</ul>



<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav side-nav">
<li>
	<a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
</li>

 <li>
	<a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Bookings <i class="fa fa-fw fa-caret-down"></i></a>
	<ul id="posts_dropdown" class="collapse">
		<li>
			<a href="./booking.php"> View All Booking</a>
		</li>
	</ul>
</li>

<li>
	<a href="javascript:;" data-toggle="collapse" data-target="#osts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Cars <i class="fa fa-fw fa-caret-down"></i></a>
	<ul id="osts_dropdown" class="collapse">
		<li>
			<a href="./car_details.php"> View All Cars</a>
		</li>
		
	</ul>
</li>


 <li>
	<a href="javascript:;" data-toggle="collapse" data-target="#down"><i class="fa fa-fw fa-arrows-v"></i>Coupons <i class="fa fa-fw fa-caret-down"></i></a>
	<ul id="down" class="collapse">
		<li>
			<a href="./coupon.php"> View All Coupons</a>
		</li>
		
	</ul>
</li>
 <li>
	<a href="javascript:;" data-toggle="collapse" data-target="#dwn"><i class="fa fa-fw fa-arrows-v"></i>Customer <i class="fa fa-fw fa-caret-down"></i></a>
	<ul id="dwn" class="collapse">
		<li>
			<a href="./customer_details.php"> View All Customer</a>
		</li>
		
	</ul>
</li>


<li>
	<a href="javascript:;" data-toggle="collapse" data-target="#town"><i class="fa fa-fw fa-arrows-v"></i>Emails <i class="fa fa-fw fa-caret-down"></i></a>
	<ul id="town" class="collapse">
		<li>
			<a href="./email.php"> View All Emails</a>
		</li>
		
	</ul>
</li>

</ul>
</div>
<!-- /.navbar-collapse -->
</nav>
</div>