<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['admin_login'])){
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$mobile = mysqli_real_escape_string($connection, $mobile);
	$password = mysqli_real_escape_string($connection, $password);
	$query = "SELECT * FROM admin WHERE admin_phone = '{$mobile}'";	
	$select_admin_query = mysqli_query($connection, $query);
	if(!$select_admin_query) {
		die("query faild" . mysqli_error($connection));
	}
    while($row = mysqli_fetch_array($select_admin_query)) {
        $db_admin_id = $row['admin_id'];
        $db_admin_phone = $row['admin_phone'];
        $db_admin_name = $row['admin_name'];
        $db_admin_password = $row['admin_password'];
        $db_admin_role = $row['admin_role'];
    }

    //$password = ($password, $db_user_password);	

    if($mobile !== $db_admin_phone && $password !== $db_admin_password) {	
        header("Location: ./admin_login.php ");	

    } elseif($mobile == $db_admin_phone && $password == $db_admin_password) {

        $_SESSION['admin_name'] = $db_admin_name;	
        $_SESSION['admin_role'] = $db_admin_role;	
        header("Location: ./admin");

    } else {
        header("Location: ./admin_login.php ");	
    }
}
?>