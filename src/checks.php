<?php 
session_start();
include("mastermind.php");
$check = new Mastermind;

if (!isset($_SESSION["START_VALUES"])) {
	$_SESSION["START_VALUES"] = $check->start();
}

if(isset($_GET["data"])){

	echo json_encode($check->review($_GET["data"]));
	// print_r($_GET["data"]);
	// print_r($_SESSION["START_VALUES"]);
	// print_r($response);

}
