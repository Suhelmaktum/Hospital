<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "maktum";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  //     echo "success";
  // }
  // else{
  die("Error" . mysqli_connect_error());
}

session_start();
$picpath = "studentpic/";
$docpath = "studentdoc/";
$proofpath = "studentproof/";
$insert = false;
// $id=$_SESSION['user'];
if (isset($_POST['fpicup'])) {
  $picpath = $picpath . $_FILES['cbc']['name'];
  $docpath1 = $docpath . $_FILES['urin']['name'];
  $docpath2 = $docpath . $_FILES['ray']['name'];
  $docpath3 = $docpath . $_FILES['ecg']['name'];
  $docpath4 = $docpath . $_FILES['ct']['name'];
  $docpath5 = $docpath . $_FILES['mri']['name'];
  $proofpath1 = $proofpath . $_FILES['ultra']['name'];
  $proofpath2 = $proofpath . $_FILES['other']['name'];

  if (
    move_uploaded_file($_FILES['cbc']['tmp_name'], $picpath)
    || move_uploaded_file($_FILES['urin']['tmp_name'], $docpath1)
    || move_uploaded_file($_FILES['ray']['tmp_name'], $docpath2)
    || move_uploaded_file($_FILES['ecg']['tmp_name'], $docpath3)
    || move_uploaded_file($_FILES['ct']['tmp_name'], $docpath4)
    || move_uploaded_file($_FILES['mri']['tmp_name'], $docpath5)
    || move_uploaded_file($_FILES['ultra']['tmp_name'], $proofpath1)
    || move_uploaded_file($_FILES['other']['tmp_name'], $proofpath2)
  ) {
    // $id=$_POST['sno'];
    //$sno=$_POST['sno'];
    $img = $_FILES['cbc']['name'];
    $img1 = $_FILES['urin']['name'];
    $img2 = $_FILES['ray']['name'];
    $img3 = $_FILES['ecg']['name'];
    $img4 = $_FILES['ct']['name'];
    $img5 = $_FILES['mri']['name'];
    $img6 = $_FILES['ultra']['name'];
    $img7 = $_FILES['other']['name'];
    //  $set=0;
    //  $_SESSION['suhel1']=$suhel;
    //  $sql="select * from `maktum`";
    //  $result = mysqli_query($conn, $sql);
    //  while($row = mysqli_fetch_assoc($result)){

    //   if($row['sno']==$_SESSION['suhel1'])
    //   {
    $suhel1 = $_SESSION['suhel243'];
    $query = "insert into t_reports (sno,p_cbc,p_urin,p_xray,
        p_ecg,p_ct, p_mri, p_ultra,p_other) values 
        ('$suhel1','$img','$img1','$img2','$img3','$img4','$img5','$img6','$img7')";

    if ($conn->query($query)) {


      //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      //   <strong>Success!</strong> Reports has been uploaded successfully
      //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      //     <span aria-hidden='true'>×</span>
      //   </button>
      // </div>";
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Reports has been uploaded successfully
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                     </button>
                     </div>";
      // echo"Reports are inserted ";

    }
  }
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

  else {
    echo "There is an error,please retry or check path";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
  <link rel="stylesheet" href="style.css">


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    < link rel = "stylesheet"
    href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin = "anonymous" >
      <
      link rel = "stylesheet"
    href = "//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >

      <
      link rel = "stylesheet"
    href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin = "anonymous" >

      <
      script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin = "anonymous" >
  </script>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


  </script>
  <script type="text/javascript">
    function printpage() {
      var printButton = document.getElementById("print");
      printButton.style.visibility = 'hidden';
      window.print()
      printButton.style.visibility = 'visible';
    }
  </script>
  <style>
    .preview-container {
      display: flex;
      float: right;
      flex-wrap: wrap;
    }

    .preview-item {
      width: 500px;
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .preview-item img {
      max-width: 100%;
      max-height: 300px;
    }
  </style>
</head>

<body>
  <div>
    <a href="report1.php"><button class="btn">&larr; Back</button></a>
  </div>
  <div>
    <center>
      <h2>Report uploader</h2>
    </center>
  </div>


  <div>
    <form id="docup" action="document.php" method="post" enctype="multipart/form-data">

      <div class="container1" style="margin-left:400px;">
        <table class="table" id="table1">
          <thead>
            <tr>
              <th>
                <!-- <center><font style=" font-family: Verdana;  font-size:19px;"> Upload Report</font></center> -->
              </th>
            </tr>
          </thead>



          <tbody>
            <tr>
              <td>
                <h3>Patient ID</h3>
              </td>
              <td><input type="number" id="sno" name="sno"><br> </td>

              <td colspan="2"><input method="post" type="submit" id="checkbtn" name="checkbtn"></td>
            </tr>
            <?php
            $insert = false;
            $delete = false;
            if (isset($_POST['checkbtn'])) {
              $set1 = 0;
              $set2 = 0;
              $sno = $_POST['sno'];
              $_SESSION['suhel1'] = $sno;
              $sql = "select * from `maktum`";
              $sql1 = "select * from `t_reports`";
              $result = mysqli_query($conn, $sql);
              $result1 = mysqli_query($conn, $sql1);
              while ($row = mysqli_fetch_assoc($result)) {

                if ($row['sno'] == $_SESSION['suhel1']) {
                  while ($row1 = mysqli_fetch_assoc($result1)) {
                    if ($row['sno'] == $row1['sno']) {
                      $set2 = 1;

                      break;
                    }
                  }
                  $suhel = $row['sno'];
                  $name1 = $row['name'];
                  $_SESSION['suhel243'] = $suhel;
                  $set1 = 1;



                  break;
                }
              }
              if ($set2 == 1) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                          <strong> Already file Uploaded with this ID please go through edit report option </strong>
                                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>×</span>
                                          </button>
                                          </div>";
              } elseif ($set1 == 1) {
                echo "
                                   
                                   <table>
                                   <thead >

                                   </thead>
                                   <tbody>
                                    <tr>
                                    <div class='preview-container' id='previewContainer'> </div>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <h3>Patient ID </h3>
                                        </td>
                                        <td>$suhel</td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <h3>Patient name </h3>
                                        </td>
                                        <td>$name1</td>
                                    </tr> 
                                    
                                    <tr>
                                         <td><h3>Blood Count (CBC)</h3></td>
                                         <td><input type='file' id='cbc' name='cbc' onchange='previewcbc()'  ><br></td>
                                                               </tr>
                                       <tr>  <td><h3>Urinalysis </h3></td>
                                         <td><input type='file' id='urin' name='urin' onchange='previewurin()' ><br></td>
                                    </tr>
                                    <tr>
                                         <td><h3>X-ray </h3></td>
                                         <td><input type='file' id='ray' name='ray' onchange='previewray()' ><br></td>
                                    </tr>
                                    
                                    <tr>
                                         <td><h3>ECG</h3></td>
                                         <td><input type='file' id='ecg' name='ecg' onchange='previewecg()' ><br>
                                    </tr>
                                    <tr>
                                         <td><h3>CT Scan</h3></td>
                                         <td><input type='file' id='ct' name='ct' onchange='previewct()'><br></td>
                                    </tr>
                                    <tr>
                                         <td><h3>MRI</h3></td>
                                         <td><input type='file' id='mri' name='mri' onchange='previewmri()' ><br></td>
                                    </tr>
                                    <tr>
                                         <td><h3>Ultrasound</h3></td>
                                         <td><input type='file' id='ultra' name='ultra' onchange='previewultra()'><br></td>
                                    </tr>
                                    <tr>
                                         <td><h3>Other</h3></td>
                                         <td><input type='file' id='other' name='other' onchange='previewother()'><br></td>
                                    </tr>
                                      
                                    </div>
                                    
                                     <tr>
                                        
                                        <td colspan='2'><input type='submit' id='fpicup' name='fpicup' class='toggle btn btn-primary'></td>
                                    </tr> 
                                    </tbody>
                       </table>";
              } else {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                          <strong>Invalid ID </strong> 
                                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>×</span>
                                          </button>
                                          </div>";
              }
            }

            ?>


          </tbody>
        </table>

      </div>



    </form>

  </div>

  <script>
    function previewcbc() {
      var fileInput = document.getElementById('cbc');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewurin() {
      var fileInput = document.getElementById('urin');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewray() {
      var fileInput = document.getElementById('ray');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewecg() {
      var fileInput = document.getElementById('ecg');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewct() {
      var fileInput = document.getElementById('ct');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewmri() {
      var fileInput = document.getElementById('mri');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewultra() {
      var fileInput = document.getElementById('ultra');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }

    function previewother() {
      var fileInput = document.getElementById('other');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(e) {
            var previewItem = document.createElement('div');
            previewItem.classList.add('preview-item');

            var embed = document.createElement('embed');
            embed.src = e.target.result;
            embed.type = "application/pdf";
            embed.width = "100%";
            embed.height = "400px";

            previewItem.appendChild(embed);
            previewContainer.appendChild(previewItem);
          };
        })(file);

        reader.readAsDataURL(file);
      }
    }
  </script>





  <embed type="application/pdf" scr="<?php //echo "studentdoc/".$row['p_cbc']; 
                                      ?>">
  <?php
  // $filePath="studentdoc/".$row['p_cbc'];
  //  echo '<embed src="' . $filePath . '" type="application/pdf" width="100%" height="600px" />';

  //     if($suhel1=1)
  //  { 
  ?>
  <!-- <div class='preview-container' id='previewContainer'>  -->

  <!-- <embed type="application/pdf" scr="<?php //echo "studentdoc/".$row['p_cbc']; 
                                          ?>"> -->
  <?php
  // $filePath="studentdoc/".$row['p_cbc'];
  //  echo '<embed src="' . $filePath . '" type="application/pdf" width="100%" height="600px" />';
  ?>
  <?php
  //}
  ?>







  <?php
  //if($suhel==2)
  //{
  ?>
  <!-- <div class='preview-container' id='previewContainer'>  -->
  <!-- <img src="<?php //echo "studentdoc/".$row['p_urin']; 
                  ?>" alt=""> -->
  <?php
  // $filePath="studentdoc/".$row['p_urin'];
  // echo '<embed src="' . $filePath . '" type="application/pdf" width="100%" height="600px" />';
  ?>
  </div>
  <?php
  // }
  ?>




</body>

</html>