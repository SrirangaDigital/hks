<?php
$name = $_REQUEST ['name'] ;
$email = $_REQUEST ['email'] ;
$comment = $_REQUEST ['comment'] ;

$message = "Name: $name\nEmail: $email\nComment: $comment" ;

mail ("kishor.sathigrama@gmail.com","You have Received Feedback", "Information Requested:\n\n$message", "Form: $email") ;

header ("Location : http://www.hksmysuru.org/thankyou.html")

?>
