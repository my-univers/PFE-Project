<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Pharmacie en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/img/pharmaOne-logo-bg.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">

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
                                        @foreach ($categories as $categorie)
                                            <li>
                                                <a
                                                    href="{{ route('categorie.products', $categorie->id) }}">{{ $categorie->nom }}</a>
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
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span
                                class="icon-search"></span></a>
                        <a href="/cart" class="icons-btn d-inline-block bag">
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
                    <div class="col-md-12 mb-0"><a href="/">Accueil</a> <span class="mx-2 mb-0">/</span> <a
                            href="/shop/packs">Magasin</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">{{ $pack->nom }}</strong></div>
                </div>
            </div>
        </div>

    @include('sweetalert::alert')

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <div class="border text-center">
                            <img src="../{{ $pack->image_path }}" alt="Image" class="img-fluid p-5">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-black">{{ $pack->nom }}</h2>
                        <p>
                            {{ $pack->descr }}
                        </p>
                        <p class="text-black">{{ $pack->prix }} DH</p>

                        @if ($pack->qte_en_stock > 0)
                            <form action="{{ route('add.to.cart') }}" method="POST">
                                @csrf
                                <div class="mb-5">
                                    <div class="input-group mb-3" style="max-width: 220px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                        </div>
                                        <input type="text" readonly style="background-color: white" class="form-control text-center" name="quantity" value="1" placeholder=""
                                        aria-label="Example text with button addon" aria-describedby="button-addon1"
                                        data-stock="{{ $pack->qte_en_stock }}">
                                        <div class="input-group-append">
                                            <button onclick="toggleIncrementButton()" class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="type" value="pack">
                                <input type="hidden" name="item_id" value="{{ $pack->id }}">
                                <button type="submit"
                                    class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                                    style="width: 247.438px">Ajouter au Panier</button>
                            </form>
                            <script>
                                function toggleIncrementButton() {
                                    // Récupérer la quantité saisie par l'utilisateur
                                    var quantity = parseInt(document.getElementsByName("quantity")[0].value);
                                    // Récupérer le stock disponible depuis l'attribut data-stock
                                    var stockDisponible = parseInt(document.getElementsByName("quantity")[0].getAttribute("data-stock"));

                                    // Sélectionner le bouton d'incrémentation
                                    var incrementButton = document.querySelector('.js-btn-plus');

                                    // Vérifier si la quantité dépasse le stock disponible
                                    if (quantity + 1 >= stockDisponible) {
                                        // Désactiver le bouton d'incrémentation
                                        incrementButton.disabled = true;
                                    } else {
                                        // Activer le bouton d'incrémentation
                                        incrementButton.disabled = false;
                                    }
                                }
                            </script>
                        @else
                            <div class="mb-5">
                                <div class="input-group mb-3" style="max-width: 220px;">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-primary js-btn-minus" type="button" disabled>&minus;</button>
                                    </div>
                                    <input type="text" class="form-control text-center" name="quantity" value="0" placeholder=""
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary js-btn-plus" type="button" disabled>&plus;</button>
                                    </div>
                                </div>
                                <h4>Épuisé !</h4>
                            </div>

                            <input type="hidden" name="type" value="pack">
                            <input type="hidden" name="item_id" value="{{ $pack->id }}">
                            <button type="submit"
                                class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                                style="width: 247.438px">Ajouter au Panier</button>
                        @endif

                        <div class="mt-5">
                            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Informations</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Specifications</a>
                                </li> --}}

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <table class="table custom-table">
                                        <thead>
                                            <th>Description</th>
                                            <th>Produits Inclus</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%">{{ $pack->description }}</td>
                                                <td style="width: 50%">
                                                    @foreach ($pack->produits as $p)
                                                    - &nbsp; <a href="/product-details/{{ $p->id }}" style="color: black">{{ $p->nom }}</a> &nbsp; x &nbsp; {{ $p->pivot->qte_produit }}<br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <table class="table custom-table">

                                        <tbody>
                                            <tr>
                                                <td>HPIS CODE</td>
                                                <td class="bg-light">999_200_40_0</td>
                                            </tr>
                                            <tr>
                                                <td>HEALTHCARE PROVIDERS ONLY</td>
                                                <td class="bg-light">No</td>
                                            </tr>
                                            <tr>
                                                <td>LATEX FREE</td>
                                                <td class="bg-light">Yes, No</td>
                                            </tr>
                                            <tr>
                                                <td>MEDICATION ROUTE</td>
                                                <td class="bg-light">Topical</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> --}}

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-secondary bg-image" style="background-image: url('../images/bg_2.jpg');">
            <div class="container">
              <div class="row align-items-stretch">
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('../images/bg_1.jpg');">
                      <div class="banner-1-inner align-self-center">
                          <h2>Service Clientele exceptionnel</h2>
                          <p>Notre équipe est disponible 24h/7j pour répondre à toutes vos questions et
                              préoccupations médicales.
                          </p>
                      </div>
                  </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <a href="/docteurs" class="banner-1 h-100 d-flex" style="background-image: url('../images/bg_2.jpg');">
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
        <!--****** END FOOTER *******-->
    </div>

    <script src="{{ asset('../js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('../js/jquery-ui.js') }}"></script>
    <script src="{{ asset('../js/popper.min.js') }}"></script>
    <script src="{{ asset('../js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('../js/aos.js') }}"></script>
    <script src="{{ asset('../js/main.js') }}"></script>


</body>

</html>
