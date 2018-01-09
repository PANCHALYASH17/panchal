<!DOCTYPE HTML> 
<html> 
<head>
<style>
/* border style */

div.container {
    width: 100%;
    height: 100%;
    border: 2px solid gray;
}

/*BUTTON AND INPUT TYPE STYLE */

#button{
border-radius:10px;
width:130px;
height:40px;
background:"blue";
font-weight:bold;
font-size:20px;
}
input[type=text] {
    width: 100%;
    padding: 8px 15px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}
input[type=text]:focus {
    background-color: lightblue;
}
input[type=Number] {
    width: 100%;
  	padding: 8px 15px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}

input[type=Number]:focus {
    background-color: lightblue;
}
input[type=Submit] {
    width: 100%;
     padding: 8px 15px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}

input[type=Submit]:focus {
    background-color: lightblue;
}
input[type=Reset] {
    width: 100%;
     padding: 8px 15px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}
input[type=Reset]:focus {
    background-color: lightblue;
}

/* HEADER AND FOOTER STYLE */

header{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
footer {
	padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
.footer 
{
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}
mark 
{ 
    background-color: red;
    color: black;
}

/* LEFT SIDE STYLE */

nav {
    float: left;
    max-width: 700px;
    margin: 0;
    padding: 1em;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
nav ul a {
    text-decoration: none;
}
/* RIGHT SIDE STYLE */
article {
    margin-left: 470px;
    border-left: 5px solid gray;
    padding: 1em;
    overflow: hidden;
}

/* DROP DOWN STYLE */

.select2
{
    width: 100%;
     padding: 0px 0px;
    margin: 0px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
    background-color: black;
}
</style>
</head>
<body>
<div class="container">

 	<div style="float: right; width: 130px">
 		 <form id="thisone" action="index.php" method="post">
			<input id="button" type="submit" name="logout" value="Logout">
		 </form>
	</div>

	<div style="width:400px;">

	    <div style="float: left; width: 130px" style="overflow:auto"> 
	        <form id="thisone" action="index.php" method="post">
	         <input id="button" type="submit" name="login" value="NewLogin">
	        </form>
	    </div>

	    <div style="float: right; width: 225px"> 
			 <form id="thistoo" action="mail.php" method="post">
	            <input id="button" type="submit" name="mail" value="Mail">
	        </form>
	    </div>  
	    
	</div>	
<header>	
   <h2>WELCOME TO </h2>
</header>
<nav>
<form action="order.php" method="Post"> 
		<font color="white" size='5'><font color="white" size='5'>Product ID</font><br><input type="text" name="ProductID" size="15"><br> 
  	 	<font color="white" size='5'>Quantity </font><br><input type="number" name="Quantity" size="9"><br> 
					<input id="button" type="submit" name="Add" value="Add">	
					<input id="button" type="reset" name="reset" value="Reset">	
</form>
<?php
			$servername = "localhost";
			$username = "username";
			$password = "";
			$dbname = "test";
			$conn = new mysqli($servername, $username, $password, $dbname);

			if (isset($_POST['ProductID'])) 
			{ // If the id post variable is set
   				 $ProductID = $_POST['ProductID'];
			} 
			else 
			{ // If the id post variable is not set
				$ProductID = 1;
			}// Check connection
			if (isset($_POST['Quantity'])) 
			{ // If the id post variable is set
   				 $Quantity= $_POST['Quantity'];
			} 
			else 
			{ // If the id post variable is not set
				$Quantity= 1;
			}// Check connection
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
						
			$sql = "INSERT INTO Product(ProductID,Quantity)VALUES('$ProductID','$Quantity')";
			$result = $conn->query($sql);
?>
<br>
<div class="select2">
<p color="black">Search ProdID Here
<select id="ProductID">
<option value="" selected="selected">Search Product Name</option>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

$sql = "SELECT ProductID,ProductName FROM ProductDetail";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $rows = mysqli_fetch_assoc($resultset) ) {
?>
<option value="<?php echo $rows["ProductID"]; ?>">
		<?php echo $rows["ProductName"]; ?>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<?php echo $rows["ProductID"]; ?></option>
<?php }	?>
</select>
</div>
<h4><font color="black" size='4'><mark>Note:You Cannot Delete Any Product,Once Added!<br>
	OR <br>You Cannot Enter Product With Same Id Twice.!
</mark></font></h4>
</nav>
<article>
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
				$ProductID = 0;
			}// Check connection
			if (isset($_POST['Quantity'])) 
			{ // If the id post variable is set
   				 $Quantity= $_POST['Quantity'];
			} else 
			{ // If the id post variable is not set
				$Quantity= 0;
			}// Check connection
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
					
			$sql = "SELECT d.ProductID,d.ProductName,d.Amount,p.Quantity from ProductDetail d
							inner join Product p 
								ON 
						p.ProductID = d.ProductID order By ProductID";
			$result = $conn->query($sql);

			echo "<table border='8' align='center' cellpadding='10' background='2.jpg'>
    	 	<tr>
             <th>Product ID</th>
    	 		<th>ProductName</th>
    	 		<th>Amount</th>
    		 	<th>Quantity</th>
    	 	<tr>";
 	 		while($row = $result->fetch_assoc()) 
   			 {
    		echo"<tr>";
                echo"<td>". $row["ProductID"]. "</td>";
    	 		echo"<td>". $row["ProductName"]. "</td>";
    	 		echo"<td> ". $row["Amount"]. "</td>";
    	 		echo"<td> ". $row["Quantity"]. "</td>";
    	   echo"</tr>";
   			 }		
		?>
		<div style="width:400px;">
		    <div style="float: left; width: 130px"> 
		        <form id="thisone" action="export.php" method="post">
		         		<input id="button" type="submit" name="export" value="Place Order">
		        </form>
		    </div>
		    <div style="float: left; width: 130px"> 
		        <form id="thisone" action="clear.php" method="post">
		         		<input id="button" type="submit" name="export" value="Clear">
		        </form>
		    </div>
	    </div>
</article>	

<footer >SEE YOUR ORDER DETAILS BELOW.<br></footer>
</div>

<title>Order</title>
</head> 
<body id="body-color" background="a.jpg" > 
</body>
</html>
