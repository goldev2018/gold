<?php
$to       = 'zacaxe@uemail99.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: slaaash.dc@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';


// if(mail($to, $subject, $message, $headers))
if (!ini_get("safe_mode")){
	mail($to, $subject, $message, $headers);
    echo "Email sent";
}
else{
    echo "Email sending failed";
}
?>

<?php
// mail("slaaash.dc@domain.com","Subject","Email message","From: slash@gmail.com");
?>