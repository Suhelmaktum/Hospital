<?php
include"connection.php";
session_start();
if(isset($_POST['update_stud_img']))
{

    $picpath="studentpic/";
    $docpath="studentdoc/";
    $proofpath="studentproof/";
    $sno=$_POST['sno'];
    


$picpath=$picpath.$_FILES['cbc']['name'];
$docpath1=$docpath.$_FILES['urin']['name'];     
$docpath2=$docpath.$_FILES['ray']['name']; 
$docpath3=$docpath.$_FILES['ecg']['name']; 
$docpath4=$docpath.$_FILES['ct']['name'];     
$docpath5=$docpath.$_FILES['mri']['name'];     
$proofpath1=$proofpath.$_FILES['ultra']['name']; 
$proofpath2=$proofpath.$_FILES['other']['name']; 


    $new_img=$_FILES['cbc']['name'];
    $old_img=$_POST['cbc_old'];
    if ($new_img!='') {
        $update_filename = $_FILES['cbc']['name'];
    }
    else {
        $update_filename = $old_img;
    }
    // echo $update_filename;
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


    if($_FILES['cbc']['name']!='')
    {
        move_uploaded_file($_FILES['cbc']['tmp_name'],$picpath);
        //unlink("studentpic/".$old_img);
    }
    if($_FILES['urin']['name']!='')
    {
        move_uploaded_file($_FILES['urin']['tmp_name'],$docpath1);
        //unlink("studentdoc/".$old_img1);
    }
    if($_FILES['ray']['name']!='')
    {
        move_uploaded_file($_FILES['ray']['tmp_name'],$docpath2);
        //unlink("studentdoc/".$old_img2);
    }
    if($_FILES['ecg']['name']!='')
    {
        move_uploaded_file($_FILES['ecg']['tmp_name'],$docpath3);
        //unlink("studentdoc/".$old_img3);
    }
    if($_FILES['ct']['name']!='')
    {
        move_uploaded_file($_FILES['ct']['tmp_name'],$docpath4);
        //unlink("studentdoc/".$old_img4);
    }
    if($_FILES['mri']['name']!='')
    {
        move_uploaded_file($_FILES['mri']['tmp_name'],$docpath5);
        //unlink("studentdoc/".$old_img65);
    }
    if($_FILES['ultra']['name']!='')
    {
        move_uploaded_file($_FILES['ultra']['tmp_name'],$proofpath1);
        //unlink("studentproof/".$old_img6);
    }
    if($_FILES['other']['name']!='')
    {
        move_uploaded_file($_FILES['other']['tmp_name'],$proofpath2);
        //unlink("studentproof/".$old_img7);
    }

    $query1="UPDATE t_reports SET p_cbc='$update_filename',p_urin='$update_filename1',p_xray='$update_filename2',p_ecg='$update_filename3',p_ct='$update_filename4',p_mri='$update_filename5',p_ultra='$update_filename6',p_other='$update_filename7' where sno='$sno'";
    $query_run = mysqli_query($conn,$query1); 


    if ($query_run) {

    
        echo "Updation done";
       //header('location:editreport.php');
    }
    else {
        echo "Not Updated";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

    <style>
        .suhel0243
        {
            margin-left:200px;
            margin-right:100px;
            margin-bottom:50px;
            margin-top:120px;
            padding:20px;
            width:50%;
        }
        .suhel111
        {
            margin-left:100px;
            margin-bottom:50px;
        }
        .preview-container {
           display: flex;
           float:right;
           flex-wrap: wrap;
        }

        .preview-item {
          width: 500px;
          margin-right: 10px;
          margin-bottom: 100px;
        }

        .preview-item img {
          max-width: 50%;
          max-height: 300px;
        }
    </style>

</head>
<body>
<div class='preview-container' id='previewContainer'> </div>


<div class="suhel0243">
    <div>
         <center> <h3 >Edit this Details</h3></center>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>

        
            <?php
            $_SESSION['suhelmaktum'] = $_GET['sno'];
            $sno = $_SESSION['suhelmaktum'];
           
            $query = "SELECT * FROM t_reports WHERE sno='$sno'";
            $query_run = mysqli_query($conn,$query);

            if(mysqli_num_rows($query_run)>0)
            {
                   foreach ($query_run as $row ) {
                    ?>

    <div>
        <form action="editphp.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="sno" id="snoEdit" value="<?php echo $row['sno']; ?>">
            
               
            <div class="form-group">
              <label for="cbc">Blood Count (CBC)</label>
              <td>
                <input type="file" class="form-control" id="cbcEdit" name="cbc" onchange='previewcbc()'>
                <input type="text" class="form-control" id="cbcEdit" name="cbc_old" value="<?php echo $row['p_cbc']; ?>">
              </td>

            </div>

            <div class="form-group">
              <label for="urin">Urinalysis</label>
              <input type="file" class="form-control" id="urinEdit" name="urin" onchange='previewurin()' ></input>
              <input type="text" class="form-control" id="urinEdit" name="urin_old" value="<?php echo $row['p_urin']; ?>">

            </div> 
            <div class="form-group">
              <label for="xray">X-ray</label>
              <input type="file" class="form-control" id="xrayEdit" name="ray" onchange='previewray()' ></input>
              <input type="text" class="form-control" id="xrayEdit" name="ray_old" value="<?php echo $row['p_xray']; ?>">

            </div> 
            <div class="form-group">
              <label for="ecg">ECG</label>
              <input type="file" class="form-control" id="ecgEdit" name="ecg" onchange='previewecg()'></input>
              <input type="text" class="form-control" id="ecgEdit" name="ecg_old"  value="<?php echo $row['p_ecg']; ?>"></input>
            </div> 
            <div class="form-group">
              <label for="ct">CT</label>
              <input type="file" class="form-control" id="ctEdit" name="ct" onchange='previewct()'></input>
              <input type="text" class="form-control" id="ctEdit" name="ct_old" value="<?php echo $row['p_ct']; ?>" ></input>
            </div> 
            <div class="form-group">
              <label for="mri">MRI</label>
              <input type="file" class="form-control" id="mriEdit" name="mri" onchange='previewmri()' ></input>
              <input type="text" class="form-control" id="mriEdit" name="mri_old" value="<?php echo $row['p_mri']; ?>"></input>
            </div> 
            <div class="form-group">
              <label for="ultra">Ultrasound</label>
              <input type="file" class="form-control" id="ultraEdit" name="ultra" onchange='previewultra()'></input>
              <input type="text" class="form-control" id="ultraEdit" name="ultra_old" value="<?php echo $row['p_ultra']; ?>" ></input>
            </div> 
            <div class="form-group">
              <label for="other">OTHER</label>
              <input type="file" class="form-control" id="otherEdit" name="other" onchange='previewother()'></input>
              <input type="text" class="form-control" id="otherEdit" name="other_old" value="<?php echo $row['p_other']; ?>" ></input>
            </div> 
          </div>
          <div class="suhel111">
          <a href="editreport.php"> <button type="button" class="btn btn-secondary">Close</button></a>
            <button type="submit" name="update_stud_img" class="btn btn-primary">Save changes</button>
          </div>
        
        </form>
    </div>
                    <?php
                   }
            }
            else {
                echo "No record Available";
            }
            ?>

            

    </div>
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
    function previewurin()
    {
        var fileInput = document.getElementById('urinEdit');
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
    function previewray()
    {
      var fileInput = document.getElementById('xrayEdit');
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
    function previewecg()
    {
      var fileInput = document.getElementById('ecgEdit');
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
    function previewct()
    {
      var fileInput = document.getElementById('ctEdit');
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
    function previewmri()
    {
      var fileInput = document.getElementById('mriEdit');
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
    function previewultra()
    {
      var fileInput = document.getElementById('ultraEdit');
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
    function previewother()
    {
      var fileInput = document.getElementById('otherEdit');
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