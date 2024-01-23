<?php
$post_variables=$_POST;
$dir='/home2/icwl0738/iCWLNet_Application_Code/ICWLNet_Full_Website_Builder/bcms/sessions/';
session_save_path($dir);
error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    $http_origin = $_SERVER['HTTP_ORIGIN'];
    header("Access-Control-Allow-Origin: $http_origin");
}
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

/*
// Check if the session variable 'count' is set
if (!isset($_SESSION['count'])) {
    // If not set, initialize it to 0
    $_SESSION['count'] = 0;
}

// Increment the session variable 'count'
$_SESSION['count']++;
*/
spl_autoload_register(function ($class_name) {
    include "./bcms/classes/".$class_name . '.php';
});
// Display the updated count
//exit("me");
include("bcms/index.php");
//print_r($post_variables);
//echo "Count: {$_SESSION['count']}";
//print "\n\n".session_id();
?>