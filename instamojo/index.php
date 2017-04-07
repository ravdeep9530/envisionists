<?php

$rate=$_GET['rate'];
$name=$_GET['name'];
$email=$_GET['email'];
$hex=$_GET['hex'];
$id=$_GET['id'];
require("src/instamojo.php");

$api = new Instamojo\Instamojo('cb143f4057dde14f1966bb5cacb65163','871284d276ab8a384c36b8f89f3b504e');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Buy Portal",
        "amount" => $rate,
		"buyer_name"=> $name,
        "send_email" => true,
		"send_sms"=>false,
		 "phone" =>'',
        "email" => $email,
        "redirect_url" => "http://weburl.com/success.php?id=".$id."&hex=".$hex
        ));
   // print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
$pay_url=$response['longurl'];
//echo "http://www.theapproach.in/portal/pages/upgrade_done.php?hex=".$hex;
header("Location:$pay_url");
?>