<!DOCTYPE HTML> 
<html> 
<head> 
<title>Sign-In</title>
 <link rel="stylesheet" type="text/css" href="style.css"> 
</head> 
<body id="body-color" background="3.jpg">
<div id="Sign-In">
  <fieldset style="width:30%">
  	<legend><font color="white" size='5'>Enter Detail Here</font></legend>
  	 <form method="POST" action="add.php"> 
  	 	<font color="white" size='5'>Product ID</font><br><input type="text" name="ProductID" size="40"><br> 
  	 	<font color="white" size='5'>Product Name</font><br><input type="text" name="ProductName" size="40"><br> 
  	 	<font color="white" size='5'>Amount</font><br><input type="text" name="Amount" size="40"><br> 
  	 	<input id="button" type="submit" name="add" value="Add"> 

	  	 <form method="POST" action="index.php"> 
	  	 	<input id="button" type="submit" name="Back" value="Back"> 
	  	 </form>	
   </form> 
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
            if (isset($_POST['Back'])) 
            { 
             header("Location: index.php");
            die();
            }   
        ?>
  	</fieldset> 
  </div> 
  <?php
			$servername = "localhost";
			$username = "username";
			$password = "";
			$dbname = "test";
			$conn = new mysqli($servername, $username, $password, $dbname);

			if (isset($_POST['ProductID'])) 
			{ // If the id post variable is set
   				 $ProductID = $_POST['ProductID'];
			} else 
			{ // If the id post variable is not set
				$ProductID = 1;
			}// Check connection
			if (isset($_POST['ProductName'])) 
			{ // If the id post variable is set
   				 $ProductName = $_POST['ProductName'];
			} else 
			{ // If the id post variable is not set
				$ProductName= 1;
			}// Check connection
			if (isset($_POST['Amount'])) 
			{ // If the id post variable is set
   				 $Amount = $_POST['Amount'];
			} else 
			{ // If the id post variable is not set
				$Amount= 1;
			}// Check connection
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
						
			$sql = "INSERT INTO ProductDetail(ProductID,ProductName,Amount)VALUES('$ProductID','$ProductName','$Amount')";
			$result = $conn->query($sql);
?>
</body> 
</html>