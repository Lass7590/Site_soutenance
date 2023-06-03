<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecole Supérieur Polytechnique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{URL:: to('/')}}"><img class="logo" src="assets/img/ucad.png" rel="logo ucad"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{URL:: to('/')}}">ACCUEIL</a></li>
          <li><a href="about.html">A PROPOS</a></li>
          

          <li class="dropdown"><a href="#"><span>FORMATION</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">GÉNIE CHIMIQUE ET BIOLOGIE APPLIQUÉE</a></li>
              <li><a href="#">GÉNIE CIVIL</a></li>
              <li><a href="#">GÉNIE ELECTRIQUE</a></li>
              <li><a href="#">GÉNIE INFORMATIQUE</a></li>
              <li><a href="#">GÉNIE MÉCANIQUE</a></li>
              <li><a href="#">GESTION</a></li>
            </ul>
          </li>
          <li><a href="#">SOUTENANCE</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{URL:: to('/login')}}" class="get-started-btn">CONNEXION</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Un creuset d’excellence <br>au service du développement</h1>
      <h2>Pionnière dans la formation des hauts cadres des secteurs publics et privés</h2>
      <a href="#" class="btn-get-started">Demarrer</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/esp.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Historique de l'ESP</h3>
            <p class="fst-italic">
              L’École Supérieure Polytechnique (ESP), ex ENSUT (Ecole Nationale Supérieure Universitaire de Technologie), ex IUT (Institut Universitaire de Technologie), ex IP (Institut Polytechnique), est un établissement public à vocation interafricaine de l’Université Cheikh Anta DIOP de Dakar (UCAD). Elle a été créée par la loi n°94-78 du 24 novembre 1994.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Création de l’Institut Polytechnique (IP) en 1964<br>
                Création de l’Institut Polytechnique (IP), établissement technique supérieur, dépendant de l’Université de Dakar et rattaché à la direction de l’enseignement supérieur à la suite de la création de l’Institut Universitaire de technologie en France.</li>
              {{-- <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        
        <div class="row counters">
          <h3>LES DIPLÔMÉS DE 1966 A 2020</h3>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1153" data-purecounter-duration="1" class="purecounter"></span>
            <p>INGENIEUR DE CONCEPTION</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1685" data-purecounter-duration="1" class="purecounter"></span>
            <p>DIPLÔMÉS D’UN MASTER OU ÉQUIVALENT</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1552" data-purecounter-duration="1" class="purecounter"></span>
            <p>ingénieurs technologues</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="615" data-purecounter-duration="1" class="purecounter"></span>
            <p>DIPLÔMES SUPÉRIEUR COMPTABLE (DSC)</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="10048" data-purecounter-duration="1" class="purecounter"></span>
            <p>TECHNICIENS SUPÉRIEURS</p>
          </div>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="7059" data-purecounter-duration="1" class="purecounter"></span>
            <p>DIPLÔMES ELÉMENTAIRE COMPTABLE (DEC)</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi choisir ESP?</h3>
          
              <p>
                Choisir l’ESP, c’est intégrer un établissement pluridisciplinaire de renommée mondiale, donner le meilleur de soi-même pour suivre une formation de haut niveau, et rejoindre une communauté de plus de 20 617 étudiantes et étudiants, et 30 000 alumni dans le monde entier.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">En savoir plus <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Service de la recherche</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Conseil scientifique</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Innovation et valorisation</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Formations</h2>
          <p>Type de formation</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/informatique.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Génie Informatique</h4>
                  {{-- <p class="price">$169</p> --}}
                </div>

                <h3><a href="course-details.html">LICENCE PROFESSIONNELLE EN GENIE LOGICIEL</a></h3>
                <p>La Licence Professionnelle Génie Logiciel offre aux étudiants des compétences dans les nouvelles techniques informatiques et les prépare à intégrer les entreprises désirant développer des solutions informatiques.</p>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/gestion.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Gestion</h4>
                  {{-- <p class="price">$250</p> --}}
                </div>

                <h3><a href="course-details.html">DIPLOME DE GESTION ET DE COMPTABILITE (DGC)</a></h3>
                <p>Les titulaires du DGC exercent dans les métiers de la comptabilité, de la finance et de la gestion notamment dans les cabinets d’expertise comptable et les services comptable et financier des organisations. </p>
               
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/Genie-civil.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Génie Civil</h4>
                  {{-- <p class="price">$180</p> --}}
                </div>

                <h3><a href="course-details.html">DIPLOME D’INGENIEUR DE CONCEPTION</a></h3>
                <p>Le diplôme d’Ingénieur de Conception en Génie Civil est organisé au sein du domaine Sciences et Technologies, de la mention Sciences de l’Ingénieur, dans la spécialité Génie Civil. Il prépare à l’insertion professionnelle ou à la poursuite des études de 3ème cycle.</p>
                
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    
    </section><!-- End Trainers Section --> --}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ecole Superieure Polytechnique</h3>
            <p>
              Université Cheikh Anta Diop de Dakar <br>
              Corniche Ouest<br>
              BP : 5085 Dakar-Fann <br><br>
              <strong>Phone:</strong> +221 33 824 05 40<br>
              <strong>Email:</strong> esp@esp.sn<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Site UCAD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bibliotheque UCAD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-mail UCAD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-mail ESP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bibliotheque ESP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Site du COUD</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Formations</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Génie Chimique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Génie Civil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Génie Electrique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Génie Informatique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Génie Mécanique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h3>Nous suivre sur les réseaux sociaux</h3>
            
            </form> --}}
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ESP</span></strong>. Tous droits reservés
        </div>
        <div class="credits">
          
          Designed by <a href="#">GLSIB</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

