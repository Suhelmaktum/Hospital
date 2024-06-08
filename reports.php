<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "maktum";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
session_start();
$picpath="studentpic/";
$docpath="studentdoc/";
$proofpath="studentproof/";
// $id=$_SESSION['user'];
if(isset($_POST['fpicup']))
{
$picpath=$picpath.$_FILES['cbc']['name'];
$docpath1=$docpath.$_FILES['urin']['name'];     
$docpath2=$docpath.$_FILES['ray']['name']; 
$docpath3=$docpath.$_FILES['ecg']['name']; 
$docpath4=$docpath.$_FILES['ct']['name'];     
$docpath5=$docpath.$_FILES['mri']['name'];     
$proofpath1=$proofpath.$_FILES['ultra']['name']; 
$proofpath2=$proofpath.$_FILES['other']['name']; 

  if(move_uploaded_file($_FILES['cbc']['tmp_name'],$picpath)
  && move_uploaded_file($_FILES['urin']['tmp_name'],$docpath1)
  && move_uploaded_file($_FILES['ray']['tmp_name'],$docpath2)
  && move_uploaded_file($_FILES['ecg']['tmp_name'],$docpath3)
  && move_uploaded_file($_FILES['ct']['tmp_name'],$docpath4)
  && move_uploaded_file($_FILES['mri']['tmp_name'],$docpath5)
  && move_uploaded_file($_FILES['ultra']['tmp_name'],$proofpath1)
  && move_uploaded_file($_FILES['other']['tmp_name'],$proofpath2))
  {
   // $id=$_POST['sno'];
   $img=$_FILES['cbc']['name'];
   $img1=$_FILES['urin']['name'];
   $img2=$_FILES['ray']['name'];
   $img3=$_FILES['ecg']['name'];
   $img4=$_FILES['ct']['name'];
   $img5=$_FILES['mri']['name'];
   $img6=$_FILES['ultra']['name'];
   $img7=$_FILES['other']['name'];


$query="INSERT INTO `maktum`.`t_reports` (p_cbc,p_urin,p_x-ray,p_ecg,p_ct, p_mri, p_ultra,p_other) values ('$img','$img1','$img2','$img3','$img4','$img5','$img6','$img7')";
        if($conn->query($query)==true){
     echo "Inserted to DB ";    
    }else
    {
        echo "Error <br/>".$conn->error;        
    }
}
else
{
echo "There is an error,please retry or check path";
}
}
 ?>