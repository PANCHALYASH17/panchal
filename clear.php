<!DOCTYPE HTML> 
<html> 
<head>
<title>Sign-In</title>
<body id="body-color"  background="c.png" >
<?php
					$servername = "localhost";
					$username = "username";
					$password = "";
					$dbname = "test";
					$conn = new mysqli($servername, $username, $password, $dbname);
					if ($conn->connect_error) 
					{
		    			die("Connection failed: " . $conn->connect_error);
					}
						 
							$sql2 = "truncate table Product";
							$result2 = $conn->query($sql2);
						  	
?>
<a href="order.php"><center><h1>Back</h1></a></center>
</body>
</head>
</html>