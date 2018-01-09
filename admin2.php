<html>
<body>
<font color="white" size='5'>
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
      if (isset($_POST['auser'])) 
      { // If the id post variable is set
           $auser = $_POST['auser'];
      } else 
      { // If the id post variable is not set
        $auser= 1;
      }// Check connection
      if (isset($_POST['apass'])) 
      { // If the id post variable is set
           $apass = $_POST['apass'];
      } else 
      { // If the id post variable is not set
        $apass= 1;
      }// Check connection
      
     
      if($auser == 'admin' && $apass == '123')
      {
        header("Location: add.php");
          die();
      }
      else
      { 
         echo "INVALID USERNAME OR PASSWORD";
          header("Location: admin2.php");
          die();
      }
?>
</font>
</body>
</html>