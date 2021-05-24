<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);

//Vission
$query = "SELECT * FROM vision_setup";
$runquery = mysqli_query($db,$query);
$vision_data = mysqli_fetch_array($runquery);
//Mission 
$query = "SELECT * FROM mission_setup";
$runquery = mysqli_query($db,$query);
$mission_data = mysqli_fetch_array($runquery);
//Objectives/Goals  
$query = "SELECT * FROM objectives_setup";
$runquery = mysqli_query($db,$query);
$objectives_data = mysqli_fetch_array($runquery);
//Core values 
$query = "SELECT * FROM corevalues_setup";
$runquery = mysqli_query($db,$query);
$corevalues_data = mysqli_fetch_array($runquery);

//Membership 
$query = "SELECT * FROM skills";
$runquerymem = mysqli_query($db,$query);




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
<h2 class="pageTitle">Home | About Us</h2>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container">


<div class="about">

<div class="row"> 
<div class="col-md-12"> 

		<!-- ======= About Section ======= -->
<secion id="about" class="about">
<div class="container">

<div class="section-title">
<p><img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt=""></p>
<p><h2><?=$data['heading']?></h2></p>
<p><?=$data['longdesc']?></p>
</div>

<div class="row">
<div class="col-lg-4" data-aos="fade-right">

</div>
<div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

<div>

</div>
<p>


</div>
</div>

</div>
</section><!-- End About Section -->
</p>
        	
	 
	<a href="#" class="btn btn-color"><!-- Read more --></a>  
</div>
</div>

<hr>
<br>

<div class="row">
<div class="col-md-4">
	<!-- Vision-->
	<div class="block-heading-two">
		<h3><?=$vision_data['heading']?></h3>
	</div>
<p><?=$vision_data['longdesc']?></p>’  <br/><br/>
</div>
<div class="col-md-4">
	<div class="block-heading-two">
		<h3><span></span></h3>
	</div>		
	<!-- Accordion starts -->
	<div class="panel-group" id="accordion-alt3">
	 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
	  <div class="panel">	
		<!-- Mission -->
		 <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
				<i class="fa fa-angle-right"></i><?=$mission_data['heading']?>
			  </a>
			</h4>
		 </div>
		 <div id="collapseOne-alt3" class="panel-collapse collapse">
			<!-- Panel body -->
			<div class="panel-body">
			<p><h2></h2></p>
<p><?=$mission_data['longdesc']?></p>
			 
			</div>
		 </div>
	  </div>
	  <div class="panel">
		 <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
			  	<!-- objectives -->
				<i class="fa fa-angle-right"></i><?=$objectives_data['heading']?>
			  </a>
			</h4>
		 </div>
		 <div id="collapseTwo-alt3" class="panel-collapse collapse">
			<div class="panel-body">
				
<p><?=nl2br($objectives_data['longdesc'])?></p>
			
			</div>
		 </div>
	  </div>
	  <div class="panel">
		 <div class="panel-heading">
			<h4 class="panel-title">
			  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
			  	<!-- Core values  -->
				<i class="fa fa-angle-right"></i> <?=$corevalues_data['heading']?> 
			  </a>
			</h4>
		 </div>
		 <div id="collapseThree-alt3" class="panel-collapse collapse">
			<div class="panel-body">
				<?=nl2br($corevalues_data['longdesc'])?>
			</div>
		 </div>
	  </div>
	
	</div>
	<!-- Accordion ends -->
	
</div>

<div class="col-md-4">
	<div class="block-heading-two">
		<h3><span>Membership requirements</span></h3>
	</div>		

	<?php while($membership_data = mysqli_fetch_array($runquerymem)){ ?>						
	<h6><?=$membership_data['skill']?> </h6>
	<div class="progress pb-sm">
	  <!-- White color (progress-bar-white) -->
	  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="<?=$membership_data['score']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$membership_data['score']?>">
		 <span class="sr-only"><?=$membership_data['score']?>% Complete (success)</span>
	  </div>
	</div>
<?php  } ?>
	
</div>

</div>

						

<br>
<!-- Our Team starts -->

<!-- Heading -->
<div class="block-heading-six">
<h4 class="bg-color">Our Team</h4>
</div>
<br>

<!-- Our team starts -->


<!-- Our team starts -->

<div class="team-six">
<div class="row offs1">



<?php
$query5 = "select * FROM ourteam";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
?>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="thumbnail">
<!-- <img class="" src="img/team3.jpg" alt=""> -->
<!-- <img src="assets/img/<?=$data5['projectpic']?>" class="img-responsive" alt=""> -->
<div class="caption">
   <!--  <h4> 
            Mr. Kapere Charles Konyo  
    </h4> -->

    <p> <?=nl2br($data5['projectname'])?>
    </p>
</div>
</div>
</div>
<?php
}
?>


</div>
</div>

<!-- Our team ends -->




</div>
		
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