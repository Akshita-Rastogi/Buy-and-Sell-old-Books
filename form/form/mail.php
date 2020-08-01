<?php 


$name=$_GET['name'];
$email=$_GET['email'];
$mob=$_GET['MOB'];
$college=$_GET['COLLEGE'];
$course=$_GET['COURSE'];

$to='kalyaniconsultancykota@gmail.com';
$subject='Interesting In Course';
$message ='Name : '.$name
.'  Email : '.$email
.'  Mobile Number : '.$mob.
'   College : '.$college.
'   Course : '.$course;
$header='From:shivamkushwah831@gmail.com';
mail($to,$subject,$message,$header);
header( "Location: 0-5741226442.pdf" );
?>