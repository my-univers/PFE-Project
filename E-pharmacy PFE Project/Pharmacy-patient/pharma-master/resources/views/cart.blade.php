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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="/">Accueil</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Panier</strong>
          </div>
        </div>
      </div>
    </div>

    @include('sweetalert::alert')

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
            {{-- @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('success') }}
            </div>
            @endif

            @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('error') }}
              </div>
            @endif --}}

            <div class="col-md-12">
                <div class="site-blocks-table">
                    @if (count($cart) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Nom</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-delete">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a @if($item['type'] == 'product') href="/product-details/{{ $item['item']->id }}" @elseif($item['type'] == 'pack') href="/pack-details/{{ $item['item']->id }}" @endif>
                                            <img src="{{ $item['item']->image_path }}" alt="Image" width="100">
                                        </a>
                                    </td>
                                    <td class="product-name">{{ $item['item']->nom }}</td>
                                    <td>
                                        <center>
                                            <div class="input-group mb-3" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center" name="quantite" value="{{ $item['quantity'] }}" placeholder=""
                                                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                    <td class="product-price">{{ $item['item']->prix }} DH</td>
                                    <td class="product-delete">
                                        <a href="{{ route('remove.item', ['type' => $item['type'], 'itemId' => $item['item']->id]) }}" class="btn btn-primary height-auto btn-sm">X</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h3>Aucun article dans le panier.</h3>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              @if ($total > 0)
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="/cart/cancelCart" class="btn btn-primary btn-md btn-block">Annuler l'achat</a>
                </div>
              @endif
              <div class="col-md-6">
                <a href="/shop/produits" class="btn btn-outline-primary btn-md btn-block">Continuer les achats</a>
              </div>
            </div>
            {{-- <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Entrez votre code coupon si vous en avez un.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Appliquer le coupon</button>
              </div>
            </div> --}}
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-center border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total du Panier </h3>
                  </div>
                </div>

                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Sous-total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{ number_format($total, 2) }} DH</strong>
                  </div>

                  <div class="col-md-6">
                    <span class="text-black">Frais de livraison  </span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">20 DH</strong>
                  </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6">
                      <strong class="text-black" >Total</strong>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">{{ number_format($FraixTotal, 2) }} DH</strong>
                    </div>
                  </div>

                @if ($total != 0)
                    <div class="row">
                        <div class="col-md-12">
                        <a class="btn btn-primary btn-lg btn-block" href="/checkout">Confirmer la commande</a>
                        </div>
                    </div>
                @endif
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
