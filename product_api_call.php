
<?php 




//server connection
$servername = "localhost";
$username = "root";
// there  is no password in default
$password = "";
// our database name
$dbname = "product";




//get input from html using "$_POST[]"
$product_name = $_POST["p_name"];
$product_price = $_POST["p_price"];
$product_quantity = $_POST["p_quantity"];

echo $product_name;


//sql connection





//lets check its connected
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// in php we use "." operator for string concatenation!
// store sql query in variable
$sql = "INSERT INTO product_details(product_id,product_name, product_price,product_quantity)
VALUES ('','$product_name', '$product_price', '$product_quantity')";

//query execution
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>