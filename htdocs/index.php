<?php
session_start();
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"/>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <!-- Slider -->
  <link rel="stylesheet" href="css/slider.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/accordion.css" rel="stylesheet">

  <!-- Site-Customizations -->
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/main.css">
  <!--=======================================CONTACT FORM=============================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css/contactutil.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/customer/booking.css">
  <link rel="stylesheet" type="text/css" href="css/customer/filter.css">
  <!--===============================================================================================-->
  <title>S.C. Samuel Exclusive Trans</title>

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar landmessage navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" onclick="location.href='../'"><img src="img/logo_taxi.png" height="35px" style="margin-bottom: 0px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#intro">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#vehicles">Vehicles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ourservices">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutus">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>

        <?php
        if(!isset($_SESSION['username']))
        echo '<ul class="navbar-nav navbar-right" style="margin-right: 180px"><!-- Register Tab-->
            <li class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h3><b>Register</b></h3>
                      </div>
                      <form onsubmit="return validateRegister()" action="register.inc.php" method="post" role="form" autocomplete="off">
                        <div class="form-group form-group-stack">
                          <label for="fullname">Full name</label>
                          <input type="text" name="fullname" id="fullname-r" class="form-control" placeholder="Full name" value="" required>
                        </div>
                        <div class="form-group form-group-stack">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username-r" class="form-control" placeholder="Username" value="" required>
                        </div>
                        <div class="form-group form-group-stack">
                          <label for="email">E-mail</label>
                          <input type="email" name="email" id="email-r" class="form-control" placeholder="Email Address" value="" required>
                        </div>
                        <div class="form-group form-group-stack">
                          <label for="phone">Phone number</label>
                          <input type="text" name="phone" id="phone-r" class="form-control" placeholder="Phone number" value="" required>
                        </div>
                        <div class="form-group form-group-stack">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password-r" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group form-group-stack">
                          <label for="confirm-password">Confirm Password</label>
                          <input type="password" name="confirm-password" id="confirm-password-r" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="formbutton col-xs-7">
                              <input type="checkbox" name="agree-terms" id="agree-terms-r">
                              <label for="remember"> Agree Terms and Conditions</label>
                            </div><br>
                            <div class="formbutton col-xs-6 col-xs-offset-3">
                              <input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-info" value="Register Now">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </ul>
                </li>
                <!-- Login Tab-->
                <li class="nav-item dropdown">
                  <a id="showlogin" href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <h3><b>Log In</b></h3>
                      </div>
                      <form onsubmit="return validateLogin()" action="login.inc.php" method="post" role="form" autocomplete="off">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" id="username-l" name="username" class="form-control" placeholder="Username" value="" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" id="password-l" name="password" class="form-control" placeholder="Password" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="formbutton col-xs-7">

                            </div><br>
                            <div class="formbutton col-xs-5 pull-right">
                              <input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-success" value="Log In">
                            </div>
                          </div>
                        </div>
                      </form>

                      </div>
                  </ul>
                </li>';
        else {
          echo    '<ul class="navbar-nav navbar-right" style="margin-right: 50px"><li class="nav-item">
                    <form onsubmit="" action="logout.inc.php" method="post" id="logout" role="form" autocomplete="off" style="margin-bottom: 0px; padding: 0px 15px">
                    <input type="submit" name="logout-submit" id="logout-submit" class="bossbtn nav-link landmessage" style="margin: 0px; padding: 4px 5px; border: 0px solid rgba(0,0,0,0); border-radius: 10px;" value="Log Out">
                    </form>
                  </li>';
        }

        ?>

      </ul>
    </div>
  </nav>
  <!-- Intro -->

  <div id="intro" class="view container-fluid">
    <div class="full-bg-img container-fluid">
      <div style="height: 6rem"></div>

      <div class="landingblock" style="text-align: center"><img src="img/logo.png" alt="">
        <div style="height: 1rem"></div>
        <hr class="style-two">

  <?php
  if(!isset($_SESSION['username']))
      echo  '<h1 class="landmessage display-3">WELCOME</h1><h3 class="landmessage">To the best passenger transport company</h3>';
  else require 'customer/accountPanel.php';
