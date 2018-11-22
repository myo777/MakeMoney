<?php session_start(); 

if (isset($_POST['form']) && $_POST['form'] == "playaagain") {
	session_destroy();
	header('Location: makemoney.php');
}

if (!isset($_SESSION['gold'])) {
	$_SESSION['gold'] = 0;
	$_SESSION['status'] = array();
}

if(isset($_POST['location']) && $_POST['location'] == "farm") {  
	$farm_gold = rand(10, 20);
	$_SESSION['gold'] += $farm_gold;
//	$_SESSION['color'] = "green";
	array_unshift($_SESSION['status'], "You entered a farm and earned " . $farm_gold . " golds. (" . date("F jS, Y g:i a") . ")<br>");
	header('Location: makemoney.php');
}

if(isset($_POST['location']) && $_POST['location'] == "cave") {  
	$cave_gold = rand(5, 10);
	$_SESSION['gold'] += $cave_gold;
	array_unshift($_SESSION['status'], "You entered a cave and earned " . $cave_gold . " golds. (" . date("F jS, Y g:i a") . ")<br>");
	header('Location: makemoney.php');
}

if(isset($_POST['location']) && $_POST['location'] == "house") {  
	$house_gold = rand(2, 5);
	$_SESSION['gold'] += $house_gold;
	array_unshift($_SESSION['status'], "You entered a house and earned " . $house_gold . " golds. (" . date("F jS, Y g:i a") . ")<br>");
	header('Location: makemoney.php');
}

if(isset($_POST['location']) && $_POST['location'] == "casino") {  
	$casino_gold = rand(-50, 50);
	$_SESSION['gold'] += $casino_gold;
	if ($casino_gold > 0) {
		array_unshift($_SESSION['status'], "You entered a casino and earned " . $casino_gold . " golds. (" . date("F jS, Y g:i a") . ")<br>");
	} elseif ($casino_gold < 0) {
		array_unshift($_SESSION['status'], "<div id='red'>You entered a casino and earned " . $casino_gold . " golds. (" . date("F jS, Y g:i a") . ")<br></div>");
	}
	header('Location: makemoney.php');	
}

?>