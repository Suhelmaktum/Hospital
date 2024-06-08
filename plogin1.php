
<?PHP
     
    include('connection.php');  
    $username = $_POST['ad_id'];  
    $password = $_POST['ad_pswd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from maktum where sno = '$username' and phone = '$password'";  
        // echo $sql;
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username1'] = $username;
            header('location:adminp.php');
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <a href="hlogin.php"><button class="btn">&larr; Back to the Login</button></a>
              </button>
              </div> ';
        }     
?>  


