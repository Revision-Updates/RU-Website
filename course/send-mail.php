<?php
// send the form to the specify email

// CONFIG VARS
$subject = "Revision Updates | Ambassadors Request";
$to = "hello@revisionupdates.info";
$from = $_POST['email'];


//data
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;


//send
mail($to, $subject, $msg, $headers);
?>