<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "maktum";
session_start();

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  
  $sql = "DELETE FROM `t_reports` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
  //$delete = true;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $picpath="studentpic/";
$docpath="studentdoc/";
$proofpath="studentproof/";
if (isset( $_POST['update_stud_img'])){
  {
    $sno=$_POST['sno'];

    $new_img=$_FILES['cbc']['name'];
    $old_img=$_POST['cbc_old'];
    if ($new_img!='') {
        $update_filename = $_FILES['cbc']['name'];
    }
    else {
        $update_filename = $old_img;
    }
    echo $update_filename;
    //echo $update_filename;
    $new_img1=$_FILES['urin']['name'];
    $old_img1=$_POST['urin_old'];
    if ($new_img1!='') {
        $update_filename1 = $_FILES['urin']['name'];
    }
    else {
        $update_filename1 = $old_img1;
    }
    $new_img2=$_FILES['ray']['name'];
    $old_img2=$_POST['ray_old'];
    if ($new_img2!='') {
        $update_filename2 = $_FILES['ray']['name'];
    }
    else {
        $update_filename2 = $old_img2;
    }
    $new_img3=$_FILES['ecg']['name'];
    $old_img3=$_POST['ecg_old'];
    if ($new_img3!='') {
        $update_filename3 = $_FILES['ecg']['name'];
    }
    else {
        $update_filename3 = $old_img3;
    }
    $new_img4=$_FILES['ct']['name'];
    $old_img4=$_POST['ct_old'];
    if ($new_img4!='') {
        $update_filename4 = $_FILES['ct']['name'];
    }
    else {
        $update_filename4 = $old_img4;
    }
    $new_img5=$_FILES['mri']['name'];
    $old_img5=$_POST['mri_old'];
    if ($new_img5!='') {
        $update_filename5 = $_FILES['mri']['name'];
    }
    else {
        $update_filename5 = $old_img5;
    }
    $new_img6=$_FILES['ultra']['name'];
    $old_img6=$_POST['ultra_old'];
    if ($new_img6!='') {
        $update_filename6 = $_FILES['ultra']['name'];
    }
    else {
        $update_filename6 = $old_img6;
    }
    $new_img7=$_FILES['other']['name'];
    $old_img7=$_POST['other_old'];

    if ($new_img7!='') {
        $update_filename7 = $_FILES['other']['name'];
    }
    else {
        $update_filename7 = $old_img7;
    }

    $query1="UPDATE t_reports SET p_cbc='$update_filename',p_urin='$update_filename1',p_xray='$update_filename2',p_ecg='$update_filename3',p_ct='$update_filename4',p_mri='$update_filename5',p_ultra='$update_filename6',p_other='$update_filename7' where sno='$sno'";
    $query_run = mysqli_query($conn,$query1); 


    if ($query_run) {

        if($_FILES['cbc']['name']!='')
        {
            move_uploaded_file($_FILES['cbc']['tmp_name'],"studentpic/".$_FILES['cbc']['name']);
            //unlink("studentpic/".$old_img);
        }
        if($_FILES['urin']['name']!='')
        {
            move_uploaded_file($_FILES['urin']['tmp_name'],"studentdoc/".$_FILES['urin']['name']);
            //unlink("studentdoc/".$old_img1);
        }
        if($_FILES['ray']['name']!='')
        {
            move_uploaded_file($_FILES['ray']['tmp_name'],"studentdoc/".$_FILES['ray']['name']);
            //unlink("studentdoc/".$old_img2);
        }
        if($_FILES['ecg']['name']!='')
        {
            move_uploaded_file($_FILES['ecg']['tmp_name'],"studentdoc/".$_FILES['ecg']['name']);
            //unlink("studentdoc/".$old_img3);
        }
        if($_FILES['ct']['name']!='')
        {
            move_uploaded_file($_FILES['ct']['tmp_name'],"studentdoc/".$_FILES['ct']['name']);
            //unlink("studentdoc/".$old_img4);
        }
        if($_FILES['mri']['name']!='')
        {
            move_uploaded_file($_FILES['mri']['tmp_name'],"studentdoc/".$_FILES['mri']['name']);
            //unlink("studentdoc/".$old_img65);
        }
        if($_FILES['ultra']['name']!='')
        {
            move_uploaded_file($_FILES['ultra']['tmp_name'],"studentproof/".$_FILES['ultra']['name']);
            //unlink("studentproof/".$old_img6);
        }
        if($_FILES['other']['name']!='')
        {
            move_uploaded_file($_FILES['other']['tmp_name'],"studentproof/".$_FILES['other']['name']);
            //unlink("studentproof/".$old_img7);
        }
        echo "";
       header('location:edit.php');
    }
    else {
        echo "Not Updated";
    }
}

//   $picpath=$picpath.$_FILES['cbc']['name'];
//   $docpath1=$docpath.$_FILES['urin']['name'];     
//   $docpath2=$docpath.$_FILES['ray']['name']; 
//   $docpath3=$docpath.$_FILES['ecg']['name']; 
//   $docpath4=$docpath.$_FILES['ct']['name'];     
//   $docpath5=$docpath.$_FILES['mri']['name'];     
//   $proofpath1=$proofpath.$_FILES['ultra']['name']; 
//   $proofpath2=$proofpath.$_FILES['other']['name']; 

   
//     if(move_uploaded_file($_FILES['cbc']['tmp_name'],$picpath)
//     || move_uploaded_file($_FILES['urin']['tmp_name'],$docpath1)
//     || move_uploaded_file($_FILES['ray']['tmp_name'],$docpath2)
//     || move_uploaded_file($_FILES['ecg']['tmp_name'],$docpath3)
//     || move_uploaded_file($_FILES['ct']['tmp_name'],$docpath4)
//     || move_uploaded_file($_FILES['mri']['tmp_name'],$docpath5)
//     || move_uploaded_file($_FILES['ultra']['tmp_name'],$proofpath1)
//     || move_uploaded_file($_FILES['other']['tmp_name'],$proofpath2))
//     {
//      // $id=$_POST['sno'];
//      //$sno=$_POST['sno'];
//      $img=$_FILES['cbc']['name'];
//      $img1=$_FILES['urin']['name'];
//      $img2=$_FILES['ray']['name'];
//      $img3=$_FILES['ecg']['name'];
//      $img4=$_FILES['ct']['name'];
//      $img5=$_FILES['mri']['name'];
//      $img6=$_FILES['ultra']['name'];
//      $img7=$_FILES['other']['name'];
//         //  $set=0;
//         //  $_SESSION['suhel1']=$suhel;
//         //  $sql="select * from `maktum`";
//         //  $result = mysqli_query($conn, $sql);
//         //  while($row = mysqli_fetch_assoc($result)){
           
//         //   if($row['sno']==$_SESSION['suhel1'])
//         //   {

// //   $result = mysqli_query($conn, $sql);
// //   if($result)
// //   {
// //     $update = true;
// //   }
// // else
// //   {
// //     echo "We could not update the record successfully";
// //   }
          
//           //   $query="UPDATE `t_reports` SET (p_cbc,p_urin,p_xray,
//           // p_ecg,p_ct, p_mri, p_ultra,p_other) values 
//           // ('$img','$img1','$img2','$img3','$img4','$img5','$img6','$img7')";
//           $query = "UPDATE `t_reports` SET   `p_cbc` = '$img' , `p_urin` = '$img1' , `p_ray` = '$img2' , `p_ecg` = '$img3', `p_ct` = '$img4', `p_mri` = '$img5', `p_ultra` = '$img6', `p_other` = '$img7' WHERE `t_reports`.`sno` = $sno";

//               if($conn->query($query))
//                  {
                  
                  
//                       //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
//                       //   <strong>Success!</strong> Reports has been uploaded successfully
//                       //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//                       //     <span aria-hidden='true'>×</span>
//                       //   </button>
//                       // </div>";
//                       // echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
//                       // <strong>Success!</strong> Reports has been uploaded successfully
//                       // <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
//                       // <span aria-hidden='true'>&times;</span>
//                       //  </button>
//                       //  </div>";
//                       echo"Reports are inserted ";
                   
//                  }
//          }
        //  else {
        //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        //   <strong></strong> Invalid ID
        //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //     <span aria-hidden='true'>×</span>
        //   </button>
        //   </div>";
        //  }
            //  $set=1;
                  
              // break;
          // }
          
          
         
      //    if($set==1)
      //    {
          
  
  
  
         
     
     
    
      // }
  
  // else
  // {
  // echo "There is an error,please retry or check path";
  // }
  }
}
    // $sno = $_POST["sno"];
    // $cbc = $_POST["cbc"];
    // $urin = $_POST["urin"];
    // $ray=$_POST["ray"];
    // $ecg = $_POST["ecg"];
    // $ct = $_POST["ct"];
    // $mri = $_POST["mri"];
    // $ultra = $_POST["ultra"];
    // $other = $_POST["other"];


