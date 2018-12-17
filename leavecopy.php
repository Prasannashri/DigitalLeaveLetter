<?php 
session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  .bd {
    background-image: url("bgr.jpg");
    height: 100%;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size:cover;
    
}
.vel
{
  
  background-image: url("vcet pic.jpg");
  height: 30%;
  width: 100%;
  font-family: "Lato";
  font-size: 250%;
  color: #0000ff;
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
    
}
.a {
    text-indent: 50px;
}
textarea {
    background:transparent;
    outline-style:double ;
    border:none;
    width:100%;
    font-size:20px;
    color:black;
}
</style>
</head>
<body class="bd">
  <?php
  $name=$_SESSION["name"];
  $u=$_SESSION["roll"];
  ?>
  <div class="vel">
  </br>

    <center><span class="w3-center w3-padding-large w3-dark-grey w3-xlarge w3-wide w3-animate-opacity">VELAMMAL COLLEGE OF ENGINEERING<span class="w3-hide-small">AND</span> TECHNOLOGY</span></center>

  </div>
</br>
<div align="right">
  <div class="container-login100-form-btn">
            <input class="login100-form-btn" type="button" value="Signout" 
            onclick="window.location.href='index.html'">
            <input class="login100-form-btn" type="button" value="Reset Password" 
            onclick="window.location.href='signup1.php'">
  </div>
</div>
<form action=updateleavecopy.php method="post">
    <div class="form-group">
      <label><i class="glyphicon glyphicon-user"></i>FROM</label></br>
      <h5><?php
      echo "$name<br>"
      ?></h5>
      <h5><?php
      echo "$u<br>"
      ?></h5>
    <h5>Velammal College Of Engineering And Technology</h5>
     <h5> Madurai</h5>
</div>
  <div class="form-group">
      <label><i class="glyphicon glyphicon-envelope"></i>TO</label><br>
    <h5>The Class Incharge</h5>
    <h5>Velammal College Of Engineering And Technology</h5>
     <h5> Madurai</h5>
   </div>
<div class="form-group">
    <label><i class="glyphicon glyphicon-user"></i>RESPECTED SIR</label></br>
      <textarea  rows="10" cols="150" name="reason" value="" >
      </textarea>
    <center>
      <h5>Thanking you</h5>
    </center>
    <div align="right">
      <h5>Yours Faithfully</h5>
      <h5><?php
      echo "$name<br><br>"
      ?></h5>
      <input type="checkbox" name="concern" value="got">
         <label>Got parent concern</label>
        <br>
      <label>Parents Phone Number:</label><input type="text" name="ph" value="" size="20" pattern="[0-9]{10}">
        <br>
        </h5>
      <label>Email address:</label><input type="text" name="mailid" value="" size="20">
        <br>
    </div>
    </div>
    <div align="center">
<button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SUBMIT
        </button>
        </div>
  </form>
</body> 
</html>
