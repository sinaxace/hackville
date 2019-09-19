<?php

$connection = mysqli_connect("77.104.157.90", "corydasi_hack", "Q]sgOQ}]3_a8", "corydasi_hackville_emails");

$email = $_POST["email"];

$sql = "INSERT INTO emails Values (NULL, '$email')";

 $result = mysqli_query($connection, $sql) or die("Error inserting " . mysqli_error($connection));
 
/*$EmailTo = "hackademics@outlook.com";
$Subject = "New Message Received";
 
// prepare email body text

 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Would like to be updated about Hackville!";

$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}*/
 
?>
