<?php
$con=mysqli_connect("localhost", "root","ishwar","uag");
// Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $full_name = $_POST["full_name"];
   $email_id = $_POST['email_id'];
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];
   $need = $_POST['need'];
   $database = $_POST['database']; 

   $sql="INSERT INTO users (full_name, email_id, user_name, password, need, db) VALUES ('$full_name', '$email_id', '$user_name', '$password', '$need', '$database')";

   $to      = 'kamal.kaur188@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: lamba.jaskaran@gmail.com' . "\r\n" .
    'Reply-To: lamba.jaskaran@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

   if (!mysqli_query($con,$sql)) {
     die('Error: ' . mysqli_error($con));
     }
     echo "1 record added";

     mysqli_close($con);
     ?> 
