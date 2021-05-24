<?php
include('../../include/db.php');
if(isset($_POST['save'])){        
$heading=mysqli_real_escape_string($db,$_POST['ptitle']);
$subheading=mysqli_real_escape_string($db,$_POST['psubtitle']);
$shortdesc=mysqli_real_escape_string($db,$_POST['shortdesc']);
$longdesc=mysqli_real_escape_string($db,$_POST['longdesc']);  
$dob=mysqli_real_escape_string($db,$_POST['dob']);  
$website=mysqli_real_escape_string($db,$_POST['website']); 

$sql="SELECT * FROM aboutus_setup";
$result=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0){
	$sql="INSERT INTO aboutus_setup (`shortdesc`, `heading`, `subheading`, `dob`, `website`, `longdesc`)
VALUES ('$shortdesc','$subheading', '$heading','$dob', '$website', '$longdesc')";


	$query=mysqli_query($db,$sql) or die(mysql_error($db));
	if($query){
		header("location:../?editabout=true&msg=updated");
	}

} else {

$query="UPDATE aboutus_setup SET ";
$query.="shortdesc='$shortdesc',";
$query.="heading='$heading',";
$query.="subheading='$subheading',";
$query.="dob='$dob',";
$query.="website='$website',";
$query.="longdesc='$longdesc' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}  


}




}    
    


    

