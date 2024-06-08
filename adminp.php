<?php
include('connection.php');  

session_start();

if( !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true)
{ 
    header("location: phistory.php");
        exit;

}


// if (isset( $_POST['allreport']))
//     {

//     echo "suhel you are eligible to to display reports";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminp.css">
    <style>
        .welcome
        {
            font-size:20px;
            border: 2px  solid black;
            width: 200px;
        }
        .info
        {   
            height:400px;
            width:80%;
            margin-left:150px;
            margin-right:50px;
            margin-top:50px;
            margin-bottom:50px;
            border: 2px solid black
        }
        .footera
        {
            background-color: blanchedalmond;
        }
        .caseno
        {
            font-size:22px;
            margin-top:20px;
            margin-left:25px;
        }
        .pname
        {
            font-size:22px;
            margin-top:20px;
            margin-left:20px;
        }
        .page
        {
            font-size:22px;
            margin-top:20px;
            margin-left:70px; 
        }
        .photo
        {   margin-left:5px;
            height:80px;
            width:100px;
        }
        .reports
        {  
            margin-top:40px;
            margin-left:350px;
            font-size:22px;
        }

    </style>
</head>
<body>
    <div class="container" >
        <img  id="header" src="logo.png" alt="logo" width="8%" height="8%" >
        <h1 > TATA HOSPITAL </h1>
        
    
     
     <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <!-- <li><a href="hlogin.php">Hospital Login</a></li> -->
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="plogout.php">Logout</a></li>
                
            </ul>
        </nav>
     </header>
    </div>

    <div class ="welcome">
       <?php 
       $suhel1234=$_SESSION['username1'];
       $sql = "SELECT * FROM `maktum` where sno='$suhel1234'";
       $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        $_SESSION['pwel']=$row['name'];
       echo "Welcome ".$row['name'];
      }
       ?>
    </div>
    <div class="info">

    <?php 
          $sql = "SELECT * FROM `maktum` where sno='$suhel1234'";
          $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
           
            
        
    ?>
    <table>
        <thead>
            <tr></tr>
        </thead>
        <tbody>

        <tr>
            <td>
                <div class="caseno">
            <b>ID (Case No.):- </b><?php echo $row['sno'];?>
                </div>
            </td>
            <td>
              <div class="pname">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Name:- </b><?php echo $row['name'];?>
              </div>
                
            </td>
            <td>
              <div class="pname">
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Gender:- </b><?php echo $row['gender'];?>
              </div>
                
            </td>
            <td>
            <div class ="pname">
            <b> &nbsp; Contact :- </b><?php echo $row['phone'];?>
            </div>
            </td>
        </tr>
        <tr>
            <td>
            <div class="photo">
                 <b> &nbsp;  &nbsp;  &nbsp; <center>  </center>  </b><?php ?>
              </div>
            </td>
            <td>
            <div class="page">
                 <b> &nbsp;  &nbsp;     Age :- </b><?php echo $row['age'];?>
              </div>
            </td>
            <td>
            <div class="page">
                 <b> &nbsp;  &nbsp;     Regn. Date :- </b><?php echo $row['date'];?>
              </div>
            </td>
        </tr>
        
        </tbody>
    </table>
    <table>
        <thead>
            <td></td>
        </thead>
        <tbody>
            <tr>
                <td>
                <div class="reports">
                   <a href="viewreport.php"> <button  name ="allreport"> <b>ALL REPORTS </b> </button> </a>
                </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- <div>
                    <b>ALL REPORTS (List will appear down)</b>
                </div> -->

    
    <?php
         }
    ?>

    </div>
    <div class="footera">
<table border="2" width="100%">
    <th >
    <footer>
    
        
        <p><b><h2>TATA HOSPITAL</h2></b> <br>
        <p><b><h2>Contact: 9307834947 , 9892432849</h2></b></p>
        <p><b><h2>Email-tatahosp@gmail.com</h2></b></p><br>

        </p>
</footer>
</th>
</table>
</div>
</body>
</html>