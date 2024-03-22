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
              <a href="/" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="/">Accueil</a></li>
                <li><a href="/shop">Magasin</a></li>
                <li class="has-children">
                  <a href="#">Catégories</a>
                  <ul class="dropdown">
                    <li><a href="/medicments">Médicaments</a></li>
                    <li><a href="/complements">Compléments Alimentaires</a></li>
                    <li><a href="/premiers">Premiers Secours</a></li>
                  </ul>
                </li>
                <li><a href="/about">A Propos</a></li>
                <li><a href="/contact">Contact</a></li>
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

    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">MÉDICAMENT EFFICACE, NOUVEAU MÉDICAMENT CHAQUE JOUR</h2>
              <h1>Bienvenue chez Pharma</h1>
              <p>
                <a href="/shop" class="btn btn-primary px-5 py-3">Acheter maintenant</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a class="h-100">
                <h5>Livraison <br> Gratuite </h5>
                <p>
                  Livraison gratuite sur toutes les commandes
                  <strong>pour une durée limitée</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a class="h-100">
                <h5>Vente Saisonnière <br>50% de Réduction</h5>
                <p>
                  Obtenez une réduction de 50% sur une séléction de produits
                  <strong>pour une durée limitée</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a class="h-100">
                <h5>Acheter <br>Une Carte-Cadeau</h5>
                <p>
                  Offrez à vos proches la liberté de choisir avec notre carte-cadeau
                  <strong>à partir de $25</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Produits populaires</h2>
          </div>
        </div>

        <div class="row">
          @foreach ($products as $product)
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
              @if ($product->qte_en_stock < 1)
              <span class="tag">OUT OF STOCK</span>
              @endif
              <a href="/shop-single/{{ $product->id }}"><img src="{{ $product->image_path }}" alt="Image" class="product-image"></a>
              <style>
                .product-image {
                    width: 200px;
                    height: 200px;
                }
            </style>
              <h3 class="text-dark"><a href="/shop-single/{{ $product->id }}">{{ $product->nom }}</a></h3>
              <p class="price">{{ $product->prix }} DH</p>
          </div>
          @endforeach
      </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="/shop" class="btn btn-primary px-4 py-3">Voir tous les produits</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Nouveaux Produits</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
                @foreach ($recentProducts as $product)
                <div class="col-md-3 text-center item mb-4">
                    <a href="/shop-single"> <img src="{{ $product->image_path }}" alt="Image"></a>
                   
                    <h3 class="text-dark"><a href="/shop-single">{{ $product->nom }}</a></h3>
                </div>

                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Temoignages</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">

              <div class="testimony">
                <blockquote>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;J'ai découvert Pharma récemment et je suis très satisfaite de mes achats. Le site est convivial et j'ai pu trouver rapidement les produits dont j'avais besoin. La livraison a été rapide et les produits étaient bien emballés.
                     Je recommande cette pharmacie en ligne à tous ceux qui cherchent un service de qualité &rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Service clientèle impeccable ! J'ai eu une question concernant un produit et j'ai obtenu une réponse rapide et détaillée. La qualité des médicaments est excellente et les prix sont compétitifs.
                    Je suis très content de mon expérience avec Pharma et je recommande cette pharmacie en ligne sans hésitation&rdquo;</p>
                </blockquote>

                <p>&mdash; Rebecca Morando</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;
                    Pharma est devenu mon magasin préféré pour acheter mes médicaments.
                    La variété des produits est impressionnante et j'apprécie la facilité de navigation sur le site. Les livraisons sont toujours rapides et les produits sont de grande qualité.
                    Je recommande vivement cette pharmacie en ligne &rdquo;</p>
                </blockquote>

                <p>&mdash; Lucas Gallone</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Je suis très satisfait de mon expérience avec Pharma.
                    Le processus de commande est sécurisé, et j'ai toujours reçu mes produits dans les délais prévus. Le service clientèle est également excellent, avec des réponses utiles à mes questions.
                    Je recommande Pharma à tous ceux qui cherchent un service de qualité &rdquo;</p>
                </blockquote>

                <p>&mdash; Andrew Neel</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Service Clientele exceptionnel</h2>
                <p>Notre équipe est disponible 24h/7j pour répondre à toutes vos questions et préoccupations médicales.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Commandez rapidement</h2>
                <p>En cas d'urgence médicale, vous pouvez appeler directement un docteur et passer votre commande par téléphone.
                </p>
              </div>
            </a>
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
