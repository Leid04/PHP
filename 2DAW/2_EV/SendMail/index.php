<?php
/* sudo nano /opt/lampp/etc/php.ini
    [mail function]
      SMTP=smtp.gmail.com
      smtp_port=587
      sendmail_from=denys.msi04@gmail.com
      sendmail_path=/usr/sbin/sendmail -t -i
  sudo apt install sendmail
  sudo sendmailconfig #responder a todo YES
  chmod +x ejecutable.sh
  ./ejecutable.sh
*/
$to_email = "denys.msi04@gmail.com";
$subject = "Simple Email Testing via PHP";
$body = "Hello,nn It is a testing email sent by PHP Script";
$headers = "From: sender\'s email";

echo (mail($to_email, $subject, $body, $headers))? "Email successfully sent to $to_email..." : "Email sending failed...";