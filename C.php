<?php
$servername = "demosql.cqabzoe3g102.ap-southeast-2.rds.amazonaws.com";
$username = "DemoU";
$password = "12345678";
$dbname = "DemoDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO A1 VALUES ('Anchal',22);

if ($conn->query($sql) === TRUE) {	
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
//mysql -h demosql.cqabzoe3g102.ap-southeast-2.rds.amazonaws.com -P 3306 -u DemoU -p