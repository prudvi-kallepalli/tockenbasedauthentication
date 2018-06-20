<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<?php
	    header("Cache-Control: no-store, must-revalidate, max-age=0");
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	?>	
	<script type="text/javascript">
		(function(){

			 var check=document.cookie;
			 console.log(check);	   		  
	   		 if(check=="")
	   		 {
          			
          			window.location.assign("signin.html");
	         }
       		else
       		{
       	      	console.log("it is working");
            }  		


		})();
		$(document).ready(function(){

			$("button").click(function(){
					$.get("resource.php", function(data, status){
        			//alert("Data: " + data + "\nStatus: " + status);
        			$("#content_holder").html(data);
    		});

			});
		});
	</script>
</head>
<body>
	<h1>This is Home Page</h1>
	<button>Get Data</button>
	<div id="content_holder"></div>
	<a href="signout.php">sign-out</a>
</body>
</html>