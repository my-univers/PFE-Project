<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Pharmacie en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                                <li><a href="/shop">Magasin</a></li>
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
                        <a href="/">Accueil</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">{{ $categorie->nom }}</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrer par Référence</h3>
                        <form method="GET" action="{{ route('filterProducts', $categorie->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-md dropdown-toggle px-4"
                                id="dropdownMenuReference" data-toggle="dropdown">Référence</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item"
                                    href="{{ route('filterProducts', [$categorie->id, 'sort' => 'relevance']) }}">Pertinence</a>
                                <a class="dropdown-item"
                                    href="{{ route('filterProducts', [$categorie->id, 'sort' => 'name_asc']) }}">Nom, A
                                    à Z</a>
                                <a class="dropdown-item"
                                    href="{{ route('filterProducts', [$categorie->id, 'sort' => 'name_desc']) }}">Nom, Z
                                    à A</a>
                                <a class="dropdown-item"
                                    href="{{ route('filterProducts', [$categorie->id, 'sort' => 'price_asc']) }}">Prix,
                                    croissant</a>
                                <a class="dropdown-item"
                                    href="{{ route('filterProducts', [$categorie->id, 'sort' => 'price_desc']) }}">Prix,
                                    décroissant</a>
                            </div>
                        </form>
                    </div>
                </div>

                <!--new code -->
                <div class="row mt-5">
                    @foreach ($produits as $produit)
                        <div class="col-sm-6 col-lg-4 text-center item mb-4">
                            <a href="{{ route('shop-single', $produit->id) }}"> <img class="produit-image"
                                    src="{{ asset($produit->image_path) }}" alt="Image"></a>
                            <br><br>
                            <h3 class="text-dark"><a
                                    href="{{ route('shop-single', $produit->id) }}">{{ $produit->nom }}</a>
                            </h3>
                            <p class="price">{{ $produit->prix }} DH</p>
                        </div>
                        <style>
                            .produit-image {
                                height: 200px;
                                width: calc(100 / 3);
                            }
                        </style>
                    @endforeach
                </div>

                <!-- new code-->
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <!-- Bouton précédent -->
                                @if ($produits->onFirstPage())
                                    <li class="disabled"><span>&lt;</span></li>
                                @else
                                    <li><a href="{{ $produits->previousPageUrl() }}">&lt;</a></li>
                                @endif

                                <!-- Affichage des pages -->
                                @foreach ($produits->getUrlRange(1, $produits->lastPage()) as $page => $url)
                                    @if ($produits->currentPage() === $page)
                                        <li class="active"><span>{{ $page }}</span></li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                <!-- Bouton suivant -->
                                @if ($produits->hasMorePages())
                                    <li><a href="{{ $produits->nextPageUrl() }}">&gt;</a></li>
                                @else
                                    <li class="disabled"><span>&gt;</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        @foreach ($complements as $complement)
            @if ($complement->categorie->nom == 'Compléments Alimentaires')
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                    <a href= "shop-single/ {{ $complement->id }}">
                        <img src="{{ asset($complement->image_path) }}" alt="Image"class="product-image">
                        <style>
                            .product-image {
                                width: 200px;
                                height: 200px;
                            }
                        </style>
                    </a>
                    <h3 class="text-dark"><a href="shop-single/ {{ $complement->id }}">{{ $complement->nom }}</a></h3>
                    <p class="price">{{ $complement->prix }} DH</p>
                </div>
            @endif
        @endforeach
    </div> --}}
    </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex"
                        style="background-image: url('../images/bg_1.jpg');">
                        <div class="banner-1-inner align-self-center">
                            <h2>Service Clientele exceptionnel</h2>
                            <p>Notre équipe est disponible 24h/7j pour répondre à toutes vos questions et
                                préoccupations médicales.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a href="#" class="banner-1 h-100 d-flex"
                        style="background-image: url('../images/bg_2.jpg');">
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
