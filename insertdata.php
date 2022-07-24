 <?php
$servername = "localhost";
$username = "yarandi";
$password = "1234";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save']))
{	 
	 $Firstname = $_POST['Firstname'];
	 $Surname = $_POST['Surname'];
	 $Email = $_POST['Email'];
	 $Phone = $_POST['Phone'];


$sql = "INSERT INTO list (Firstname ,Surname ,Email ,Phone)
VALUES ('$Firstname' ,'$Surname' ,'$Email' ,'$Phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>