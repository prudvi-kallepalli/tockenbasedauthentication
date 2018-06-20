<?php
		include("JWT.php");
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		if(($uname=="ram")&&($pwd=="1234"))
		{

      	  $token = array();          
          $token['name']=$uname;
          $token_value=JWT::encode($token, 'mysecretkey','HS512');          
		  setcookie("token_name",$token_value, time() + (86400 * 30), "/");
		  header("Location:homepage.php");
		}
		else
		{
			header("Location:signin.html");
		}	

?>