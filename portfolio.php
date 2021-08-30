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
<title>SACCO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<!-- css -->
<?php require("style.php"); ?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">

<!-- start header -->
<?php require("nav.php"); ?><!-- end header -->

<section id="content">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="clearfix">
</div>
<div class="row">

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
<div class="container">

<div class="section-title">
<h2  style="color: #2F409C;font-family:Liberation Serif;padding: 0;
margin: 1;line-height: 1;box-sizing: border-box;font-size: 2.75em;text-transform: none;letter-spacing: 0;">Portfolio</h2>
</div>


<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

<?php
$query5 = "select * FROM portfolio";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
?>
<div class="col-lg-4 col-md-6 portfolio-item">
<div class="portfolio-wrap">
<img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
<div class="portfolio-links" title="<?=$data5['projectname']?>">

<a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
<a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
</div>
</div>
</div>
<?php
}
?>





</div>

</div>
</section><!-- End Portfolio Section -->


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


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
if (window.self == window.top) {
(function(i, s, o, g, r, a, m) {
i['GoogleAnalyticsObject'] = r;
i[r] = i[r] || function() {
(i[r].q = i[r].q || []).push(arguments)
}, i[r].l = 1 * new Date();
a = s.createElement(o), m = s.getElementsByTagName(o)[0];
a.async = 1;
a.src = g;
m.parentNode.insertBefore(a, m)
})(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-55234356-4', 'auto');
ga('send', 'pageview');
}

</script>

</body>
</html>