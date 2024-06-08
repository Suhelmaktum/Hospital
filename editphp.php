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
       header('location:editreport.php');
    }
    else {
        echo "Not Updated";
    }
}
?>