?>

        <div style="height: 1rem"></div>
        <div style="height: 4rem"></div>
        <?php
            if(!isset($_SESSION['username']))
            {
              echo '<h5 class="landmessage">SIGN UP IN ORDER TO</h5>';
            }
        ?>
        <button id="landbutton" onclick="<?php if(isset($_SESSION['username']))
                                              echo 'location.href=\'../#BookNow\'; document.getElementById(\'linkCollapseOne\').click();';
                                              else echo 'location.href=\'../#vehicles\'';
                                         ?>" class="landmessage btn btn-lg btn-outline-light my-5 my-sm-0">Book Now <i class="fa fa-taxi" aria-hidden="true"></i></button>
        <div style="height: 4rem"></div>
      </div>
    </div>
  </div>
  <!-- Vehicles -->
  <div class="css-slider-wrapper" id="vehicles">
    <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
    <input type="radio" name="slider" class="slide-radio2" id="slider_2">
    <input type="radio" name="slider" class="slide-radio3" id="slider_3">
    <input type="radio" name="slider" class="slide-radio4" id="slider_4">

    <!-- Slider Pagination -->
    <div class="slider-pagination">
      <label for="slider_1" class="page1"></label>
      <label for="slider_2" class="page2"></label>
      <label for="slider_3" class="page3"></label>
      <label for="slider_4" class="page4"></label>
    </div>

    <!-- Slider #1 -->
    <div class="slider slide-1">
      <img src="img/images/model-1.png" alt="">
      <div class="slider-content">
        <h4>Fast car</h4>
        <h3>Best choice if you're in haste</h3>
        <h2>In order to get in time at your destination, more speed is the answer. Our cars are most fit for this job.</h2>
        <button onclick="location.href='../#BookNow'; document.getElementById('linkCollapseOne').click();" id="buynow-1" type="button" class="buy-now-btn" name="button">4 seats</button>

      </div>
      <div class="number-pagination">
        <span>1</span>
      </div>
    </div>

    <!-- Slider #2 -->
    <div class="slider slide-2">
      <img src="img/images/model-2.png" alt="">
      <div class="slider-content">
        <h4>Minibus</h4>
        <h3>Recommended for small groups</h3>
        <h2>Traveling in a minibus will be fun. Get your family, friends or work colleages and travel anywhere.</h2>
        <button onclick="location.href='../#BookNow'; document.getElementById('linkCollapseOne').click();" id="buynow-2" type="button" class="buy-now-btn" name="button">8 seats</button>
      </div>
      <div class="number-pagination">
        <span>2</span>
      </div>
    </div>

    <!-- Slider #3 -->
    <div class="slider slide-3">
      <img src="img/images/model-3.png" alt="">
      <div class="slider-content">
        <h4>Big minibus</h4>
        <h3>Ideal for average groups</h3>
        <h2>Find out the luxury of traveling in one of our new modern minibuses.</h2>
        <button onclick="location.href='../#BookNow'; document.getElementById('linkCollapseOne').click();" id="buynow-3" type="button" class="buy-now-btn" name="button">9-30 seats</button>
      </div>
      <div class="number-pagination">
        <span>3</span>
      </div>
    </div>

    <!-- Slider #4 -->
    <div class="slider slide-4">
      <img src="img/images/model-4.png" alt="">
      <div class="slider-content">
        <h4>Coach</h4>
        <h3>Ideal for large groups</h3>
        <h2>Are you travelling in big numbers? Buses are be the cheapest and safest way to get to your palce.</h2>
        <button onclick="location.href='../#BookNow'; document.getElementById('linkCollapseOne').click();" id="buynow-4" type="button" class="buy-now-btn" name="button">31-60 seats</button>
      </div>
      <div class="number-pagination">
        <span>4</span>
      </div>
    </div>
  </div>
