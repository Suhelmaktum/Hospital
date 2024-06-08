
<?PHP

session_start();

    include('connection.php');  
    $username = $_POST['ad_id'];  
    $password = $_POST['ad_pswd'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from t_admin where ad_id = '$username' and ad_pswd = '$password'";  
        // echo $sql;
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['loggedinh'] = true;
            $_SESSION['username'] = $username;
            header('location:admin.php');
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


