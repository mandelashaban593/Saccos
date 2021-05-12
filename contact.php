<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SACCO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
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
	<?php require("nav.php"); ?><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Home | Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
		<div class="col-md-12">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
	</div>
<div class="row">
<div class="col-md-6">
<h4>Contact US .</h4>
<div class="alert alert-success hidden" id="contactSuccess">
<strong>Success!</strong> Your message has been sent to us.
</div>
<div class="alert alert-error hidden" id="contactError">
<strong>Error!</strong> There was an error sending your message.
</div>
<div class="contact-form">
<form id="contact-form" role="form" novalidate="novalidate">
<div class="form-group has-feedback">
<label for="name">Name*</label>
<input type="text" class="form-control" id="name" name="name" placeholder="">
<i class="fa fa-user form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
<label for="email">Email*</label>
<input type="email" class="form-control" id="email" name="email" placeholder="">
<i class="fa fa-envelope form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
<label for="subject">Subject*</label>
<input type="text" class="form-control" id="subject" name="subject" placeholder="">
<i class="fa fa-navicon form-control-feedback"></i>
</div>
<div class="form-group has-feedback">
<label for="message">Message*</label>
<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
<i class="fa fa-pencil form-control-feedback"></i>
</div>
<input type="submit" value="Submit" class="btn btn-default">
</form>
</div>
</div>
<div class="col-md-6">  
<h3>Rural-Urban SACCO ltd has three branches as below;</h43>
 <h4>   a Juba branch </h4>
<p>Located in Munuki Suk Libya on the way to Munuki police station.<br/>
Tel 0922468629/0925789680/0921300516</p>
   <h4>   b Yei branch </h4>
<p>Located along Maridi road, next to Nyardene swamp before Yei day s.s road.<br/>
Tel 0921700760/0924837560</p>
 <h4>   c Kajo-keji branch </h4>
<p>Located in Mere to<br/>wn on Juba high way
Tel 0929354521<br/>
Email contact: Email.mansuktimon@gmail.com 
</p>
<br/>
<p><b></b></p>
<br/>

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