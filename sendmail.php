<?php 
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $messages = $_POST['message'];
// $subject = "Comments";
// $to = "slaaash.dc@gmail.com";
// $msg = "<html>
// <head>
// <title>Comments/Suggestions</title>
// </head>

// <body>
// <p align='center'><img src='logo.png' width='500' height='100'> </p>";

// $msg.="From:".$name."
//        Message:". $messages."

// </body>
// </html>";

// // // Make sure to escape quotes

// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From:' .$email. "\r\n";

// mail($to, $subject, $msg, $headers);

 ?>


 <?php
// $send_to = 'delvallecarlo@gmail.com';  //type in the receiver's email address
// $subject = 'Test Mail';
// $body = '~Mail Content~';
// $header = 'From:example@gmail.com';
// if (
// 	mail($send_to, $subject, $body, $header)
// ) 
// {
// 	echo "The mail has been sent successfully.";
// } 
// else 
// {
// 	echo "Failed to send the mail.";
// }
// echo ini_set('display_errors',1);
?>

<?php 
// $to = "slaaash.dc@gmail.com";
$to = "delvallecarlo@gmail.com";
$message = "qweqw";
$subject = "q";
if(mail($to, "Subject: $subject",$message )){
  echo "Thank you for using our mail form";
}else{
  echo "Mail sending failed."; 
}

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

 ?>