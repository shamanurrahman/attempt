<?php

	class ContactBD{
		public $conn;
		public function __construct(){
			
			$servername = "localhost";
			$username 	= "root";
			$password 	= "";
			$db 		= "contacts";
			$this->conn 		= new mysqli($servername,$username,$password,$db);
			if ($this->conn->connect_error) {
				die("Connection failed: " . $this->conn->connect_error);
			}
			echo "Connected successfully"."<br>";
		}
		
		public function InsertIntoCDB($name,$country,$email,$phoneNumber){
				$sql = "INSERT INTO personalinfo (name,country,email,phoneNumber) VALUES ('$name','$country','$email','$phoneNumber')";

			if ($this->conn->query($sql) == TRUE) {
				echo "New record created successfully";
				
				return $this->conn->insert_id;
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $this->conn->error;
			}
			return -1;
		}
		
		public function SelectAll(){
			
			$sql = "SELECT * FROM personalinfo";
			$result = $this->conn->query($sql);
			echo "<pre>";
			print_r($result);
			echo "</pre>";
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["id"]. " - Name: " . $row["name"]." - Email: " . $row["email"]." - Country: " . $row["country"]. "<br>";
				}
			} 
			else {
				echo "0 results";
			}
			return $result;
		}
		
		public function close(){
			$this->conn->close();
		}
		
	}







?>