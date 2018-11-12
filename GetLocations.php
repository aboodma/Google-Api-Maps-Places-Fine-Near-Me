<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agencies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM agencies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<script> var allLocations = [";

   // output data of each row
   while($row = $result->fetch_assoc()) {
     $name = $row['name'];
     $lat  = $row['lat'];
     $lng  = $row['lng'];
     echo "{
       name: '$name',
       lat: '$lat',
       lng: '$lng',
       address: 'No address Specified',
       city: 'No city Specified',
       state: 'No state Specified',
       zip: 'No zip Specified',
       phone: 'No phone Specified',
     },";
      }
echo "]</script>";
} else {
   echo "0 results";
}
$conn->close();
?>
