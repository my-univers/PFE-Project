<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Pharmacie en ligne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/img/pharmaOne-logo-bg.png">

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
                                                <a
                                                    href="{{ route('categorie.products', $categorie->id) }}">{{ $categorie->nom }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="active"><a href="/docteurs">Docteurs</a></li>
                                <li><a href="/about">A Propos</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="/docteurs/search" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
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
                    <div class="col-md-12 mb-0">
                        <a href="/">Accueil</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Docteurs Partenaires</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Spécialité</th>
                                        <th>Ville</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medecins as $m)
                                        <tr>
                                            <td>
                                                <h2 class="h5 text-black">{{ $m->nom }}</h2>
                                            </td>
                                            <td>{{ $m->email }}</td>
                                            <td>{{ $m->telephone }}</td>
                                            <td>{{ $m->specialite }}</td>
                                            <td>{{ $m->ville }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="row pagination">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <!-- Bouton précédent -->
                                        @if ($medecins->onFirstPage())
                                            <li class="disabled"><span>&lt;</span></li>
                                        @else
                                            <li><a href="{{ $medecins->previousPageUrl() }}">&lt;</a></li>
                                        @endif

                                        <!-- Affichage des pages -->
                                        @foreach ($medecins->getUrlRange(1, $medecins->lastPage()) as $page => $url)
                                            @if ($medecins->currentPage() === $page)
                                                <li class="active"><span>{{ $page }}</span></li>
                                            @else
                                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach

                                        <!-- Bouton suivant -->
                                        @if ($medecins->hasMorePages())
                                            <li><a href="{{ $medecins->nextPageUrl() }}">&gt;</a></li>
                                        @else
                                            <li class="disabled"><span>&gt;</span></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
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
