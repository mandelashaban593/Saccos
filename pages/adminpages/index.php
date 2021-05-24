<?php
session_start();
require("../database/db.php");


// $admin_session=$_SESSION["email_employee"];

$msg='';



?>


<?php
if(isset($_POST['adminLoginBtn'])){
  
    
   $email=$_POST['email'];
   $password=$_POST['password'];
   $pass=$password;
   echo $email;
   
 
   //check if user exists in our databse
   $check_user="SELECT * FROM `superuser` where email='$email'  AND password='$pass'";
   $check_user_query=mysqli_query($con,$check_user);
   
   if(mysqli_num_rows($check_user_query)){
  
       
   
    $_SESSION["email_admin"]=$email;
          echo '
Redirecting to home page, Please wait...
';
echo "<script>window.open('home.php','_self')</script>";
       
       
       
    
   }
   
   else{
       
            
    
       $msg= '
 <div class="alert alert-danger">
 <strong>Message!</strong> Email '.$email.' and password do not match
 </div>
';
   }
}







?>
<html>

<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mycss/mycss.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

     <!-- Nav bar and footer css -->
    <link rel="stylesheet" href="mycss/styles_footer.css">
    <link rel="stylesheet" href="mycss/styles_navbar.css">

    <!-- Navbar and  footer boostrap js -->
    <script src="js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>




</head>

<body id="body" onload="start()">
   <!--  <div class="container-fluid" id="my-modal-div">
        <div class="row" style="padding:20px">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" id="my-modal">





            </div>
            <div class="col-sm-4"></div>

        </div>

    </div> -->

 

    <<!-- div class="container-fluid" id="navdiv">

        <div class="row">

            <div class="col-sm-2" id="logo">
                <a href="../../index.php"> <span id="thelogo">E-</span> <span id="junglelogo">matatu</span></a>
            </div>
          
         


        </div>
    </div>
 -->

 <header class="header">
            <!-- <a href="#" class="header__logo">Clay</a>
 -->
            <div class="col-sm-2" id="logo" style="">
                <a href=""> <span id="thelogo">E-</span> <span id="junglelogo">matatu</span></a>
            </div>



            <i class='bx bx-menu header__toggle' id="header-toggle"></i>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">
                    <a href="" class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/img/perfil.jpg" alt="">
                        </div>
                        
                        <div>
                            
                        </div>
                    </a>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="../../index.php" class="nav__link active">Home</a></li>
  
                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">About <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="#" class="nav__link">About me</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Location</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Studies</a></li>
                                </ul>
                            </li>
    
                            <li class="nav__item"><a href="#" class="nav__link">Skills</a></li>

                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Works <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="#" class="nav__link">Recent jobs</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Better jobs</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Work Awards</a></li>
                                </ul>
                            </li>

                            <!-- <li class="nav__item"><a href="#" class="nav__link">Contact</a></li> -->

                             <div class="col-sm-4" id="" style="padding:10px">
               
                              <div class="dropdown" id="mydropdown">
                                  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Log In
                      <span class="caret"></span></button>
                                  <span class="dropdown-menu" id="mydropdown-menu">
                        <a href="../agentpages/home.php">Agent Dashboard</a>
                       <a href="../stakeholderpages/stakeholderhome.php">Stakeholder dashboard</a>
                        <a href="../employeepages/all-matatu.php">Sacco Employee Dashboard</a>
                        <a href="../adminpages/index.php">Admin dashboard</a>
                        <span class="divider" style="background:#ccc;border:1px solid #ccc;width:100%;"></span>
                        
                      </span>
                              </div>


                        </ul>
                    </div>
                </div>
            </nav>
        </header>




    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="margin:100px 0px;background:white">
    <h2 class="text-center"></h2>

    <?php
    echo $msg;
    ?>
    <div class="panel panel-danger">
    <div class="panel-heading">
    Admin Login
    </div>

    <div class="panel-body">

     <form action="" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default" name="adminLoginBtn">Submit</button>
</form> 
    </div>
    </div>
    </div>
    <div class="col-sm-2"></div>
    
    </div>


    
  <?php require("../../footer.php"); ?>


    </div>










    <script src="../../assets/jquery-3.2.1.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>
    <script src="../js/jquery2.1.min.js"></script>

    <script>
        function start() {
            //
            startloading();
          setTimeout(function(){
           displaypayments();

        },0);
        }
    </script>

</body>

</html>


<?php
