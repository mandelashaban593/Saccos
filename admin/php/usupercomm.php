<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM ourteam WHERE id='$id'";

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
    
    
$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE supercomm SET ";
$query.="projectpic='$projectpic',";
$query.="projectname='$projectname',";
$query.="projectlink='$projectlink' WHERE id='$id'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editsupercomm=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM supercomm WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editsupercomm=true#done");
}
}


if(isset($_POST['addtoportfolio'])){    
$projectpic=$_FILES['projectpic']['name'];        
if($projectpic==""){
    $projectpic=$data['projectpic'];
}else{
    $pdone = Upload('projectpic',$target_dir);
}
    
    
$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
  
 
if($pdone=="error"){
    header("location:../?editsupercomm=true&msg=error");
}else{
$query="INSERT INTO supercomm (projectname,projectpic,projectlink) ";
$query.="VALUES ('$projectname','$projectpic','$projectlink')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editsupercomm=true&msg=updated");
}    

}    
    
}