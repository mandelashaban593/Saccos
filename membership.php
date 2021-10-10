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


<section id="content" style="margin-top:0px;background-color:#2F409C;background: 0.3s;border: 0.3s;border-radius: 0.3s;box-shadow: 0.3s;padding: 10px;width: 100%;flex-wrap: wrap;
-ms-flex-line-pack: start;
align-content: flex-start;color: var( --e-global-color-text );
font-family: var( --e-global-typography-text-font-family ), Sans-serif;
font-weight: var( --e-global-typography-text-font-weight );font-family:Liberation Serif;color: #FFFFFF;font-size: 16px;">
<div class="container">


<div class="about">

<div class="row"> 


  <style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  l
</style>

  <div class="container">
  <img src="img/slides/IMG-20210428-WA0005.jpg" alt="Snow" style="width:100%;height: 300px;">
  
  <div class="centered" style="background-color:#979fc7;font-weight: 600;
font-size: 16px;color: #FFFFFF;border: 0px;font-family: var( --e-global-typography-primary-font-family ), Sans-serif;
font-weight: var( --e-global-typography-primary-font-weight );">
<h2 style="font-size: 2.75em;    color: #FCF20C;">Membership</h2><br/>
Any  South sudan citizen is eligible to join Rural urban development  Sacco regardless of his or her area of residence.
</div>
</div>


<!-- Our Team starts -->

<!-- Heading -->
<div class="block-heading-six" style="margin-left: 200px;margin-right: 100px;">
<h2 class="bg-color" style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 1.75em;text-transform: none;letter-spacing: 0;">Our Team</h2>
</div>

<!-- Our team starts -->


<!-- Our team starts -->

<div class="team-six" style="margin-left: 100px;margin-right: 100px;background-color:#2F409C;color: #FFFFFF;">
<div class="row offs1">
<?php
$query5 = "select * FROM  membership";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
?>
<div class="col-md-6 col-xs-12  col-md-6 ">
<div class="thumbnail">
<!-- <img class="" src="img/team3.jpg" alt=""> -->
<!-- <img src="assets/img/<?=$data5['subheading']?>" class="img-responsive" alt=""> -->
<div class="caption" style="background-color:#2F409C;font-size: 16px;color: #FFFFFF;border: 0px;">
 <h4 style="text-transform: uppercase;color: #FCF20C;"> 
<?=$data5['shortheading']?><br/>
</h4> 

<p style=""> <?=$data5['requiredescription']?>

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