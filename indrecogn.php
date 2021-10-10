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
<div class="col-md-12"> 
		<h3> <span class="color"></span></h3>
		<p>
			<h2 style="color: #FCF20C;font-size: 29px;ont-family: var( --e-global-typography-primary-font-family ), Sans-serif;
font-weight: var( --e-global-typography-primary-font-weight );padding: 0;
 margin-bottom: 12px;
line-height: 1;box-sizing: border-box;text-transform: none;
letter-spacing: 0;font-weight: 200px;"> <?=$data['heading'];?></h2>
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>

<!-- javascript link file name  -->
<script src="js/bootstrap-4-navbar.js"></script>
</body>
</html>