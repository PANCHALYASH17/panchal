<!DOCTYPE HTML> 
<html> 
<head>
<title>Sign-In</title>
 <link rel="stylesheet" type="text/css" href="style.css"> 
</head> 
<body id="body-color"  background="a.jpg" >
<div id="Sign-In">
  <fieldset style="width:30%">
  	<legend><font color="white" size='5'>LOG-IN HERE</font></legend>
  	 <form method="POST" action="connectivity.php"> 
  	 	<font color="white" size='5'>User </font><br><input type="text" name="user" size="40"><br> 
  	 	<font color="white" size='5'>Password </font><br><input type="password" name="pass" size="40"><br> 
  	 	<input id="button" type="submit" name="submit" value="Log-In"> 
  	 	<input id="button" type="submit" name="submit" value="Reset">
  	 </form> 
  	 <form method="POST" action="admin.php"> 
  	 	<center><input id="button" type="submit" name="submit" value="Admin Log-In"> </center>
  	</form>
  	</fieldset> 
  </div> 
</body> 
</html>

