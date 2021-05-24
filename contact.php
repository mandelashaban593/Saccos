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
$query="SELECT * FROM contacts_setup";
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
<form action="include/message.php" method="post" role="form" class="php-email-form">
<div class="form-row">
<div class="form-group col-md-6">
<label for="name">Your Name</label>
<input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
<div class="validate"></div>
</div>
<div class="form-group col-md-6">
<label for="name">Your Email</label>
<input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
<div class="validate"></div>
</div>
</div>
<div class="form-group">
<label for="name">Subject</label>
<input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
<div class="validate"></div>
</div>
<div class="form-group">
<label for="name">Message</label>
<textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
<div class="validate"></div>
</div>
<div class="mb-3">
<div class="loading">Loading</div>
<div class="bg-success error-message"></div>
<div class="sent-message"></div>
</div>
<div class="text-center"><button type="submit">Send Message</button></div>
</form>
</div>
</div>
<div class="col-md-6">  
<h3><?=$data['heading'];?></h43>
 <h4>   </h4>
<p><?=nl2br($data['longdesc']);?></p>
   
<br/></p>
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