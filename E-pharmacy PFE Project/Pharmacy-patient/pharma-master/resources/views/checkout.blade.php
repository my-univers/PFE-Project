<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Pharmacie en ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                <li><a href="/">Accueil</a></li>
                <li class="has-children">
                    <a href="#">Magasin</a>
                    <ul class="dropdown">
                        <li>
                            <a href="/shop/produits">Produits</a>
                            <a href="/shop/packs">Packs de Produits</a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="#">Catégories</a>
                    <ul class="dropdown">
                        <?php
                            use App\Models\Categorie;
                            $categories = Categorie::all();
                        ?>
                        @foreach ($categories as $categorie)
                            <li>
                                <a href="{{ route('categorie.products', $categorie->id) }}">{{ $categorie->nom }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/docteurs">Docteurs</a></li>
                <li><a href="/about">A Propos</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{ route('cart') }}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">{{ session('cart') ? count(session('cart')) : 0 }}</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    @include('sweetalert::alert')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="/">Accueil</a> <span class="mx-2 mb-0">/</span>
            <a href="/cart" >Panier</a>
            <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Caisse</strong>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
        <div class="container">
            <form class="row" action="/passer-commande" method="POST">
                @csrf
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Détails de facturation</h2>
                    <div class="p-3 p-lg-5 border" action="" method="POST">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="nom" class="text-black">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_companyname" required name="nom" placeholder="Nom complet">
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Adresse <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_address" required name="c_address" placeholder="Adresse complète : ville, rue, numéro...">
                            </div>
                        </div>

                        <div class="form-group row mt-5">
                            <div class="col-md-6">
                                <label for="c_email_address" class="text-black">Adresse e-mail <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="c_email_address" required name="c_email_address" placeholder="user@example.com">
                            </div>
                            <div class="col-md-6">
                                <label for="c_phone" class="text-black">Téléphone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_phone" name="c_phone" required placeholder="0123456789">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Code de réduction</h2>
                            <div class="p-3 p-lg-5 border">

                                <label for="c_code" class="text-black mb-3">Saisissez votre code de réduction si vous en avez un</label>
                                <div class="input-group w-75">
                                    <input type="text" class="form-control" id="c_code" placeholder="Code de réduction" aria-label="Code de réduction"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Appliquer</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Votre commande</h2>
                            <div class="p-3 p-lg-5 border">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Produit</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        @foreach($cart as $item)
                                        <tr>
                                            <td>{{ $item['item']->nom }} <strong class="mx-2">x</strong> {{ $item['quantity'] }}</td>
                                            <td>{{ $item['item']->prix }} DH</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Total du panier</strong></td>
                                            <td class="text-black">{{ $total }} DH</td>
                                        </tr>
                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Total de la commande</strong></td>
                                            <td class="text-black font-weight-bold"><strong>{{ $total + 20 }} DH</strong></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="mb-5 text-center">
                                    <!-- Paiement à la livraison -->
                                        <h4 class="font-size-sm text-uppercase mb-3">Paiement à la livraison</h4>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Passer  {{-- onclick="window.location='/thankyou'" --}}
                                        la commande</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- </form> -->
        </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
                  <div class="banner-1-inner align-self-center">
                      <h2>Service Clientele exceptionnel</h2>
                      <p>Notre équipe est disponible 24h/7j pour répondre à toutes vos questions et
                          préoccupations médicales.
                      </p>
                  </div>
              </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a href="/docteurs" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
                  <div class="banner-1-inner ml-auto  align-self-center">
                      <h2>Commandez rapidement</h2>
                      <p>En cas d'urgence médicale, vous pouvez appeler directement un docteur et passer votre
                          commande par téléphone.
                      </p>
                  </div>
              </a>
            </div>
          </div>
        </div>
      </div>


      <!--*** FOOTER ***-->
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
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                    <h3 class="footer-heading mb-4">Liens Rapides</h3>
                    <ul class="list-unstyled">
                        <li><a href="/products">Médicaments</a></li>
                        <li><a href="/products">Compléments Alimentaires</a></li>
                        <li><a href="/products">Premiers Secours</a></li>
                        <li><a href="/packs">Packs Premiers Secours</a></li>
                    </ul>
                </div>


                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">Coordonnées</h3>
                        <ul class="list-unstyled">
                            <li class="address">203 Rue annonyme, Ville de Rabat, Maroc</li>
                            <li class="phone"><a href="tel://212123456789">+212 123 456 789</a></li>
                            <li class="email">pharma1one1@info.com</li>
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
    <!--** END FOOTER ***-->
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
