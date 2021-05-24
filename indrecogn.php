 <?php
        session_start();
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
 } 

include('include/db.php');
$query="SELECT * FROM indrecogn_setup";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);


?>   

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SACCO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<?php require("style.php"); ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">

<!-- start header -->
<?php require("nav.php"); ?>

<section id="inner-headline">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="pageTitle">Home | Industry recognition</h2>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container">


<div class="about">

<div class="row"> 
<div class="col-md-12"> 
		<h3> <span class="color"></span></h3>
		<p>
			<h2><?=$data['heading'];?></h2>
            <p><?=nl2br($data['longdesc']);?></p>

	        <a href="#" class="btn btn-color"><!-- Read more --></a>  
</div>
</div>

<hr>
<br>


</div>
</section>

<?php require("footer.php"); ?>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php require("javascripts.php"); ?>
</body>
</html>