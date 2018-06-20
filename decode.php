<?php
      include("JWT.php");
      try
      {
      		 $token = JWT::decode($_GET['token'], 'mysecretkey',array("HS512"));
      		 echo $token->id."    ".$token->name;
      }
      catch(Exception $e)
      {
      		echo "$e";
      }
?>
