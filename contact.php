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
	
	<section id="content"  style="background-color:#2F409C;margin-bottom: 20px;box-sizing: border-box;padding: 0;color: #FFFFFF;font-family: var( --e-global-typography-text-font-family ), Sans-serif;
font-weight: var( --e-global-typography-text-font-weight );">
	
	<div class="container">
	<div class="row">
	
<div class="row" >
<div class="col-md-6">
<h5 style="color: #FCF20C;
font-family: 'Georgia', Sans-serif;
font-size: 24px;
font-weight: bold;
letter-spacing: 1px;padding: 30px;margin: 10px;
line-height: 1;">Contact US </h5>
<div class="alert alert-success hidden" id="contactSuccess">
<strong>Success!</strong> Your message has been sent to us.
</div>
<div class="alert alert-error hidden" id="contactError">
<strong>Error!</strong> There was an error sending your message.
</div>
<div class="contact-form" style="position: relative;
width: 100%;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
-ms-flex-line-pack: start;
align-content: flex-start;padding-right: calc( 8px/2 );
padding-left: calc( 8px/2 );
margin-bottom: 0px;position: relative;min-height: 1px;box-sizing: border-box;border: none;
margin: 0;background-color:#2F409C;
display: flex;">
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
<div class="text-center"><button type="submit" style="font-size: .8em;
font-weight: 600;
padding: 8px 12px;
transition: all .15s ease-in-out;
text-align: center;
vertical-align: middle;
border: 1px solid transparent;
border-radius: 3px;
text-transform: uppercase;
cursor: pointer;
line-height: normal
    ;
    font-family: inherit;
background-color: #E91C21;">Send Message</button></div>
</form>
</div>
</div>
<div class="col-md-6">  
<h3 style="color: #FCF20C"><?=$data['heading'];?></h43>
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