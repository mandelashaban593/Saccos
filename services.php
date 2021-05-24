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

?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sacco</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />

<!-- css -->
<?php require("style.php"); ?>
<style type="text/css">
  img{  width: 180px;
height:  160px;
}
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">

<!-- start header -->
<?php require("nav.php"); ?><!-- end header -->
<section id="inner-headline">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="pageTitle">Home | Services</h2>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container content">		
<!-- Service Blcoks -->

<!-- End Service Blcoks -->

<hr class="margin-bottom-50">

<!-- Info Blcoks -->


<?php
$query5 = "select * FROM product_services";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
?>
<div class="col-lg-3 col-md-6 portfolio-item">
<div class="portfolio-wrap">
<img src="assets/img/<?=$data5['projectpic']?>" class="img-responsive" alt="">
<div class="portfolio-links" >

<a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
<a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>

<div class="info-blocks-in">
<h3><!-- Fully Responsive --></h3>
<p><?=$data5['projectname']?></p>
</div>


</div>
</div>
</div>
<?php
}
?>

</div>
<!-- End Info Blcoks -->

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