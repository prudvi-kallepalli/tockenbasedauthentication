<?php

		       
        unset($_COOKIE["token_name"]);       
        setcookie("token_name","0", time()-3600,"/");            
        header("Location:signin.html");
?>