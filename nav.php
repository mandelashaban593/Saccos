
 <!-- Navbar linkhttps://github.com/bootstrapthemesco/bootstrap-4-multi-dropdown-navbar
 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="css/bootstrap-4-navbar.css" rel="stylesheet">
<style>
body {
padding-top: 0px;
font-size: 16px;
position: relative;
}

html body {
    margin: 0;
    padding: 0;
}


.navbar {
margin:  40px 0;
}
.nav-link{
  color: ;
}


.navbar-light .navbar-nav .nav-link{
    color: #fff;
    background-color: #2F409C;
     font-size: 16px;
}

.navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: #2F409C;
     text-decoration: underline;
     font-size: 16px;
}



.dropdown-menu>li>a:hover {
   background-color:  #00215e;
   text-decoration: underline;
   font-size: 16px;
}




.dropdown-menu{
  background-color: #00215e;
  font-size: 16px;
}
.dropdown-menu>li>a{
  background-color: #00215e;
  color: #fff;
  font-size: 16px;
}


</style><!-- Static navbar -->


<nav class="navbar navbar-expand-md navbar-light bg-ligt" style="color:#FFFFFF;
background-color: #2F409C;  ">

<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav" style="margin-left: 100px;">
  <img class="navbar-brand"  src="img/LogoSacc.jpg" alt="logo" style="width:6%;margin-right: 10px;height: 50px;box-sizing: border-box;" />

<li class="nav-item active">
<a class="nav-link" href="index.php" style="color: #fff;">Home <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="about.php">
About Us
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="branches.php">Branches</a></li>
<li><a class="dropdown-item dropdown-toggle" href="#">Teams</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="boardmemb.php">Board Members</a></li>
<li><a class="dropdown-item" href="supercomm.php">Supervisory Committe</a></li>
<li><a class="dropdown-item" href="management.php">Management</a></li>


<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li> -->

<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li> -->
</ul>
</li>

<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Submenu action 2</a></li>
<li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
</ul>
</li>
</ul>
</li> -->

</ul>
</li>



<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="about.php">
Products & Services
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="membership.php">Membership</a></li>
<li><a class="dropdown-item"  href="savings.php">Savings Products</li>
<li><a class="dropdown-item " href="banking.php">Banking Products</a></li>
<li><a class="dropdown-item " href="credit.php">Credit Products</a></li>

<!-- <ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Board Members</a></li>
<li><a class="dropdown-item" href="#">Supervisory Committe</a></li>
<li><a class="dropdown-item" href="#">Management</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
</ul> -->


<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Submenu action 2</a></li>
<li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
</ul>
</li>
</ul>
</li> -->

</ul>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="about.php">
Downloads
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item"href="document.php">Documents</a></li>
<li><a class="dropdown-item"  href="tenders.php">Tenders</a></li>


<!-- <ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Board Members</a></li>
<li><a class="dropdown-item" href="#">Supervisory Committe</a></li>
<li><a class="dropdown-item" href="#">Management</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
</ul> -->

</li>

<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Submenu action 2</a></li>
<li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
</ul>
</li>
</ul>
</li> -->

</ul>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="about.php">
Recognitions
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="governance.php">Governance</a></li>
<li><a class="dropdown-item" href="indrecogn.php">Industry recognition</a></li>


<!-- <ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Board Members</a></li>
<li><a class="dropdown-item" href="#">Supervisory Committe</a></li>
<li><a class="dropdown-item" href="#">Management</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
</ul>
</li>
</ul> -->

</li>

<!-- <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Submenu action 2</a></li>
<li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


<li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
</ul>
</li>
<li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
<li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
</ul>
</li>
</ul>
</li> -->

</ul>
</li>



<li class="nav-item" style="color:#FFFFFF;top: 0px;
background-color: #2F409C;">
<a class="nav-link" href="contact.php">Contact Us</a>
</li>
<li class="nav-item" style="color:#FFFFFF;top: 0px;
background-color: #2F409C;">
<a class="nav-link" href="admin/index.php">Login</a></a>
</li>


</ul>
</div>
</nav>
