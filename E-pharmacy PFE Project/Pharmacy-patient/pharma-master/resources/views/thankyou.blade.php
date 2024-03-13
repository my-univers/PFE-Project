<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Pharmacie en ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{ route('index') }}" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active"><a href="{{ route('shop') }}">Store</a></li>
                <li class="has-children">
                  <a href="#">Dropdown</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>

                  </ul>
                </li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{ route('cart') }}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Thank you</strong>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
            <p><a href="{{ route('shop') }}" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
          </div>
        </div>
      </div>
    </div>


    <!--********* FOOTER *********-->
    <footer class="site-footer">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                  <div class="block-7">
                      <h3 class="footer-heading mb-4">A Propos de Nous</h3>
                      <p>
                          Pharma est votre pharmacie en ligne de confiance,
                          dédiée à fournir des produits pharmaceutiques de haute qualité et des services
                          exceptionnels.
                          Notre mission est de rendre l'accès aux médicaments plus facile et plus pratique pour
                          vous,
                          nos précieux clients.
                      </p>
                  </div>

              </div>
              <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">Liens Rapides</h3>
                  <ul class="list-unstyled">
                      <li><a href="#">Supplements</a></li>
                      <li><a href="#">Vitamins</a></li>
                      <li><a href="#">Diet &amp; Nutrition</a></li>
                      <li><a href="#">Tea &amp; Coffee</a></li>
                  </ul>
              </div>

              <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                      <h3 class="footer-heading mb-4">Coordonnées</h3>
                      <ul class="list-unstyled">
                          <li class="address">203 Rue annonyme, Ville de Rabat, Maroc</li>
                          <li class="phone"><a href="tel://212123456789">+212 123 456 789</a></li>
                          <li class="email">pharma@info.com</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                  <p>
                      Copyright &copy;
                      <script>
                          document.write(new Date().getFullYear());
                      </script> Tous les droits sont réservés | Ce site web est réalisé
                      avec <i class="icon-heart" aria-hidden="true"></i> par <a href="" target="_blank"
                          class="text-primary">Pharma</a>
                  </p>
              </div>
          </div>
      </div>
  </footer>
  <!--****** END FOOTER *******-->
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>