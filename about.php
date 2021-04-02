<?php 
session_start();

?>
<html>

<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss/mycss.css">
    

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- Nav bar and footer css -->
    <link rel="stylesheet" href="mycss/styles_footer.css">
    <link rel="stylesheet" href="mycss/styles_navbar.css">

    <!-- Navbar and  footer boostrap js -->
    <script src="pages/navbar.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    

    <style>
   
    </style>



</head>

<body>

    <!-- <div class="container-fluid" id="navdiv">

        <div class="row">

            <div class="col-sm-2" id="logo" style="">
                <a href=""> <span id="thelogo">E-</span> <span id="junglelogo">matatu</span></a>
            </div>
            <div class="col-sm-3" id="centernav">

                <a href=""></a>
            </div>
            <div class="col-sm-3" id="rightnav">


            </div>

             <div class="col-sm-3" id="rightnav">
                <a href="../../index.php">Home</a>

            </div>

             <div class="col-sm-3" id="rightnav">
                <a href="../../index.php">Home</a>

            </div>

             <div class="col-sm-3" id="rightnav">
                <a href="../../index.php">Home</a>

            </div>
            <div class="col-sm-4" id="" style="padding:10px">
               
                <div class="dropdown" id="mydropdown">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Log In
        <span class="caret"></span></button>
                    <span class="dropdown-menu" id="mydropdown-menu">
          <a href="pages/agentpages/home.php">Agent Dashboard</a>
         <a href="pages/stakeholderpages/stakeholderhome.php">Stakeholder dashboard</a>
          <a href="pages/employeepages/all-matatu.php">Sacco Employee Dashboard</a>
          <a href="pages/adminpages/index.php">Admin dashboard</a>
          <span class="divider" style="background:#ccc;border:1px solid #ccc;width:100%;"></span>
          
        </span>
                </div>


            </div>


        </div>
    </div>
 -->

 <header class="header">
            <!-- <a href="#" class="header__logo">Clay</a>
 -->
            <div class="col-sm-2" id="logo" style="">
                <a href=""> <span id="thelogo">E-</span> <span id="junglelogo">Sacco</span></a>
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
                                <a href="about.php" class="nav__link dropdown__link">About <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                  <!--   <li class="dropdown__item"><a href="#" class="nav__link">About me</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Location</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Studies</a></li> -->
                                </ul>
                            </li>
    
                            <li class="nav__item"><a href="contact.php" class="nav__link">Contact</a></li>

                             <li class="nav__item"><a href="prodservices.php" class="nav__link">Product & Services</a></li>

                              

                            <li class="nav__item dropdown">
                                <a href="careers.php" class="nav__link dropdown__link">Careers <i class='bx bx-chevron-down dropdown__icon'></i></a>
                                    
    
                                <ul class="dropdown__menu">
                                   <!--  <li class="dropdown__item"><a href="#" class="nav__link">Recent jobs</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Better jobs</a></li>
                                    <li class="dropdown__item"><a href="#" class="nav__link">Work Awards</a></li> -->
                                </ul>
                            </li>

                            <!-- <li class="nav__item"><a href="#" class="nav__link">Contact</a></li> -->

                             <div class="col-sm-4" id="" style="padding:10px">
               
                              <div class="dropdown" id="mydropdown">
                                  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Log In
                      <span class="caret"></span></button>
                                  <span class="dropdown-menu" id="mydropdown-menu">
                        <a href="pages/agentpages/home.php">Agent Dashboard</a>
                       <a href="pages/stakeholderpages/stakeholderhome.php">Stakeholder dashboard</a>
                        <a href="pages/employeepages/all-matatu.php">Sacco Employee Dashboard</a>
                        <a href="pages/adminpages/index.php">Admin dashboard</a>
                        <span class="divider" style="background:#ccc;border:1px solid #ccc;width:100%;"></span>
                        
                      </span>
                              </div>


                        </ul>
                    </div>
                </div>
            </nav>
        </header>


    <div class="container-fluid">

        <div class="row" style="padding:10px;">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style="margin: 150px 0px;padding:0px;border-radius:10px;background:white;min-height:300px">
                <div class="col-sm-12" style="padding:0">
                   <div style="background:#f1f1f1;padding:10px;text-align:center">
                        <h1>About Us</h1>
                   </div>
                   <style type="text/css">
                     article#main-col{
                      float:left;
                      width:100%;
                      font-size:20px;
                    }
                    </style>
                   <div class="col-sm-15"> 
                   <div style="text-align:center">    <article id="main-col">
    <h1 class='page-title' > </h1>
    <h2>Who We Are</h2>
    <p>Our  (Sacco)  is a fully registered work based Society whose mem­bership is composed of ONLY members of staff working for our  Office. It was registered with the Registrar of Co-operatives in 2021 under Reg.No.699633 . This institution is fully owned, controlled and used by fully paid up members. Membership is open and voluntary to all President’s Office staff.
  </p>
  <h2>Vision</h2>
   <p class='dark'>
   To offer quality and timely financial services to its eligible members
   </p>

    <h2>Mission</h2>
   <p class='dark'>
  To provide efficient, reliable and affordable savings and credit services to members country-wide
   </p>

    <h2>Aims and objectives</h2>
   <p class='dark'>
   To promote welfare of SACCO members

To- encourage a savings culture amongst its members

To offer affordable and relevant financial services to members

To promote a positive attitude of development amongst members

To foster a spirit of unity amongst co-operators
   </p>


    <h2>Our Identity</h2>
   <p class='dark'>
  Name:  (Sacco) Ltd

Registration No.: 69962344/RCS

Offices: Plot 4B  KD South Sudan
   </p>


    <h2>Core Values</h2>
   <p class='dark'>


Integrity

Sustainability

Professionalism

Customer care

Reliability

Timeliness

   </p>

    <h2>Membership requirements</h2>
   <p class='dark'>
  Must be an employee of Presidents Office

Membership fee  $3

Minimum shares(04) worth $25

Minimum monthly savings $8

Three passport photos

   </p>


  <h2>Slogan:</h2>
   <p class='dark'>
   'Secure your future through voluntary savings'

   </p>



 </article></div>
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
                    
                 

                </div>
             

            </div>
            <div class="col-sm-2"></div>
        </div>


<?php require("footer.php"); ?>


    </div>
</body>


</html>     