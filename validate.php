<?php
session_start();
$u=$_POST["user"];
$p=$_POST["pass"];
$servername = "localhost";
$username = "id6856438_root";
$password = "malligarani";
$dbname="id6856438_login";
$flag=0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,rollno,password FROM log";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
if($row["rollno"]==$u && $row["password"]==$p){
            $name=$row["name"];
            $flag=1;
            $_SESSION['name']=$name;
            $_SESSION['roll']=$u;
            header("Location: leavecopy.php");
            }
}
if($flag==0)
echo "Please go back and check the username and password";
mysqli_close($conn);
?>