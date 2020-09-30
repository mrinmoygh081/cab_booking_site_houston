
<?php include "admin_db.php"; ?>

 <?php include "functions.php";?>

<?php ob_start(); ?>
<?php session_start(); ?>


<?php 
    if(!isset($_SESSION['admin_role'])) {
        header("location: ../admin_login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Houston Taxis Service Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="css/styles.css" rel="stylesheet">
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <!-- Can use this one below as well -->
<!--   <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script> -->
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
<script src="js/tiny-local-copy.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
</head>
<body>