<!-- Our Services -->
  <div id="ourservices">
    <div style="height: 3rem"></div>
    <hr class="style-two">
    <h1 class="landmessage display-3">OUR SERVICES</h1>
    <div style="height: 2rem"></div>

    <div id="ourservicescontainer" class="landmessage marketing">
      <!-- START THE FEATURETTES -->

      <h1 class="landmessage">General description of our company's services and facilities:</h1>
      <div style="height: 5rem"></div>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Transport. <span class="text-muted">Anywhere, anytime, secure and comfortable.</span></h2>
          <p class="lead">Prima facilitate a firmei noastre este aceea de a va oferi transportul propriu-zis, atât când este vorba de obiecte, bagaje, cât şi atunci cand e vorba de persoane. Puteti alege între curse prestabilite de noi sau curse
            dupa preferinţele dumneavoastra, atatât privind transportul cât şi comfortul. </p>

        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="img/s1.jpg" alt="Generic placeholder image">
          <p class="landmessage right"><br><b>Listă preţuri curse prestabilite:</b><br>Arad-Timişoara(50km) - 10 Euro/pers<br>Arad-Budapesta/Cluj(270km) - 30 Euro/pers<br>Arad-Belgrad(210km) - 22 Euro/pers<br>Arad-Târgu Mureş(440km) - 50 Euro/pers<br>Arad-Bucureşti/Viena(600km)
            - 350 Euro/maşină<br>Arad-Berlin/Varşovia(1150km) - 700 Euro/maşină<br>Arad-Cagnes(1530km) - 1000 Euro/maşină<br></p>
        </div>
      </div>

      <hr class="servicehr style-two">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Language courses available. <span class="text-muted">Best for foreign students.</span></h2>
          <p class="lead">Pe lângă facilităţile noastre de transport, noi dispunem şi de personal specializat în diferite limbi străine(Engleză, Germana, Italiană) pentru clienţii români, dar şi de limba română, pentru clienţii străini care doresc
            să se adapteze condiţiilor din ţara noastră şi pentru o mai uşoară acomodare în societatea Româneasca a acestora.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="img/s3.jpg" alt="Generic placeholder image">
          <p class="landmessage left"><br><b>Preţuri:</b><br>Cursuri lb. Engleză: 50 Lei/2h<br>Cursuri lb. Italiană/Germană: 70 Lei/2h<br>Cursuri lb. Română: gratuit, în fiecare sâmbătă orele 10-12 în sala de conferinţe a sediului firmei.<br></p>
        </div>
      </div>

      <hr class="servicehr style-two">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">University applications/transfers.</span></h2>
          <p class="lead">Datorita faptului că mulţi dintre clienţii noştrii sunt studenţi, majoritatea straini, asociatii firmei noastre si-au dezvoltat o experienţă în a-i ajuta pe acestia să se înscrie/transfere de la o facultate la alta. Noi vă
            putem ajuta şi să vă spunem cum şi de unde puteţi face rost de actele necesare unei astfel de operaţiuni. Majoritatea studenţilor care sunt clienţi fideli firmei noastre sunt la Universitatea de Medicina Dentara Arad (în cadrul UVVG),
            dar şi la Universitatea de Inginerie (în cadrul UAV). De asemenea, majoritatea transferurilor solicitate sunt acelea spre Universitatea de Farmacie si Medicina Gemerana Târgu Mureş (UMF).</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="img/s2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
    </div>
  </div>
  <!-- About Us -->
  <div id="aboutus">
    <div id="about" style="height: 3rem"></div>
    <hr class="style-two">
    <div style="height: 1rem"></div>
    <h1 class="landmessage display-3">ABOUT US</h1>
    <div style="height: 2rem"></div>
    <div id="aboutuscontainer" class="landmessage container marketing">
      <h1 class="landmessage">The three pillars of our company</h1>
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle aboutimg" src="img/boss-1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Mecheş Samuel</h2>
          <div>
            <p class="boss">Our company's boss and coordinator is the man with the same name, <span class="text-success"><a>Mecheş Samuel</a></span>. The roots of the transport company have formed in the beginning of year 2009. Back then, Mr. Samuel
              was nothing than a simple taxi driver, that was daily persevering and doing his job with all pleasure.</p>
            <a class="btn btn-secondary bossbtn" data-toggle="collapse" href="#boss1read" role="button" aria-expanded="false" aria-controls="boss1read">Read more &raquo;</a>
            <p class="collapse boss" id="boss1read">Being a sociable man with all his customers, he started giving them buisiness cards, so the loyal customers could contact him for further cooperation. Pe langă aceşti clienţi români, datorită
              faptului că este un bun cunoscător de limba Engleză şi Italiană, acesta a început să fie căutat de mulţi studenţi Italieni sau de alte naţionalităţi care sunt localizaţi în oraşul nostru, Arad. Cu siguranţă, acesta a fost un bonus
              pentru el cât şi pentru clienţii străini. Aceştia au primit cărţi de vizită şi la rândul lor au spus altor studenţi străini care erau în căutare de transport. Astfel, iniţial de la 2 studenţi străini pe care acesta obişnuia să îi
              transporte de obicei la Timişoara, clienţii au ajuns la un număr de aroximativ 1500 de studenţi sau persoane de naţionalităţi străine(în special Italieni), în decursul 6 ani. Astfel, după multă muncă şi investiţie, firma de transport
              "S.C. Samuel Exclusiv Trans" a fost în sfârşit în mod legal înfiinţată în anul 2012. De atunci, Meches Samuel a început să aibă alţi asociaţi, împreună dezvoltând ceea ce este firma astăzi. De la o singură maşină licenţiată de taxi,
              s-a ajung la un număr de 6 maşini cu 5 locuri, 3 cu 7 locuri, 4 microbuze 9 locuri, 2 microbuze 16 locuri şi un autocar de ultima generaţie cu un număr de 76 de locuri. Concluzionând, putem spune că orice afacere începe cu lucrurile
              mici, iar pas cu pas, având voinţă necesară şi privind doar înainte, vom reuşi să ne împlinim visele.</p>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle aboutimg" src="img/boss-2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Mecheş Sebastian</h2>
          <div>
            <p class="boss">The second leader of our company is no other than the son of the main boss, and that is <span class="text-success"><a>Mecheş Sebastian</a></span>. Even though he is a student at Timişoara's UPT of Automatics and
              Computers, he leads and spends a lot of time in our company's IT department.</p>
            <a class="btn btn-secondary bossbtn" data-toggle="collapse" href="#boss2read" role="button" aria-expanded="false" aria-controls="boss2read">Read more &raquo;</a>
            <p class="collapse boss" id="boss2read">Pe langă aceşti clienţi români, datorită faptului că este un bun cunoscător de limba Engleză şi Italiană, acesta a început să fie căutat de mulţi studenţi Italieni sau de alte naţionalităţi care
              sunt localizaţi în oraşul nostru, Arad. Cu siguranţă, acesta a fost un bonus pentru el cât şi pentru clienţii străini. Aceştia au primit cărţi de vizită şi la rândul lor au spus altor studenţi străini care erau în căutare de transport.
              Astfel, iniţial de la 2 studenţi străini pe care acesta obişnuia să îi transporte de obicei la Timişoara, clienţii au ajuns la un număr de aroximativ 1500 de studenţi sau persoane de naţionalităţi străine(în special Italieni), în
              decursul 6 ani. Astfel, după multă muncă şi investiţie, firma de transport "S.C. Samuel Exclusiv Trans" a fost în sfârşit în mod legal înfiinţată în anul 2012. De atunci, Meches Samuel a început să aibă alţi asociaţi, împreună
              dezvoltând ceea ce este firma astăzi. De la o singură maşină licenţiată de taxi, s-a ajung la un număr de 6 maşini cu 5 locuri, 3 cu 7 locuri, 4 microbuze 9 locuri, 2 microbuze 16 locuri şi un autocar de ultima generaţie cu un număr de
              76 de locuri. Concluzionând, putem spune că orice afacere începe cu lucrurile mici, iar pas cu pas, având voinţă necesară şi privind doar înainte, vom reuşi să ne împlinim visele.</p>

          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle aboutimg" src="img/boss-3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Baciş Filimon</h2>
          <div>
            <p class="boss">The sponsor of Samuel Exclusive Trans is <span class="text-success"><a>Baciş Filimon</a></span>. If he wouldn't put his hand in the pockets to give us the money needed for investition, then the company would have got a
              hard time until it developed. He is also one of our most professional drivers on the 16 seats minibuses.</p>
            <a class="btn btn-secondary bossbtn" data-toggle="collapse" href="#boss3read" role="button" aria-expanded="false" aria-controls="boss3read">Read more &raquo;</a>
            <p class="collapse boss" id="boss3read">Pe langă aceşti clienţi români, datorită faptului că este un bun cunoscător de limba Engleză şi Italiană, acesta a început să fie căutat de mulţi studenţi Italieni sau de alte naţionalităţi care
              sunt localizaţi în oraşul nostru, Arad. Cu siguranţă, acesta a fost un bonus pentru el cât şi pentru clienţii străini. Aceştia au primit cărţi de vizită şi la rândul lor au spus altor studenţi străini care erau în căutare de transport.
              Astfel, iniţial de la 2 studenţi străini pe care acesta obişnuia să îi transporte de obicei la Timişoara, clienţii au ajuns la un număr de aroximativ 1500 de studenţi sau persoane de naţionalităţi străine(în special Italieni), în
              decursul 6 ani. Astfel, după multă muncă şi investiţie, firma de transport "S.C. Samuel Exclusiv Trans" a fost în sfârşit în mod legal înfiinţată în anul 2012. De atunci, Meches Samuel a început să aibă alţi asociaţi, împreună
              dezvoltând ceea ce este firma astăzi. De la o singură maşină licenţiată de taxi, s-a ajung la un număr de 6 maşini cu 5 locuri, 3 cu 7 locuri, 4 microbuze 9 locuri, 2 microbuze 16 locuri şi un autocar de ultima generaţie cu un număr de
              76 de locuri. Concluzionând, putem spune că orice afacere începe cu lucrurile mici, iar pas cu pas, având voinţă necesară şi privind doar înainte, vom reuşi să ne împlinim visele.</p>

          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
  </div>
    <!--Contact-->
  <div id="contact">
    <div class="container-contact100">


      <div id="contact1" class="contact100-more">
        <i class="zmdi zmdi-phone-in-talk"></i>
        (+40) 740 107 168<br>
        (+40) 743 937 238
      </div>
      <div id="contact2" class="contact100-more">
        <i class="zmdi zmdi-local-post-office"></i>
        setrans-help@gmail.com
      </div>
      <div id="contact3" class="contact100-more">
        <i class="zmdi zmdi-map"></i>
        Arad, Arad, Zsigmond Moricz 23
      </div>

      <div class="wrap-contact100">
        <form onsubmit ="return validateContact()" action="contact.inc.php" method="POST" class="contact100-form validate-form">
          <span class="contact100-form-title">
            Contact Us
          </span>

          <div class="wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Name</span>
            <input class="input100" type="text" name="name" placeholder="Name..." <?php if(isset($_SESSION['username'])) echo 'value="'.$_SESSION['fullname'].'" readonly'; ?> required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <span class="label-input100">Email</span>
            <input class="input100" type="email" name="email" placeholder="Email addess..." <?php if(isset($_SESSION['username'])) echo 'value="'.$_SESSION['email'].'" readonly'; ?> required>
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Number has format: +(XX)(XXX XXX XXX)">
            <span class="label-input100">Phone</span>
            <input class="input100" type="text" name="phone" placeholder="Phone Number..." <?php if(isset($_SESSION['username'])) echo 'value="'.$_SESSION['phone'].'" readonly'; ?> required>
            <span class="focus-input100"></span>
          </div>


          <div class="wrap-input100 validate-input" data-validate="Message is required">
            <span class="label-input100">Message</span>
            <textarea class="input100" name="message" placeholder="Questions/Comments..." required></textarea>
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <input id="contact-submit" type="submit" name="contact-submit" value="Send" class="contact100-form-btn">
              </input>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=moricz%20zsigmond%20arad&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
      <style>
        .mapouter {
          text-align: right;
          height: 500px;
          width: 100%;
        }

        .gmap_canvas {
          overflow: hidden;
          background: none;
          height: 500px;
          width: 100%x;
        }
      </style>
    </div>
  </div>

  <div id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#intro"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="#vehicles"><i class="fa fa-angle-double-right"></i>Vehicles</a></li>
						<li><a href="#services"><i class="fa fa-angle-double-right"></i>Services</a></li>
						<li><a href="#aboutus"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="#contact"><i class="fa fa-angle-double-right"></i>Contact</a></li>
					</ul>
				</div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Contact</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="#footer"><i class="fa fa-phone"></i>(+40) 740 107 168</a></li>
            <li><a href="#footer"><i class="fa fa-phone"></i>(+40) 743 937 238</a></li>
            <li><a href="#footer"><i class="fa fa-map"></i>Arad, Arad, Zsigmond Moricz 23</a></li>
            <li><a href="#footer"><i class="fa fa-envelope"></i>setrans-help@gmail.com</a></li>
            <li><a href="#footer"><i class="fa fa-skype"></i>setrans</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Read our</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="../terms.php" target="_blank"><i class="fa fa-handshake"></i>Terms & Conditons</a></li>
            <li><a href="../privacypolicy.php" target="_blank"><i class="fa fa-lock"></i>Privacy Policy</a></li>
          </ul>
        </div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/UniversityTransportService/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com/UniversityTransportService/" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/UniversityTransportService/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.googleplus.com/UniversityTransportService/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.email.com/UniversityTransportService/" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><a href=""><b>S.C. Samuel Exclusive Trans</b></a> is a Registered Company of Arad, Arad, Romania in the domain of people transportation.</p>
					<p class="h6">&copy All rights reversed. Website created by<a class="text-green ml-2" href="" target="_blank">Mecheş Sebastian</a></p>
				</div>
				</hr>
			</div>
		</div>
	</div>

  <!--===============================================================================================-->
  <!--===============================================================================================-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/sliderapp.js" charset="utf-8"></script>
  <script src="main.js"></script>
 <script type="text/javascript" src="DataTables/datatables.min.js"></script>
 <script type="text/javascript" src="DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready( function () {
      $('#bookingsTable').DataTable();
      $('#adminAccountsTable').DataTable();
      $('#adminBookingsTable').DataTable();
      $('#adminMessagesTable').DataTable();
  } );
</script>
</body>

</html>
