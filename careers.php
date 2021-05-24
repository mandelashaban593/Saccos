<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free Bootstrap website | webthemez</title>
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

<!-- end header -->
<section id="inner-headline">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="pageTitle">Home | Portfolio</h2>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container">
<div class="row">
<div class="col-lg-12">
<ul class="portfolio-categ filter">


<li class="all active"><a href="#">All</a></li>
<li class="web"><a href="#" title=""><!-- Web design --></a></li>
<li class="icon"><a href="#" title=""><!-- Mobile App --></a></li>
<li class="graphic"><a href="#" title=""><!-- UI design --></a></li>
</ul>
<div class="clearfix">
</div>
<div class="row">
<section id="projects" style="margin-left: 350px;">
<div class="col-sm-6">


<ul>
<li>
<h5>Professional Growth</h5>
Substantial responsibilities at an early stage of the career
</li>
<li>
Exposure to all aspects of delivery lifecycle and project management
</li>
<li>
Continuous learning
</li>

</ul>



<ul>
<h5>Type of work</h5>
<li>
Exciting and challenging work
</li>
<li>
Exposure to the latest and variety of technologies
</li>

</ul>



<ul>
<h5>Company culture</h5>
<li>
Transparency, lack of bureaucracy
</li>
<li>
Ownership and accountability
</li>
<li>
Autonomy (with seniority)
</li>
<li>
Peers with strong technical background
</li>
<li>
Supportive managers with technical know-how
</li>
<li>
There is never a dull moment (fast-paced work)
</li>

</ul>

</div></div>
</div>

<div class="col-sm-6" style="padding:10px;">
<?php 





if(isset($_SESSION['email'])){
echo '<div class="" style="background:#f0f4c3;padding:10px;border-radius:4px;border-left:5px solid red;margin:30px 0px;max-width:400px">

'.$_SESSION["email"].'

<span class="pull-right">
<a href="pages/agentpages/home.php">Agent Home</a>
</span>
</div>';


}
if(isset($_SESSION['email_stakeholder'])){
echo '<div class="" style="background:#f0f4c3;padding:10px;border-radius:4px;border-left:5px solid red;margin:30px 0px;max-width:400px">

'.$_SESSION["email_stakeholder"].'

<span class="pull-right">
<a href="pages/stakeholderpages/stakeholderhome.php">Stakeholder Home</a>
</span>
</div>';


}

if(isset($_SESSION['email_employee'])){
echo '<div class="" style="background:#f0f4c3;padding:10px;border-radius:4px;border-left:5px solid red;margin:30px 0px;max-width:400px">

'.$_SESSION["email_employee"].'

<span class="pull-right">
<a href="pages/employeepages/">Sacco Employee Home</a>
</span>
</div>';


}



?> 
</div>
</section>
</div>
</div>
</div>
</div>
</section>
<footer>
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="widget">
<h5 class="widgetheading">Our Contact</h5>
<address>
<strong>Target company Inc</strong><br>
JC Main Road, Near Silnile tower<br>
Pin-21542 NewYork US.</address>
<p>
<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
<i class="icon-envelope-alt"></i> email@domainname.com
</p>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<h5 class="widgetheading">Quick Links</h5>
<ul class="link-list">
<li><a href="#">Latest Events</a></li>
<li><a href="#">Terms and conditions</a></li>
<li><a href="#">Privacy policy</a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<h5 class="widgetheading">Latest posts</h5>
<ul class="link-list">
<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<h5 class="widgetheading">Recent News</h5>
<ul class="link-list">
<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
</ul>
</div>
</div>
</div>
</div>
<div id="sub-footer">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="copyright">
<p>
<span>&copy; Site name 2015 All right reserved. Template by </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
</p>
</div>
</div>
<div class="col-lg-6">
<ul class="social-network">
<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<?php require("javascripts.php"); ?>


</body>
</html>