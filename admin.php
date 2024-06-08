<?php
session_start();

if( isset($_SESSION['loggedinh']) != true)
{ 
    header("location: hlogin.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <style>
      .asp
      {
        border:1px solid blue;
        width : 20%;
        font-size: 20px;
      }
    </style>
</head>
<body>
    

<div class="glow">ADMIN PANEL</div>
<div class="asp">
    <?php
      
      echo "Welcome ".$_SESSION['username'];
      
    ?>
</div>
<br>

<!-- <div class="container" >
        <img  id="header" src="logo.png" alt="logo" width="8%" height="8%" >
        <h1 > TATA HOSPITAL </h1>
</div>
  	 -->

<div class="menu" align="center">
    <a href="add.php" >Add New Patient</a>
    <a href="phistory.php" >Patient History</a>
    <a href="report1.php" >Reports Panel</a>
    <!-- <a href="plogin.php" target="detail">Patient Login</a> -->
    <a href="logout.php" >Logout</a>
  </div>


  
</div>
</body>
</html>


