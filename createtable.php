<?php
$servername = "localhost";
$username = "id6856438_root";
$password = "malligarani";
$database = "id6856438_login";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// sql to create table
$sql = "CREATE TABLE `id6856438_login`.`leaver` ( `no` INT NOT NULL AUTO_INCREMENT , `rollno` VARCHAR(8) NOT NULL , `name` VARCHAR(40) NOT NULL , `reason` VARCHAR(250) NOT NULL , `parentno` VARCHAR(12) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB;";

if (mysqli_query($conn, $sql)) {
    echo "Table log created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>