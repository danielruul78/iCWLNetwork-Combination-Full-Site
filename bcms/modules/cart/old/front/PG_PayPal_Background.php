<?
	include("../DB_Class.php");
	$r=new ReturnRecord();
	
	/*$req = 'cmd=_notify-validate';

	foreach ($_POST as $key => $value) {
	$value = urlencode(stripslashes($value));
	$req .= "&$key=$value";
	}
	
	// post back to PayPal system to validate
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	$fp = fsockopen ('sandbox.paypal.com', 80, $errno, $errstr, 30);
	*/
	// assign posted variables to local variables
	$item_name = $_POST['item_name'];
	$item_number = $_POST['item_number'];
	$payment_status = $_POST['payment_status'];
	$payment_amount = $_POST['mc_gross'];
	$payment_currency = $_POST['mc_currency'];
	$txn_id = $_POST['txn_id'];
	$receiver_email = $_POST['receiver_email'];
	$payer_email = $_POST['payer_email'];
	/*
	$Body=$header . $req;
	
	if (!$fp) {
	// HTTP ERROR
	echo "error";
	} else {
	fputs ($fp, $header . $req);
	while (!feof($fp)) {
	$res = fgets ($fp, 1024);
	$Body.="=======================<br>\n".$res;
	
	if (strcmp ($res, "VERIFIED") == 0) {
	// check the payment_status is Completed
	// check that txn_id has not been previously processed
	// check that receiver_email is your Primary PayPal email
	// check that payment_amount/payment_currency are correct
	// process payment
		*/
		
		$r->rawQuery("UPDATE OrderDetails SET Success='Yes' WHERE id='$item_number'");

	
	
?>
