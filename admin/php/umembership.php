<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM membership WHERE id='$id'";

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
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
$requiredescription=mysqli_real_escape_string($db,$_POST['requiredescription']);
  

  

 
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE membership SET ";
$query.="projectpic='$projectpic',";
$query.="shortheading='$shortheading',";
$query.="requiredescription='$requiredescription',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editmembership=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM membership WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editmembership=true#done");
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
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);

$shortheading=mysqli_real_escape_string($db,$_POST['shortheading']);
  
 
if($pdone=="error"){
    header("location:../?editmembership=true&msg=error");
}else{
$query="INSERT INTO membership (requiredescription,projectpic,projectlink,shortheading) ";
$query.="VALUES ('$requiredescription','$projectpic','$projectlink','$shortheading')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editmembership=true&msg=updated");
}    

}    
    
}