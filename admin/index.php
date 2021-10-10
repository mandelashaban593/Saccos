<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM personal_setup,aboutus_setup,basic_setup,admin_users";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>


    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
        .oo{
            height: 200px;
        }
        
        .ooo{
            height: 100px;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Hye, <?=$_SESSION['username']?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="php/logout.php">Logout</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup/Edit</span>
          
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="../admin/">
              <span data-feather="home"></span>
            Home
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="?editseo=true">
              <span data-feather="at-sign"></span>
              Edit SEO
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?edithome=true">
              <span data-feather="home"></span>
              Edit Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editabout=true">
              <span data-feather="info"></span>
              Edit About
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?editvision=true">
              <span data-feather="info"></span>
              Edit Vision
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editmission=true">
              <span data-feather="info"></span>
              Edit Mission
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?editobjectives=true">
              <span data-feather="info"></span>
              Edit Objectives
            </a>
          </li>

<li class="nav-item">
            <a class="nav-link" href="?editcorevalues=true">
              <span data-feather="info"></span>
              Edit Core Values
            </a>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="?editgovernance=true">
              <span data-feather="info"></span>
              Edit Governance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editindrecogn=true">
              <span data-feather="info"></span>
              Edit Industry recognition
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editcontacts=true">
              <span data-feather="info"></span>
              Edit Contacts
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?editproductservices=true">
              <span data-feather="info"></span>
              Edit Product and Services
            </a>
          </li>



        <li class="nav-item">
        <a class="nav-link" href="?editboardmemb=true">
          <span data-feather="info"></span>
          Edit board members
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="?editsupercomm=true">
          <span data-feather="info"></span>
          Edit Supervisory Committee
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?editmanagement=true">
          <span data-feather="info"></span>
          Edit management
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="?editmembership=true">
          <span data-feather="info"></span>
          Edit membership
        </a>
      </li>


      

      <li class="nav-item">
      <a class="nav-link" href="?editbranches=true">
          <span data-feather="info"></span>
          Edit branches

        </a>
      </li>

       <li class="nav-item">
      <a class="nav-link" href="?editsavings=true">
          <span data-feather="info"></span>
          Edit savings

        </a>
      </li>

  <li class="nav-item">
      <a class="nav-link" href="?editbanking=true">
          <span data-feather="info"></span>
          Edit banking

        </a>
      </li>
<li class="nav-item">
      <a class="nav-link" href="?editcredit=true">
          <span data-feather="info"></span>
          Edit credit

        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="?editdocument=true">
          <span data-feather="info"></span>
          Edit document

        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="?edittenders=true">
          <span data-feather="info"></span>
          Edit tenders

        </a>
      </li>





          <li class="nav-item">
            <a class="nav-link" href="?editresume=true">
              <span data-feather="briefcase"></span>
              Edit Resume
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?editportfolio=true">
              <span data-feather="archive"></span>
              Edit Portfolio
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Account Settings</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="?editprofile=true">
              <span data-feather="user"></span>
              Edit Profile
            </a>


          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

<?php
     if(isset($_GET['edithome'])){ 
     include('php/home.php'); //home
     }else if(isset($_GET['editabout'])){
         include('php/about.php');      
     }else if(isset($_GET['editvision'])){
         include('php/vision.php');      
     }else if(isset($_GET['editmission'])){
         include('php/mission.php');      
     }else if(isset($_GET['editobjectives'])){
         include('php/objectives.php');      
     }else if(isset($_GET['editcorevalues'])){
         include('php/corevalues.php');      
     }else if(isset($_GET['editgovernance'])){
         include('php/governance.php');      
     }else if(isset($_GET['editindrecogn'])){
         include('php/indrecogn.php');      
     }else if(isset($_GET['editcontacts'])){
         include('php/contacts.php');      
     }else if(isset($_GET['editproductservices'])){
         include('php/productservices.php');      
     }else if(isset($_GET['editourteam'])){
         include('php/ourteam.php');      
     }else if(isset($_GET['editresume'])){
       include('php/resume.php');
     }else if(isset($_GET['editportfolio'])){
      include('php/portfolio.php');
     }else if(isset($_GET['editbranches'])){
      include('php/branches.php');
     }else if(isset($_GET['editboardmemb'])){
      include('php/boardmemb.php');
     }else if(isset($_GET['editsupercomm'])){
      include('php/supercomm.php');
     }else if(isset($_GET['editmanagement'])){
      include('php/management.php');
     }else if(isset($_GET['editmembership'])){
      include('php/membership.php');
     }else if(isset($_GET['editsavings'])){
      include('php/savings.php');
     }else if(isset($_GET['editbanking'])){
      include('php/banking.php');
     }else if(isset($_GET['editcredit'])){
      include('php/credit.php');
     }else if(isset($_GET['editdocument'])){
      include('php/document.php');
     }else if(isset($_GET['edittenders'])){
      include('php/tenders.php');
     }else if(isset($_GET['editseo'])){
         include('php/seo.php');
    
     }else if(isset($_GET['editprofile'])){ ?>
        <h2>Edit Profile</h2>


    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
 } 
?> 
         <form method="post" action="php/uourteam.php">
         <div class="form-row">
             <div class="form-group col-md-6">
    <label for="ptitle">Name</label>
    <input type="text" name="username" value="<?=$data['username']?>" class="form-control" id="ptitle" placeholder="Monu Giri">
  </div>
        <div class="form-group col-md-6">
    <label for="psubtitle">Password</label>
    <input type="text" name="userpass" value="<?=$data['user_pass']?>" class="form-control" id="psubtitle" placeholder="*************">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Email Id</label>
    <input type="text" name="userid" value="<?=$data['user_id']?>" class="form-control" id="psubtitle" placeholder="admin@admin.com">
  </div>
         </div>
         <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
         </form>
    <?php }else{
         include('php/welcome.php');
     } ?>
     
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script></body>
          <!-- Text Editor Script -->
<script>
CKEDITOR.replace('arContent');
</script>

<script>
CKEDITOR.replace('arContent2');
</script>



</html>
