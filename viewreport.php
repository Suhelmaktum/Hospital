<?php
// echo " suhel you are eligible to to display reports";
session_start();
include("connection.php");
$suhel=0;

// $picpath="studentpic/";
// $docpath="studentdoc/";
// $proofpath="studentproof/";

    
// $cbc1=$_SESSION['cbc1'];
// echo $cbc1;
if (isset($_POST['view']))
{
        $sno = $_SESSION['username1'];
           
        $query = "SELECT * FROM t_reports WHERE sno='$sno'";
        $query_run = mysqli_query($conn,$query);
        
  if(mysqli_num_rows($query_run)>0)
  {
    foreach ($query_run as $row )
    {      
           $pdfFile = '';
        switch ($_POST['view']) 
        {
            case 'cbc':
                
                $pdfFile = 'studentdoc/$row["p_cbc"]';
                break;
            case 'urin':
            $pdfFile = 'studentdoc/$urin1';
            break;
            case 'xray':
            $pdfFile = 'studentpic/CT.pdf';
            break;
            case 'ecg':
            $pdfFile = 'studentpic/.$ecg.';
            break;
            case 'ct':
            $pdfFile = '"studentpic/".$ct';
            break;
            case 'mri':
            $pdfFile = '"studentpic/".$mri';
            break;
            case 'ultra':
            $pdfFile = '"studentproof/".$ultra';
            break;
            case 'other':
            $pdfFile = '"studentproof/".$other';
            break;
        }

    }
    

 }
 
        if (!empty($pdfFile)) 
            {
            // Set the appropriate headers
                header('Content-type: application/pdf');
                header('Content-Disposition: inline; filename="' . basename($pdfFile) . '"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');

                // Output the PDF file
                readfile($pdfFile);
                exit;
            }
  
}
else
{
    echo" Invalid ";
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
      .table12
      {
        margin-left: 100px;
        margin-top:20px;
        margin-bottom:20px;
        height:600px;
        width: 500px;
        border:2px solid black;
      }

      .preview-container {
      display: flex;
      float:right;
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
    
    .table23
    {
        margin-left:200px;
        margin-top:80px;
    }
    .form-group
    {
        margin-left:30px;
        margin-top:30px;

    }
    </style>
</head>
<body>
    

<div class="glow">Patient Reports</div>
<div class="asp">
    <?php
      
      echo "Welcome ".$_SESSION['pwel'];
      
    ?>
</div>
<br>

<!-- <div class="container" >
        <img  id="header" src="logo.png" alt="logo" width="8%" height="8%" >
        <h1 > TATA HOSPITAL </h1>
</div>
  	 -->
       <a href="adminp.php"><button class="btn">&larr; Back</button></a>


  <!-- <div class="menu" align="center">
    <a href="add.php" target="detail">Add New Patient</a>
    <a href="phistory.php" target="detail">Patient History</a>
    <a href="report1.php" target="detail">Reports Panel</a>
    <a href="plogin.php" target="detail">Patient Login</a>
    <a href="logout.php" target="detail">Logout</a>
  </div> -->
  

  <?php
            $sno = $_SESSION['username1'];
           
            $query = "SELECT * FROM t_reports WHERE sno='$sno'";
            $query_run = mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                   foreach ($query_run as $row ) 
                {
                    ?>

    



<div class="table12">
    <table>
        <thead>
            <tr>
                <td></td>
            </tr>
        </thead>
        <tbody class="table23">


        <form method="post"  action="viewreport.php">


            <tr>
                <td>
                <div class="form-group">
                  <label for="cbc">Blood Count (CBC)</label>
                  <td>
                   <input type="text" class="form-control" id="cbcEdit" name="cbc_old"  value="<?php 
                //    $cbc12=$row['p_cbc'];
                   //$cbc=$_FILES['cbc_old']['name']; 
                   $_SESSION['cbc1']=$row['p_cbc'];
                   echo $row['p_cbc']; ?>" readonly>
                  </td>
                   <td>    
                            <input type="submit" id="view"  name="view" value="cbc">  </td>
                <?php
                // if($suhel==1)
                // {?>
                    <!-- <div class='preview-container' id='previewContainer'>  -->
                    <!-- <embed type="application/pdf" scr="<?php //echo "studentdoc/".$row['p_cbc']; ?>"> -->
                    
                    <!-- </div> -->


                <?php
                // }
                ?>
                </div>
                </td>
            </tr>
            <tr>
                
                <td>
                   <div class="form-group">
                    <label for="urin">Urinalysis</label>
                    <td>
                    <input type="text" class="form-control" id="urinEdit" name="urin_old" value="<?php $urin=$row['p_urin'];   echo $row['p_urin']; ?>" readonly>
                    </td>
                     <td><input type="submit" name="view" value="urin"></td>
                   </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                     <label for="xray">X-ray</label>
                     <td>
                     <input type="text" class="form-control" id="xrayEdit" name="ray_old" value="<?php $xray=$row['p_xray']; echo $row['p_xray']; ?>"readonly>
                     </td>
                      <td><input type="submit" name="view" value="xray"></td>
                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label for="ecg">ECG</label>
                     <td>
                     <input type="text" class="form-control" id="ecgEdit" name="ecg_old"  value="<?php $ecg=$row['p_ecg']; echo $row['p_ecg']; ?>"></input>
                     </td>
                     <td><input type="submit" name="view" value="ecg"></td>

                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label for="ct">CT</label>
                     <td>
                     <input type="text" class="form-control" id="ctEdit" name="ct_old" value="<?php $ct=$row['p_ct']; echo $row['p_ct']; ?>" ></input>
                     </td>
                     <td><input type="submit" name="view" value="ct"></td>

                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label for="mri">MRI</label>
                     <td>
                     <input type="text" class="form-control" id="mriEdit" name="mri_old" value="<?php $mri=$row['p_mri']; echo $row['p_mri']; ?>"></input>
                     </td>
                     <td><input type="submit" name="view" value="mri"></td>

                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label for="ultra">Ultrasound</label>
                     <td>
                     <input type="text" class="form-control" id="ultraEdit" name="ultra_old" value="<?php $ultra=$row['p_ultra']; echo $row['p_ultra']; ?>" ></input>
                     </td>
                     <td><input type="submit" name="view" value="ultra"></td>

                    </div> 
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                    <label for="other">OTHER</label>
                     <td>
                     <input type="text" class="form-control" id="otherEdit" name="other_old" value="<?php $other=$row['p_other']; echo $row['p_other']; ?>" ></input>
                     </td>
                     <td><input type="submit" name="view" value="other"></td>

                    </div> 
                </td>
            </tr>
        </form>
        </tbody>
    </table>
    
</div>

                    <?php
                }
            }
            else {
                echo "No record Available";
            }
            ?>







<script>
    function previewcbc() 
    {
        var fileInput = document.getElementById('cbcEdit');
      var files = fileInput.files;
      var previewContainer = document.getElementById('previewContainer');

      previewContainer.innerHTML = "";

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function (file) {
          return function (e) {
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

  
  
</div>


</body>
</html>
