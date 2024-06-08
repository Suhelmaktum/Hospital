<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinet Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .footera
        {
            background-color: blanchedalmond;
        }
        #label
        {
            display:block;
            text-align:left;
        }
        
    </style>
</head>
<body>
    <div class="container" >
        <img  id="header" src="logo.png" alt="logo" width="8%" height="8%" >
        <h1 > TATA HOSPITAL </h1>
        <nav>
    
     
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="hlogin.php">Hospital Login</a></li>
                <li><a href="plogin.php">Patient Login</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                
            </ul>
        </nav>
    </header>
    </div>

<div>
    <center><h2>Patient Login</h2></center>
     <form id="adminlogin" action="plogin1.php" method="post">
             
                <div  id="adivtop">
                    
                        <br> <br> <br> <br> 
                           <div class="container-fluid">    
                           <center><img src="./loginuser.png" width="120px" height="100px" ></center>
                <br>
                <center>
                    <label id="label"><b> ID</b></label>
                    <input type="text" id="ad_id" name="ad_id" class="form-control" style="width:300px; " placeholder="Enter User ID"><br>
                    <label id="label"><b>Password</b></label>
                    <input type="password" id="ad_pswd" name="ad_pswd" class="form-control" style="width:300px; " placeholder="Enter  Password"><br>
                    <input type="submit" id="a_sub" name="a_sub" value="Login" class="toggle btn btn-primary" style="width:100px; "><br>
                    
                </center>
                           </div>
                                
                              
                            </div>
                        
                    
                     <input type="hidden" id="txtid"  name="txtid" ><br/>
        </form> 
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