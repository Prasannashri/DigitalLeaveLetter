<?php
session_start();
$p=$_POST["pass"];
$n=$_POST["name"];
$u=$_SESSION["roll"];
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

$sql = "UPDATE log SET name='$n',password='$p' WHERE rollno='$u'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ". mysqli_error($conn);
}

mysqli_close($conn);
?>