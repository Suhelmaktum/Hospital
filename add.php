<?php

$insert=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);
if(!$con)
{
    die ("connection to this database failed due to". mysqli_connect_error());
}

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql= "INSERT INTO `maktum`.`maktum` ( `name`, `age`, `gender`, `phone`, `othe`, `date`) VALUES ( '$name', '$age', '$gender', '$phone', '$desc', current_timestamp())";

if($con->query($sql) ==true)
{
    session_start();
   $_SESSION['name'] = $name;
   $_SESSION['age'] = $age;
   header('location:idpass.php');
}
else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <style>
        #lable
        {
            display:block;
            text-align:left;
        }
        .con
        {
            text-align:left;
            max-width:80%;
        }
    </style>



</head>
<body>
    <img class="bg" src="bg.jpeg" alt="Clinic">
    <a href="admin.php"><button class="btn">&larr; Back</button></a>
    
    </div>
    <div class="container1">
    <?php

            if($insert && (isset($_SESSION['status']))){
               echo $_SESSION['status'];
                         }
                         ?>
        <form action="add.php" method="post">
            
            <div style="width:80%"><h3>Patient Name :</h3><input type="text" name="name" id="name"  required="true"></div>
            <div style="width:80%"><h3>Patient Age :</h3><input type="number" name="age" id="age"  required="true"></div>
            <div style="width:80%"><h3>Patient Gender :</h3><input type="text" name="gender" id="gender"  required="true"></div>
            <div style="width:80%"><h3>Patient Phone :</h3> <input type="text" name="phone" id="phone" length="10"  required="true"></div>
            <div style="width:80%"><h3>Patient Problem :</h3>             <textarea name="desc" id="desc" cols="30" rows="10"  required="true"></textarea>
</div>
            
            <button class="btn">Submit</button>
            

        </form>
    </div>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script> -->

</html>