<?php
/**
 * Created by PhpStorm.
 * User: montanawong
 * Date: 8/31/15
 * Time: 22:18
 */

if(empty($_POST)){
	header("Location: ../index.php");
	exit();
}
$send_to = "montanawong@gmail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$headers = "From: " . $from . "\r\n" .
    "Reply-To: " . $from . "\r\n";
$message = $_POST['message'];
if(mail($send_to, "Website Visitor: " . $name, $message, $headers)) {
    header("Location: ../index.php?status=emailsuccess");
}
else{
    header("Location: ../index.php?status=emailfailure");
}
exit();
?>