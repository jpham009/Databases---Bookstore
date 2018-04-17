<html>
	<head>
		<title>Loading Sample Data</title>
	</head>

	<body>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "Bookstore";
			date_default_timezone_set('UTC');

			
			echo date('h:i:s:u a, l F jS Y e'); 


			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$result=mysql_query("SELECT count(*) as total from Students");
			$data=mysql_fetch_assoc($result);
			echo $data['total'];


			// LOAD SAMPLE DATA.... SQL statements
			$sql = "INSERT INTO customer (Customer_ID,First_Name,Last_Name,Email)" VALUES ("Johnny", "Pham", "johnny.pham2@mavs.uta.edu"); 


				"Eric Sauber", 
				"Michael Fry", 
			

			echo "Record added<br>";


			if ($conn->query($sql) !== TRUE) {
	    		echo "SQL Error: " . $sql . "<br>" . $conn->error;
			}
		
			echo "<a href='http://localhost:8888/Bookstore/'>Back</a>";

			$conn->close();			
		?>
		
	</body>
</html>