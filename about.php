<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);

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


<section id="content"   style="margin-top:0px;background-color:#2F409C;background: 0.3s;border: 0.3s;border-radius: 0.3s;box-shadow: 0.3s;padding: 10px;width: 100%;flex-wrap: wrap;
-ms-flex-line-pack: start;
align-content: flex-start;color: var( --e-global-color-text );
font-family: var( --e-global-typography-text-font-family ), Sans-serif;
font-weight: var( --e-global-typography-text-font-weight );font-family:Liberation Serif;color: #FFFFFF;font-size: 16px;">
<div class="container">


<div class="about">

<div class="row"> 
<div class="col-md-12"> 

<!-- ======= About Section ======= -->
<secion id="about" class="about">
<div class="container">

<div class="section-title" >
<p><img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt=""></p>
<p ><h2 style="color: #FCF20C;font-size: 29px;ont-family: var( --e-global-typography-primary-font-family ), Sans-serif;
font-weight: var( --e-global-typography-primary-font-weight );padding: 0;
 margin-bottom: 12px;
line-height: 1;box-sizing: border-box;text-transform: none;
letter-spacing: 0;font-weight: 200px;"><?=$data['heading']?></h2></p>
<p style="color: #FFFFFF;font-size: 16px;" ><?=$data['longdesc']?></p>
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

<div class="row" style="margin-left: 100px;margin-right: 100px;background-color: #FFFFFF;transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding: 10px;width: 90%;position: relative;box-sizing: border-box;
display: flex;">
<div class="col-md-4">
<!-- Vision-->
<div class="block-heading-two">
<h2 style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;"><?=$vision_data['heading']?></h2>
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
<h2 class="panel-title" style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;">
<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
<i class="fa fa-angle-right"></i><?=$mission_data['heading']?>
</a>
</h2>
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
<h2 class="panel-title" style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;">
<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
<!-- objectives -->
<i class="fa fa-angle-right"></i><?=$objectives_data['heading']?>
</a>
</h2>
</div>
<div id="collapseTwo-alt3" class="panel-collapse collapse">
<div class="panel-body">

<p><?=nl2br($objectives_data['longdesc'])?></p>

</div>
</div>
</div>
<div class="panel">
<div class="panel-heading">
<h2 class="panel-title" style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;">
<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
<!-- Core values  -->
<i class="fa fa-angle-right"></i> <?=$corevalues_data['heading']?> 
</a>
</h2>
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
<h2 style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;"><span>Membership requirements</span></h2>
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