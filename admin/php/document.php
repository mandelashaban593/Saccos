<?php include 'filesLogic.php';?>
<h2>Edit our Documents Section</h2>
<?php
if(isset($_GET['msg'])){

if($_GET['msg']=='updated'){
?>
<div class="alert alert-success text-center" role="alert">
Project Successfully Added !
</div>
<?php
}  
if($_GET['msg']=='error'){
?>
<div class="alert alert-danger text-center" role="alert">
something wrong with your image please check type or size !
</div>
<?php
} } 
?>  
<form action="php/document.php" method="post" enctype="multipart/form-data" >
<div class="form-group col-md-6 mt-auto">
<label for="name">Heading</label>
<input type="text" name="heading" class="form-control" >
</div>

<div class="form-group col-md-6 mt-auto">
<label for="name">Sub Heading</label>
<input type="text" name="subheading" class="form-control" >
</div>
<div class="form-group col-md-6 mt-auto">
<label for="name">Upload File</label>
<input type="file" name="myfile"> 
</div>
<div class="form-group col-md-6 mt-auto">
<button type="submit" name="save">upload</button>
</div>
</form>
<br>
<table class="table table-striped table-sm">
<thead>
<tr>
<th>ID</th>
<th>Filename</th>
<th>size (in mb)</th>
<th>Downloads</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$query2="SELECT * FROM files";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
?>
<tr>
<div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<!-- <form method="post" action="php/udocument.php"  enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$data2['id']?>">
<div class="form-row">
<div class="form-group col-md-12">
<img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail">
</div>
<div class="form-group col-md-6">
<label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
<div class="custom-file">
<input type="file" name="projectpic" class="cusom-file-input" id="proflepic">
<label class="custom-file-label" for="projectpic">Choose Pic...</label>
</div></div>

<div class="form-group col-md-6 mt-auto">
<label for="name">Heading</label>
<input type="name" name="shortheading" value="<?=$data2['name']?>" class="form-control" id="name" placeholder="ToDo List Maker">
</div>


<div class="form-group col-md-6 mt-auto">
<label for="name">Requirements</label>
<textarea  type="name" name="requiredescription" value="" class="form-control" id="arContnt" placeholder="ToDo List Maker" style="width:450px;height:300px" >
	
	<?php echo floor($data2['size'] / 1000) . ' KB'; ?>

</textarea>

</div>


<div class="form-group col-md-6 mt-auto">
<label for="name">Downloads</label>
<td><?php echo $data2['downloads']; ?></td>
</div>




</div>


<div class="form-group col-md-12">
<label for="email">Project Link</label>
<a href="downloads.php?file_id=<?php echo $data2['id'] ?>">Download</a>

</div>

</div>



<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<input type="submit" class="btn btn-primary" name="pupdate" value="Update">

</form> -->
</div>
</div>
</div>
</div>   
<td>#<?=$count?></td>
<td>
<input type="file" name="projectpic" id="picture3" value="uploads/<?=$data2['name']?>"/><?=$data2['name']?></td>
<td><?=$data2['name']?></td>
<td>
<a href="downloads.php?file_id=<?php echo $data2['id'] ?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
Edit
</button> <a href="php/udocument.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
Delete
</button></a></td>
</tr>            
<?php $count++;
} ?>
</tbody></table>  


