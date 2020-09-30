<?php
session_start();
if(!isset($_SESSION['pay_money'])){
	header("location: getTaxi.php");
}
if(!isset($_SESSION['distance'])){
	header("location: getTaxi.php");
}
$config = array(
    "environment" => "live",
    "user"  => "issanirendjambe1_api1.gmail.com",
    "pwd"  => "WK3H88KXQKP9RXKV",
    "signature"  => "ARLVDP2L.4MqfOFJIuBr1CdO9YBnAINMGmnbaH55LcjgM8zNUYmQQKno",
    "version"  => 113
);

//$config = array(
//    "environment" => "sandbox",
//    "user"  => "sb-im1wu2492144_api1.business.example.com",
//    "pwd"  => "WZ5MFHYEFW944QAH",
//    "signature"  => "A-zMrqrGLVzmuisNeb0shyf-U73yAgys8FfiUCSm8-FKlWT11BeDWIIb",
//    "version"  => 113
//);