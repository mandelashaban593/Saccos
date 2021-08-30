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

<style type="text/css">
    input{
        text-align: left;
color: rgba(233, 28, 33, 0.42);
background-color: #ffffff;
border-width: 0px 0px 0px 0px;
border-radius: 0px 0px 0px 0px;
display: inline-block;
font-size: 14px;
padding: 7px 12px;
background-color: transparent;
color: #333;
border: 1px solid #ddd;

    }
</style>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<?php require("nav.php"); ?><!-- end header -->
	
    <h2 style="color: #FCF20C;
font-family: 'Georgia', Sans-serif;
font-size: 24px;
font-weight: bold;margin-left: 1300px;
letter-spacing: 1px;padding: 30px;margin: 10px;
line-height: 1;">  Our Branch Network </h2>

	<section id="content"  style="background-color:#2F409C;margin-bottom: 20px;box-sizing: border-box;padding: 0;color: #FFFFFF;font-family: var( --e-global-typography-text-font-family ), Sans-serif;
font-weight: var( --e-global-typography-text-font-weight );">
	
	<div class="container">
	<div class="row">
	
<div class="row" >

<div class="col-md-6">  

<!-- <h3 style="color: #FCF20C"><?=$data['heading'];?></h4> -->
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