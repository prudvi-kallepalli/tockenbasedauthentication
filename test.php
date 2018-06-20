<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        include("JWT.php");
        $token = array();
        $token['id'] = "243";
        $token['name']="Ravi";
        $sec=JWT::encode($token, 'mysecretkey','HS512');
        $sec=$sec;
        echo "<a href='decode.php?token=$sec'>click here</a>";
     ?>
  </body>
</html>
