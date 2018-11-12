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




  if(ISSET($_FILES)){
		if($_FILES['File']['name']){
			$filename = explode(".", $_FILES['File']['name']);
			if($filename[1] == 'csv'){
				$handler = fopen($_FILES['File']['tmp_name'], "r");
				while($data = fgetcsv($handler)){

					$conn->query("INSERT INTO `agencies` (id,name, lat, lng) VALUES('0','$data[1]', '$data[2]', '$data[3]')");
				}

				fclose($handler);
			}else {
        echo "File Extension Not Allowed";
      }
		}
    echo "File Upload Successfully Completed";
  }

?>
