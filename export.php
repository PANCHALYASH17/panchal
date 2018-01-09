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
      if (isset($_POST['Quantity'])) 
      { // If the id post variable is set
           $Quantity= $_POST['Quantity'];
      } else 
      { // If the id post variable is not set
        $Quantity= 1;
      }// Check connection
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }
          
      $stmt= "SELECT d.ProductID,d.ProductName,d.Amount,p.Quantity from ProductDetail d
              inner join Product p 
                ON 
            p.ProductID = d.ProductID ";
      $stmt = $conn->query($stmt);
 
 
$columnHeader ='';
$columnHeader = "Product ID"."\t"."ProductName"."\t"."Amount"."\t"."Quantity"."\t";
 
 
$setData='';
 
while($rec =$stmt->fetch_assoc())
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}
 
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Order sheet.xls");
header("Pragma: no-cache");
header("Expires: 0");
 
echo ucwords($columnHeader)."\n".$setData."\n";
$sql2 = "truncate table Product";
$result2 = $conn->query($sql2);
 
?>