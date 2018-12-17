<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$flag=1;
$flag1=1;
$flag2=1;
$flag3=1;
$email=$_POST['mailid'];
$roll=$_SESSION['roll'];
$name=$_SESSION['name'];
$r=$_POST["reason"];
$ph=$_POST['ph'];

  if (empty($r)) {
    echo "Please go back and fill the body of the leave letter" ;
    $flag=1;
  } else {
    $flag=0;
  }
  
  if (empty($ph)) {
   echo "Please go back and enter your parents phone number"."<br>" ;
    $flag1=1;
  } else {
        $flag1=0;
  }
    
  if (empty($_POST['concern'])) {
    echo "Please go back and check the parent concern<br>";
    $flag2=1;
  } else {
    $flag2=0;
  }
  if(empty($email)){
      echo "Please go back and enter your Email id<br>";
      $flag3=1;
  }
  else{
      $flag3=0;
  }
  $r = trim($r);
  $r = stripslashes($r);
  $r = htmlspecialchars($r);
if($flag==0 && $flag1==0 && $flag2==0 && $flag3==0){
$servername = "localhost";
$username = "id6856438_root";
$password = "malligarani";
$dbname="id6856438_login";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO  leaver (rollno,name,reason,parentno)
VALUES ('$roll','$name','$r','$ph')";

if ($conn->query($sql) === TRUE) {
    require_once ('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();                           

  
    $mail->isSMTP(); 
    $mail->SMTPAuth = true;                                    
    $mail->SMTPSecure = 'tls';   
    $mail->Host = 'smtp.gmail.com';     
        $mail->Port = '587';          
        $mail->isHTML();                 
    $mail->Username = 'digitalleaveletter@gmail.com';               
    $mail->Password = 'digileave';                           
    $mail->setFrom('digitalleaveletter@gmail.com');   

    $mail->Subject = 'Leave letter from '.$name;
    $mail->Body    = "From<br>
    $name ,<br>
    $roll ,<br>
    VCET ,<br>
    Madurai .<br><br>
    TO <br>
    The class incharge,<br>
    VCET,<br>
    Madurai.<br><br>
    Respected Sir/Madam<br>
    $r<br><br>
    Thanking you<br>
    Yours Faithfully<br>
    $name<br><br>
    Parent concern got<br>
     Parent Mobile Number : $ph<br>
     emailid: $email ";
    
   $mail->AddAddress('kgprasannabalaji@gmail.com');
   $mail->send();
echo "Successfully sent..:)<br>";
} else {
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();
}
?>
<div >
            <input type="button" value="Signout" 
            onclick="window.location.href='index.html'">
          </div>
</body>
</html>