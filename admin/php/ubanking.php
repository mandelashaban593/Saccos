<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM banking WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$shortheading=mysqli_real_escape_string($db,$_POST['shortheading']);
$heading=mysqli_real_escape_string($db,$_POST['heading']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
$requiredescription=mysqli_real_escape_string($db,$_POST['requiredescription']);
$subdescribe=mysqli_real_escape_string($db,$_POST['subdescribe']);

  

 
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE banking SET ";
$query.="projectpic='$projectpic',";
$query.="shortheading='$shortheading',";
$query.="heading='$heading',";
$query.="requiredescription='$requiredescription',";
$query.="subdescribe='$subdescribe',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editbanking=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM banking WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editbanking=true#done");
}
}


if(isset($_POST['addtoportfolio'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$requiredescription=mysqli_real_escape_string($db,$_POST['requiredescription']);
$subdescribe=mysqli_real_escape_string($db,$_POST['subdescribe']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
$shortheading=mysqli_real_escape_string($db,$_POST['shortheading']);
$heading=mysqli_real_escape_string($db,$_POST['heading']);

if($pdone=="error"){
    header("location:../?editbanking=true&msg=error");
}else{
$query="INSERT INTO banking (requiredescription,projectpic,projectlink,shortheading,heading,subdescribe) ";
$query.="VALUES ('$requiredescription','$projectpic','$projectlink','$shortheading','$heading','$subdescribe')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editbanking=true&msg=updated");
}    

}    
    
}