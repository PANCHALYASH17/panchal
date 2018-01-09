<!DOCTYPE HTML> 
<html> 
<head> 
<title>Admin Sign-In</title>
 <link rel="stylesheet" type="text/css" href="style.css"> 
</head> 
<body id="body-color" background="admin.jpg" background-repeat: no-repeat;>
<div id="Sign-In">
  <fieldset style="width:30%">
  	<legend><font color="white" size='5'>LOG-IN HERE</font></legend>
  	 <form method="POST" action="admin2.php"> 
  	 	<font color="white" size='5'>User </font><br><input type="text" name="auser" size="40"><br> 
  	 	<font color="white" size='5'>Password </font><br><input type="password" name="apass" size="40"><br> 
  	 	<input id="button" type="submit" name="submit" value="Log-In"> 
  	 	<input id="button" type="Reset" name="reset" value="Reset">
      <input id="button" type="submit" name="back" value="Back">
  	 </form> 
  	</fieldset> 
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
            if (isset($_POST['back'])) 
            { 
             header("Location: index.php");
            die();
            }   
        ?>
  </div> 
</body> 
</html>