//   $sql = "UPDATE `t_reports` SET   `cbc` = '$cbc' , `urin` = '$urin' , `ray` = '$ray' , `ecg` = '$ecg', `ct` = '$ct', `mri` = '$mri', `ultra` = '$ultra', `other` = '$other' WHERE `t_reports`.`sno` = $sno";
//   $result = mysqli_query($conn, $sql);
//   if($result)
//   {
//     $update = true;
//   }
// else
//   {
//     echo "We could not update the record successfully";
//   }

// else{
//   $sno = $_POST["sno"];
//   $cbc = $_POST["cbc"];
//   $urin = $_POST["urin"];
//   $ray = $_POST["xray"];
//   $ecg = $_POST["ecg"];
//   $ct = $_POST["ct"];
//   $mri = $_POST["mri"];
//   $ultra = $_POST["ultra"];
//   $other = $_POST["other"];


//   $sql = "INSERT INTO `t_reports` (`p_cbc`,`p_urin` ,`p_xray`,`p_ecg`,`p_ct`,`p_mri`,`p_ultra`,`p_other`) VALUES ('$cbc', '$urin', '$ray', '$ecg', '$ct', '$mri', '$ultra','$other')";
//   $result = mysqli_query($conn, $sql);

   
//   if($result){ 
//       $insert = true;
//   }
//   else{
//       echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//   } 
// }

