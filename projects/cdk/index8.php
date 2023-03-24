<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png">
    <!-- SITE TITLE -->
    <title>CDK &middot; Centralna Dimenzija Kulture</title>
    
    <!-- =========================
     STYLESHEETS   
    ============================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   
    <!-- =========================
     DESKTOP NAVBAR
    ============================== -->
    <div class="container">
           <div class="row">
              <nav class="navbar mobile-none">
          <a class="navbar-brand" href="index.html">
        <img class="logo img-responsive" alt="Logo" src="image/cdk%20logo%20500x500.png">
      </a>
        <p class="navbar-text">Centralna dimenzija kulture <br> <span>Omogucujemo umjetnicima da stvaraju</span></p>
    <a href="index3.html">
        <div class="next-page">
            O projectu cdk.hr
        </div> <!-- end poject-page -->
    </a>
</nav>
           </div> <!-- end row -->
           <div class="row">
              <div class="col-md-12">
              <div class="mobile-none">    
      <ul class="nav navbar-nav custom-navbar">
        <li><a href="index.html">Naslovna</a></li>
        <li><a href="index5.html">O nama</a></li>
        <li><a href="index6.html">Usluge</a></li>
        <li><a href="index7.html">Kontakt</a></li>
      </ul>
          
          </div> <!-- end navigation-collapse -->
          </div> <!-- end col-md-12 -->
           </div> <!-- end row -->
           
    <!-- =========================
     IT SHOWS ONLY MOBILE VIEWPORT 
    ============================== -->       
           <div class="row">
               <div class="col-sm-12">
                  <div class="mobile-navbar">
                   <nav class="navbar">
          <a class="navbar-brand" href="index.html">
        <img class="logo img-responsive" alt="Logo" src="image/cdk%20logo%20500x500.png">
      </a>
        
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Naslovna</a></li>
        <li><a href="index5.html">O nama</a></li>
        <li><a href="index6.html">Usluge</a></li>
        <li><a href="index7.html">Kontakt</a></li>
        <li><a href="index3.html">O projektu</a></li>
        <li><a href="index9.html">Karijera</a></li>
        <li><a href="index10.html">F.A.Q.</a></li>
        <li><a href="index11.html">Newsletter</a></li>
        <li><a href="">Impresum</a></li>
      </ul>
            </div> <!-- end navbar-collapse -->
              </nav>
              </div> <!-- end mobile-navbar -->
              <div class="curent-page-location mobile-none">
              <a href="index.html">CDK</a> > <a href="index7.html"> Kontakt </a> > Upit
          </div> <!-- end current-page-location -->
               </div> <!-- end col-sm-12 -->
           </div> <!-- end row -->
           
        <section>
            <div class="contents">
                <div class="row">
                   <div class="col-md-12">
                    <div class="section-title">
                        <p>Upit</p>
                    </div> <!-- end section-title -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="upit-form">
                            <form action="contact.php" method="post">
                                <p><input type="text" name="user_name" placeholder="Ime i prezime*" required /></p>
            <p><input type="email" name="user_email" placeholder="E-mail za kontakt*" required/></p>
            <p><input type="text" name="user_tel" placeholder="Tel"/></p>
            <p><input type="text" name="user_address" placeholder="Naslov*" required/></p>
                           <br>
                           <p><input class="question-box" type="text" name="user_question" placeholder="Pitanje*" required /></p>
                           <p><img src="<?php echo $_SESSION['captcha']['image_src']; ?>" alt="captcha" /></p>
                           <p><input type="text" name="captcha" placeholder="Captcha*" required/></p>
                           <input type="submit" class="btn form-button contact-button" value="Pošalji" />
                            </form>
                        </div>
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
            </div> <!-- end content -->
        </section>
    </div> <!-- end container -->
    
    
    
    
    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="other-pages mobile-none">
                        <ul>
                            <li><a href="index9.html">Karijera</a></li>
                            <li><a href="index10.html">F.A.Q.</a></li>
                            <li><a href="index11.html">Newsletter</a></li>
                            <li><a href="">Impresum</a></li>
                        </ul>
                    </div> <!-- end other-pages -->
                    <a href="index3.html">
        <div class="project-page show-mobile">
            O projectu cdk.hr
        </div> <!-- end poject-page -->
    </a>
                    <div class="social-links">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- end social-links -->
                    <div class="copyright">
                        <p>&copy; 2015 CDK d.o.o</p>
                    </div> <!-- end copyright -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end container-fluid -->
    </footer>
    <!-- =========================
     SCRIPTS   
    ============================== -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>