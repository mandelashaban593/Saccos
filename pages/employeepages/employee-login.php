<?php
require('../database/db.php');
require('../custom-date/custom-date.php');



?>
<!DOCTYPE html>


<html>

<head>
    <title>S-E login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mycss/mycss.css">
    <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <a href="../custom-date/custom-date.php"></a>


 <!-- Nav bar and footer css -->
    <link rel="stylesheet" href="mycss/styles_footer.css">
    <link rel="stylesheet" href="mycss/styles_navbar.css">

    <!-- Navbar and  footer boostrap js -->
    <script src="js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


</head>

<body id="body">

  

<!-- 
    <div class="container-fluid" id="navdiv">

        <div class="row">

            <div class="col-sm-2" id="logo">
                <a href="../../index.php"> <span id="thelogo">E-</span> <span id="junglelogo">matatu</span></a>
            </div>
            <div class="col-sm-3" id="centernav">
                <span id="menubar" onclick="triggersidemenu()"><i class="glyphicon glyphicon-list"></i> MENU</span>
                <a href=""></a>
            </div>
            <div class="col-sm-3" id="rightnav">
                <a href="../../index.php">Home</a>

            </div>
            <div class="col-sm-4" id="login-signup">
              
                <a href="employee-logout.php"><button class="btn btn-danger" id="">Log Out</button></a>
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

        <div class="row" id="sacco-employee">

            <div class="col-sm-4" id="login-password-form">
                <h4> <button class="btn btn-danger btn-xs" id="back-employee-login" onclick="back_employee_login()"> Back</button> Sacco Employee Log in</h4>
                <hr>
                <form action="">
                    <label for=""><span id="email-span-msg"></span></label>
                    <div class="form-group" style="">
                        <input type="password" placeholder="Password" class="form-control" id="password">
                        <p id="loginmsg"></p>
                    </div>


                    <button class="btn btn-success" id="login-btn-employee"> Login</button> <img src="../img/loading.gif" alt="" id="loading">
                </form>
            </div>
            <div class="col-sm-4" id="login-email-form">
                <h4>Sacco Employee Log in</h4>
                <hr>
                <form action="">
                    <label for="">Email</label>
                    <div class="form-group" style="">
                        <input type="email" placeholder="Johndoe@gmail.com" class="form-control" id="email">
                        <p id="email-error-msg"></p>
                    </div>
                    <button class="btn btn-default" id="next-btn-employee-login"> Next</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>

        
    </div>


  <?php require("../../footer.php"); ?>




    <script src="../../assets/jquery-3.2.1.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

    <script src="../js/main.js"></script>
    <script src="../js/jquery2.1.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>