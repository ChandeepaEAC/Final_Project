<html>
<body>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="ensemble";


$conn=new mysqli($servername,$username,$pwd,$dbname);


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error); 
 } 
  echo "Connected successfully";
  

  


$name = $_post["name"];
$pwd = $_post["pwd"];

$sql = "'INSERT INTO customer(username,password) VALUES ('$name','$pwd' )'";

if (mysqli_query($conn, $sql)) 
{
  echo "New record created successfully";
}
else
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
</body>
</html>
