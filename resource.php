<?php
	  include("JWT.php");
      try
      {
      		 $token = JWT::decode($_COOKIE['token_name'], 'mysecretkey',array("HS512"));
      		 //echo $token->id."    ".$token->name;
      		 echo "I GOT IT";
      }
      catch(Exception $e)
      {
      		echo "$e";
      }
	
?>