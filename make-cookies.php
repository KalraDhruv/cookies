<?php 
   $valueTheme= $_POST["theme"];
   $valuePhilosopher =$_POST["philosopher"];
   // 1 Day Expiry Time.
   $expiryTime = time()+60*60*24;
   // Creating a persistent cookie.
   setcookie('theme', $valueTheme, $expiryTime,'/');
   setcookie('philosopher',$valuePhilosopher, 0,'/');
   header("Location: ch15-proj1.php");
	



?>