?>

<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  
  <link rel="stylesheet" href="style1.css">
  <title>Edit Report</title>

</head>

<body>
<a href="report1.php"><button class="btn">&larr; Back</button></a>

<?php
            $sno =  $_SESSION['suhel11'];
            $query = "SELECT * FROM t_reports WHERE sno='$sno'";
            $query_run = mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                   foreach ($query_run as $row ) {
                    ?>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">×</span> -->
          </button>
        </div>
        <form action="editreport.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="sno" id="snoEdit">
            <div class="form-group">
              <label for="cbc">Blood Count (CBC)</label>
              <td>
                <input type="file" class="form-control" id="cbcEdit" name="cbc" aria-describedby="emailHelp">
                <input type="hidden" class="form-control" id="cbcEdit" name="cbc_old" value="<?php echo $row['p_cbc']; ?>">
              </td>

            </div>

            <div class="form-group">
              <label for="urin">Urinalysis</label>
              <input type="file" class="form-control" id="urinEdit" name="urin" ></input>
              <input type="hidden" class="form-control" id="urinEdit" name="urin_old" value="<?php echo $row['p_urin']; ?>">

            </div> 
            <div class="form-group">
              <label for="xray">X-ray</label>
              <input type="file" class="form-control" id="xrayEdit" name="ray" ></input>
              <input type="hidden" class="form-control" id="xrayEdit" name="ray_old" value="<?php echo $row['p_xray']; ?>">

            </div> 
            <div class="form-group">
              <label for="ecg">ECG</label>
              <input type="file" class="form-control" id="ecgEdit" name="ecg" ></input>
              <input type="hidden" class="form-control" id="ecgEdit" name="ecg_old"  value="<?php echo $row['p_ecg']; ?>"></input>
            </div> 
            <div class="form-group">
              <label for="ct">CT</label>
              <input type="file" class="form-control" id="ctEdit" name="ct" ></input>
              <input type="hidden" class="form-control" id="ctEdit" name="ct_old" value="<?php echo $row['p_ct']; ?>" ></input>
            </div> 
            <div class="form-group">
              <label for="mri">MRI</label>
              <input type="file" class="form-control" id="mriEdit" name="mri" ></input>
              <input type="hidden" class="form-control" id="mriEdit" name="mri_old" value="<?php echo $row['p_mri']; ?>"></input>
            </div> 
            <div class="form-group">
              <label for="ultra">Ultrasound</label>
              <input type="file" class="form-control" id="ultraEdit" name="ultra" ></input>
              <input type="hidden" class="form-control" id="ultraEdit" name="ultra_old" value="<?php echo $row['p_ultra']; ?>" ></input>
            </div> 
            <div class="form-group">
              <label for="other">OTHER</label>
              <input type="file" class="form-control" id="otherEdit" name="other" ></input>
              <input type="hidden" class="form-control" id="otherEdit" name="other_old" value="<?php echo $row['p_other']; ?>" ></input>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
           <a href="editreport.php"> <button type="button" class="btn btn-secondary">Close</button></a>
            <button type="submit" name="update_stud_img" class="btn btn-primary">Save changes</button>
          </div>
        
    </form>
      </div>
    </div>
  </div>
  <?php
                   }
            }
            else {
                echo "No record Available";
            }
            ?>
      



  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?> 
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Record has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Details has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <center><b><h2>Report History</h2></b></center>
    
  </div>

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">ID</th>
          <th scope="col">CBC</th>
          <th scope="col">Urinalysis</th>
          <th scope="col">X-RAY</th>
          <th scope="col">ECG</th>
          <th scope="col">CT</th>
          <th scope="col">MRI</th>
          <th scope="col">Ultrasound</th>
          <th scope="col">OTHER</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `t_reports`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
           $sno = $sno + 1;
           $_SESSION['suhel11']=$row['sno'];
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>".$row['sno']. "</td>
            <td>".$row['p_cbc']. "</td>
            <td>".$row['p_urin']. "</td>
            <td>".$row['p_xray']. "</td>
            <td>".$row['p_ecg']. "</td>
            <td>".$row['p_ct']. "</td>
            <td>".$row['p_mri']. "</td>
            <td>".$row['p_ultra']. "</td>
            <td>".$row['p_other']. "</td>
            <td>  <a href='edit.php?sno=".$row['sno']."'><button class=' btn btn-sm btn-primary'> Edit </button></a></td>

          </tr>";
        } 
        // <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=".$row['sno'].">Delete</button>  </td>

          ?>


      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready(function () {
      $('#myTable').DataTable();

     });
    //let table = new DataTable('#myTable');
  </script>
  
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        cbc = tr.getElementsByTagName("td")[1].innerFile;
        urin = tr.getElementsByTagName("td")[2].innerFile;
        xray = tr.getElementsByTagName("td")[3].innerFile;
        ecg = tr.getElementsByTagName("td")[4].innerFile;
        mri = tr.getElementsByTagName("td")[5].innerFile;
        ultra = tr.getElementsByTagName("td")[6].innerFile;
        other = tr.getElementsByTagName("td")[7].innerFile;
        console.log(cbc, urin, xray, ecg, mri,ultra,other);
        cbcEdit.value = cbc;
        urinEdit.value = urin;
        xrayEdit.value = xray;
        ecgEdit.value = ecg;
        mriEdit.value = mri;
        ultraEdit.value = ultra;
        otherEdit.value = other;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `editreport.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
</body>

</html>
