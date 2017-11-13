<?php
require "funcz/m.functionz.php";
 print "Debug 0";
$er="";"]);
$email = trim($_POST["email"]);
$sname = trim($_POST["sname
$phone = trim($_POST["phone"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);
if (count_letters($sname)<2)
	{$er.=" *Name is too short* ";}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{$er.=" *illegal E-Mail* ";}
if (strlen( $subject)<2)
	{$er.=" *Subject required*";};
if (strlen( $message)==0)
	{$er.=" *Message required ";}
elseif (strlen( $message)<5)
	{$er.=" *Longer message required* ";}
if (count_digits($phone)<7)
	{$er.=" *Telephone not in propper format* ";}
if (strlen($er)>0)
{
	$link= 'Location: m.kontakt_e.php';
	$link.="?error=Error-".$er;
	$link.="&sname=".$sname;
	$link.="&subject=".$subject;
	$link.="&email=".$email;
	$link.="&phone=".$phone;
	$link.="&message=".$message;
print "debug exit";
	header($link);
	exit;
} 
print "debug 1";
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
</table>
</body>
</html>";
print "debug 2";
$headers= "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= 'From: <w.cuthbertson@gmx.de>' . "\r\n";
mail("w.cuthbertson@gmx.de",$subject,$message,$headers);
mail("guylancaster@hotmail.com",$subject,$message,$headers);
print "debug 2";
print head("en","Contact","kontakt_e.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
       <?php print  top("en","kontakt","Kontakt");?>
  </div>
  <div data-role="main" class="ui-content">

		<table class="table">
<tr>
<td  valign="top"><strong>Post</strong></td>
<td  valign="top"><strong>:</strong></td>
<td>William Cuthbertson<br/>
Theodor-Heuss-Str.16<br/>
79183 Waldkirch<br/>
Baden-Württemberg<br/>
Deutschland</td>
</tr>
<tr>
<td><strong>Tel.</strong></td>
<td><strong>:</strong></td>
<td> 0 76 81 / 40 92 60</td></tr>
<tr>
<td><strong>E-Mail</strong></td>
<td><strong>:</strong></td>
<td> <a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td></tr>
</table>
<br>
<div class="alpha">Thankyou for your message - I will try to replay as soon as possible</div>
 </div> 
  <div data-role="footer">
      <?php print foot();?>
  </div>
  </div>
</body>  
</html>