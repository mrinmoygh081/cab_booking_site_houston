<body onload="myfunction()">
	<!-- Preloader -->
		<div class="" id="preloader"></div> 
	<!-- Navbar -->
	<header style="z-index: 9;">
		<nav class="home_nav">
			<div class="row">
				<div class="col-2">
					<div class="brand_img">
						<a href="index.php">
							<p class="houston">Houston </p>
							<p class="taxi">Taxis Service</p>
						</a>
					</div>
				</div>
				<div class="col-8">
					<div class="d-flex justify-content-between h-100">
						<div class="row h-100">
							<ul class="nav navbar-nav nav_ul" style="flex-direction: row;">
								<li><a href="index.php" class="<?php if ($page=="index") { echo "active";}  ?>">Home</a></li>
								<li><a href="getTaxi.php" class="<?php if ($page=="get_texi") { echo "active";}  ?>">Get Taxi</a></li>
								
								<?php if(isset($_SESSION['customer_id'])) { ?>
								    <li><a href="my_booking.php" class="<?php if ($page=="my_booking") { echo "active";}  ?>">Booking</a></li>
								<?php } ?>
								
								<li><a href="hourly_rate.php" class="<?php if ($page == "rate") { echo "active";}  ?>">Rate</a></li>
								<li><a href="fleet.php" class="<?php if ($page == "fleet") { echo "active";}  ?>">Fleet</a></li>
								<li><a href="about.php" class="<?php if ($page=="about") { echo "active";}  ?>">About</a></li>
								<li><a href="contact.php" class="<?php if ($page=="contact") { echo "active";}  ?>">Contacts</a></li>
								<?php if(!isset($_SESSION['customer_id'])) { ?>
								    <li><a href="login.php" class="<?php if ($page=="login") { echo "active";}  ?>">Login</a></li>
                                <?php } ?>
                                
							</ul>
						</div>
								
						<div class="nav_num px-3">
							<p><span class="text-warning">+1(647)560</span><span class="">-1059</span></p>
						</div>
					</div>
				</div>
				<div class="col-2 nav_btn_col">
					<div>
						<!-- <p><i class="fa fa-search"></i></p> -->
						<button onclick="getTaxi()" class="btn_nav"> BOOK A RIDE</button>
					</div>
				</div>
			</div>
		</nav>
        
		<div class="home_nav_sm">
			<div class="row">
				<span>
					<a onclick="openSlideMenu()">
						<svg width="50" height="50">
							<path d="M0,5 30,5" stroke="#000" stroke-width="5" />
							<path d="M0, 14 30,14" stroke="#000" stroke-width="5" />
							<path d="M0,23,30,23" stroke="#000" stroke-width="5" />
						</svg>
					</a>
				</span>
				<div>
					<div class="brand_img">
						<a href="/">
							<!-- <img src="img/logo/demo.png" alt="Houston VIP Taxi Logo" class="img-fluid"> -->
							<p class="houston">Houston </p>
							<p class="taxi">Taxi Services</p>
						</a>
					</div>
				</div>
			</div>
			<!-- For small device -->
			<div id="side-menu" class="side-nav">
				<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="getTaxi.php">Get Taxi</a></li>
					<li><a href="my_booking.php">Booking</a></li>
					<li><a href="hourly_rate.php">Rate</a></li>
					<li><a href="fleet.php">Fleet</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contacts</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
				<hr class="side-nav-hr">
				<p> <span class="text-warning">+1(647)560</span><span class="">-1059</span> </p>
			</div>
		</div>
	</header>