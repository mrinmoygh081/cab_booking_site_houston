<?php

require('includes/config.php');
require('includes/paypal.php');
$paypal = new PayPal($config);

$shippingAddress = [
    'EMAIL' => '',
    'PAYMENTREQUEST_n_SHIPTONAME' => $_SESSION['first_name'],
    'PAYMENTREQUEST_n_SHIPTOPHONENUM' => $_SESSION['phone'],
    'PAYMENTREQUEST_n_SHIPTOSTREET' => $_SESSION['pickup'],
    'PAYMENTREQUEST_n_SHIPTOSTREET2' => '',
    'PAYMENTREQUEST_n_SHIPTOCITY' => '',
    'PAYMENTREQUEST_n_SHIPTOCOUNTRYCODE' => '',
    'PAYMENTREQUEST_n_SHIPTOSTATE' => '',
    'PAYMENTREQUEST_n_SHIPTOZIP' => '',
];

$_SESSION['SHIPPING'] = $shippingAddress;

$paymentData = [
    'method'  => 'SetExpressCheckout',
    'paymentrequest_0_paymentaction' => 'booking',
    'paymentrequest_0_amt'  => 1,
    'paymentrequest_0_currencycode'  => 'USD',
    'paymentrequest_0_itemamt'  => 1,
    'paymentrequest_0_shipdiscamt'  => '0',
    'l_paymentrequest_0_name0'  =>'',
    'l_paymentrequest_0_amt0'  => 1,
    'l_paymentrequest_0_qty0'  => '1',
    'l_paymentrequest_0_taxamt0'  => '0',
    'l_paymentrequest_0_number0'  => $_SESSION['pickup'],
    'l_paymentrequest_0_itemcategory0'  => 'Physical',
    'returnurl'  => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/success.php',
    'cancelurl'  => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/cancel.php',
];

$result = $paypal->call(array_merge($_SESSION['SHIPPING'], $paymentData));

if ($result['ACK'] == 'Success') {
    $paypal->redirect($result);
} else {
    var_dump($result);exit;
    echo 'Handle the payment creation failure <br>';
}