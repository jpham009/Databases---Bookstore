<html>
	<head>
		<title>Database updated</title>
	</head>

	<body>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "Bookstore";
			date_default_timezone_set('UTC');

			 $customerid = $_POST['customerid'];
			 $firstname  = $_POST['firstname'];
			 $lastname = $_POST['lastname'];
			 $email  = $_POST['email'];
			
			echo date('h:i:s:u a, l F jS Y e'); 


			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 


			// SQL statement
			$sql = "INSERT INTO customer (Customer_ID,First_Name,Last_Name,Email)
			VALUES ('" . $customerid . "', '" . $firstname . "','" . $lastname . "','" . $email . "')";

			echo "Record added<br>";


			if ($conn->query($sql) !== TRUE) {
	    		echo "SQL Error: " . $sql . "<br>" . $conn->error;
			}
		
			echo "<a href='http://localhost:8888/Bookstore/'>Back</a>";

			$conn->close();			
		?>
		
	</body>
</html>