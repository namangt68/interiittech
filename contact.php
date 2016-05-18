<?php

if (isset($_POST["submit"])) {
$fn = trim($_POST['InputName']);
$eid = trim($_POST['InputEmail']);
$cno = trim($_POST['InputContact']);
$msg = trim($_POST['InputMessage']);
$to = "interiittech.host@gmail.com"; 
$subject = "InterIITTech : $eid";
$body = "From: $fn \n E-Mail: $eid \n Contact no.: $cno \n\n Message: \n $msg";

if (mail ($to, $subject, $body)) {
	header('Location:index.php?r=success');
    } else {
	header("location:index.php?r=fail");
    }
    //echo $result;
}

?>