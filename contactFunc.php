<?php 
   function mail_utf8($to, $from_user, $from_email,  $subject = '(No subject)', $message = ''){ 
      global $conf,$lang;
      $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
      $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
      $headers = "From: Endouble <martinparovski@gmail.com>\r\n". 
          "Reply-To: $from_email\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
     return mail($to, $subject, $message, $headers); 

    } 



if(isset($_POST['btnContact'])){
    $message = 
    "First name: " .$_POST['first_name']. "<br />".
    "Last name: " .$_POST['last_name']. "<br />".
    "E-mail: " .$_POST['email']. "<br />".
    "Phone: " .$_POST['telephone']. "<br />".
    "Message: " .$_POST['comment']. "<br />";
    mail_utf8('martinparovski@gmail.com',$_POST['txtIme'],$_POST['txtEmail'],'Thomas. You have a new message!',$message);
   // header('location: contact.php?success=1');
   header('location: contact_success.php');


  exit;



}
?>