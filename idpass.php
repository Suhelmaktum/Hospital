<?php

include"connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .suhel
        {
        border-top-right-radius:15px;
        border-bottom-right-radius:15px;
        height: auto;
        width:500px;
        box-shadow: 0px 0px 15px #999999; 
        background-image:url(../images/bgsig.jpg);
        margin-left:600px;
        margin-top:150px;
        }
    </style>
</head>
<body>
        <a href="add.php"><button class="btn">Add new Patient</button></a>
        <a href="admin.php"><button class="btn">Back to Admin</button></a>

    <div class="suhel">
    <table class="table" >
      <thead>
        <tr>
        <th scope="col">      </th>
          <th scope="col">  ID    </th>
          <th scope="col">   name     </th>
          <th scope="col">  password  </th>
        </tr>
      </thead>
        <tbody>
          <?php 
          $sql = "SELECT * FROM `maktum`";
          $result = mysqli_query($conn, $sql);
          session_start();
          
          while($row = mysqli_fetch_assoc($result)){
                if($_SESSION['name']==$row['name'] && $_SESSION['age']==$row['age'])
                {
                     echo "<tr>
                     <th ></th>
                     <td>" .$row['sno']. "</td>
                     <td>" .$row['name']. "</td>
                     
                     
                     <td>" .$row['phone']. "</td>
                     </tr>";
                }
                  } 
          ?>
        </tbody>
    </table>
    </div>
</body>

 </html>
                                    
                                      
