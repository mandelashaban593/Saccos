<?php
include('../../include/db.php');
#include('checkupload.php');
$projectpic_name= $_FILES['projectpic']['name'];
// destination of the file on the server
$projectpic_name_destination = 'uploads/' . $projectpic_name;
// get the file extension
$projectpic_name_extension = pathinfo($projectpic_name, PATHINFO_EXTENSION);
// the physical file on a temporary uploads directory on the server
$projectpic_file =$_FILES['projectpic']['tmp_name'];
$projectpic_size =$_FILES['projectpic']['size'];
move_uploaded_file($projectpic_file, $projectpic_name_destination);
$id=$_POST['id'];
$query="SELECT * FROM document WHERE id='$id'";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
$target_dir = "../../assets/img/";
if(isset($_POST['pupdate'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
$pdone="error";    
}
$shortheading=mysqli_real_escape_string($db,$_POST['shortheading']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
$requiredescription=mysqli_real_escape_string($db,$_POST['requiredescription']);
 
if($pdone=="error"){
    header("location:../?editdocument=true&msg=error");
}else{
$query="UPDATE document SET ";
$query.="projectpic='$projectpic_name',";
$query.="projectpic_name_destination='$projectpic_name_destination',";
$query.="projectpic_file='$projectpic_file',";
$query.="projectpic_size='$projectpic_size',";
$query.="shortheading='$shortheading',";
$query.="requiredescription='$requiredescription',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editdocument=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM document WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editdocument=true#done");
}
}


if(isset($_POST['addtoportfolio'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = "error";
}
    
$requiredescription=mysqli_real_escape_string($db,$_POST['requiredescription']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
$shortheading=mysqli_real_escape_string($db,$_POST['shortheading']);
  
if($pdone=="error"){
    header("location:../?editdocument=true&msg=error");
}else{
$query="INSERT INTO document (requiredescription,projectpic,projectpic_name_destination,projectpic_file,projectpic_size,projectlink,shortheading) ";
$query.="VALUES ('$requiredescription','".$_FILES['projectpic']['name']."','$projectpic_name_destination','$projectpic_file','$projectpic_size','$projectlink','$shortheading')";
$queryrun=mysqli_query($db,$query) or die(mysqli_error());
if($queryrun){
    header("location:../?editdocument=true&msg=updated");
}    

}    
    
}