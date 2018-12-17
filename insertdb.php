<?php
$u=$_POST["user"];
$p=$_POST["pass"];
$n=$_POST["name"];
$servername = "localhost";
$username = "id6856438_root";
$password = "malligarani";
$database = "id6856438_login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO log (name,rollno,password)
VALUES ('$n','$u','$p')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully please go back and login.";
} else {
    echo "Error: " . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>