<?php include "includes/admin_header.php" ?>

    <div id="wrapper">
        
  

        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
<?php
			
if(isset($_GET['source'])) {
	
	$source = $_GET['source']; 


} else {
	
	$source = '';
}	
	switch($source)	{  
      case 'add_coupon';
			
			include "includes/add_coupon.php";
			
			break;
			
			case 'edit_coupon';
            include "includes/edit_coupon.php";			
			
			break;


		default:
			
			include "includes/view_all_coupon.php";
			break;
			
	}	
	





?>
    
     
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
</div>
     
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
