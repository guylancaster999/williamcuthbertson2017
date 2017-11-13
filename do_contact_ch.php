<?php
require "funcz/functionz.php";
$er="";
$sname	=$_POST["sname"];
$email	=$_POST["email"];
$phone	=$_POST["phone"];
$subject=$_POST["subject"];
$message=trim($_POST["message"]);

if (count_letters($sname)<2)
 {$er.=" *Short-name* ";}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {$er.=" *Invalid-email* ";}

if (strlen( $subject)<2)
 {$er.=" *Subject-Required*";};

if (strlen( $message)==0)
 {$er.=" *Message-Required* ";}
elseif (strlen( $message)<5)
 {$er.=" *Longer Message Required* ";}

 if (count_digits($phone)<7)
 {$er.=" *Valid-Phone-number-Required* ";}

if (strlen($er)>0)
  {$link= 'Location: kontakt_e.php';
  $link.="?error=Error-".$er;
  $link.="&sname=".$sname;
  $link.="&subject=".$subject;
  $link.="&email=".$email;
  $link.="&phone=".$phone;
  $link.="&message=".$message;
  header($link);
  exit;} 
  
$message =
"<html>
<head>
<title>William Cuthbertson Email</title>
</head>
<body>
<table>
<tr><td>From&nbsp;&nbsp;</td><td>: ".$sname."</td></tr>
<tr><td>Email&nbsp;</td><td>: ".$email."</td></tr>
<tr><td>Phone&nbsp;</td><td>: ".$phone."</td></tr>
<tr><td>Message&nbsp;</td><td>: ".$message."</td></tr>
</table>".endPage()."</body>
</html>";
$headers= "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= 'From: <w.cuthbertson@gmx.de>' . "\r\n";
mail("w.cuthbertson@gmx.de",$subject,$message,$headers);
mail("guylancaster@hotmail.com",$subject,$message,$headers);
header('Location: kontakt_ty_ch.php');
exit;
?>