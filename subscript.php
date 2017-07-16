<?php
if(isset($_POST['submit']))
{
$recipient1 =$_POST['email1'];
$recipient2 = 'chawandipsi@gmail.com';
$subject1 = "IT Solution newsletter";
$subject2 = "IT solution Subscriber";	
$body2 = "got subscriber contact to following mail: \n Email:".$recipient1 ;
$body1 = "IT SOLUTION Newsletter \n Thank you for subscription \n Your Subscription to our list has been confirmed ";
mail( $recipient1, $subject1, $body1, $recipient2); 
mail($recipient2,$subject2,$body2,$recipient1);
echo "<h1>You Are Successfully Subscribe To OUR Newsletter</h1>";	
}
?>