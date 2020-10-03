<?php

$to_email="jyotiganju25@gmail.com";
$subject="Simple Email Test Via PHP";
$body="Bhai kaisa hai! ";
$headers="From:ashishganju25@gmail.com";
if(mail( $to_email, $subject, $body, $headers)){
    echo "Email sent successfully $to_email.....";

}
else{
    echo "Email send Failed";
}




?>