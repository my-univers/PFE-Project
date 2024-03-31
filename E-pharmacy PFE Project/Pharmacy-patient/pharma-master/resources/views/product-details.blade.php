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
                            href="/shop/produits">Magasin</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">{{ $product->nom }}</strong></div>
                </div>
            </div>
        </div>

    @include('sweetalert::alert')

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <div class="border text-center">
                            <img src="../{{ $product->image_path }}" alt="Image" class="img-fluid p-5">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-black">{{ $product->nom }}</h2>
                        <p>
                            {{ $product->descr }}
                        </p>
                        <p class="text-black">{{ $product->prix }}DH</p>

                        {{-- <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 220px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center" name="quantite" value="1" placeholder=""
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                </div>
                            </div>
                        </div> --}}

                        @if ($product->ordonnance)
                            @if (!$orderValidated)
                                <form method="POST" action="{{ route('upload.order') }}" enctype="multipart/form-data"
                                    id="orderForm">
                                    @csrf
                                    <div class="mb-5">
                                        {{-- <div class="input-group mb-3" style="max-width: 220px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center" name="quantite" value="1" placeholder=""
                                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <p>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="file" id="image" name="image" style="display: none"
                                                onchange="submitOrderForm()">
                                            <a style="color: black" onclick="document.getElementById('image').click()"
                                                class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Télécharger
                                                Ordonnance</a>
                                            <style>
                                                .buy-now:hover {
                                                    background-color: white;
                                                    color: #51EAEA !important;
                                                    transition: all 350ms ease-in-out !important;
                                                }
                                            </style>
                                        <div id="image-preview" style="margin-top: 10px;">
                                            <img id="preview" src="" alt="Aperçu de l'image"
                                                style="max-width: 100px; max-height: 100px; display: none;">
                                            <span id="image-name"></span>
                                        </div>
                                        </p>
                                </form>
                                <script>
                                    function displayImageName() {
                                        var input = document.getElementById('image');
                                        var fileName = input.files[0].name;
                                        var preview = document.getElementById('preview');
                                        var imageName = document.getElementById('image-name');
                                        preview.src = URL.createObjectURL(input.files[0]);
                                        preview.style.display = "block";
                                        imageName.innerText = fileName;

                                        // // il uploada l'ordonnance, afficher l bouton "Ajouter au Panier"
                                        // var addToCartBtn = document.getElementById('addToCartBtn');
                                        // if (fileName !== "") {
                                        //     addToCartBtn.style.display = "block";
                                        // } else {
                                        //     addToCartBtn.style.display = "none";
                                        // }
                                    }

                                    // la methode qui soumet le fichier telecharé pour le valider
                                    function submitOrderForm() {
                                        document.getElementById('orderForm').submit();
                                    }
                                </script>
                            @elseif ($orderValidated)
                                <p id="addToCartBtn"> {{-- style="display: none;" --}}
                                <form method="POST" action="{{ route('add.to.cart') }}">
                                    @csrf
                                    <div class="mb-5">
                                        <div class="input-group mb-3" style="max-width: 220px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus"
                                                    type="button">&minus;</button>
                                            </div>
                                            <input type="text" class="form-control text-center" name="quantity"
                                                value="1" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus"
                                                    type="button">&plus;</button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="product">
                                    <input type="hidden" name="item_id" value="{{ $product->id }}">
                                    <button type="submit"
                                        class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                                        style="width: 247.438px">Ajouter au Panier</button>
                                </form>
                                </p>
                            @endif

                            <!-- messages -->
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        @else
                            <form method="POST" action="{{ route('add.to.cart') }}">
                                @csrf
                                <div class="mb-5">
                                    <div class="input-group mb-3" style="max-width: 220px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary js-btn-minus"
                                                type="button">&minus;</button>
                                        </div>
                                        <input type="text" class="form-control text-center" name="quantity"
                                            value="1" placeholder="" aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary js-btn-plus"
                                                type="button">&plus;</button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="type" value="product">
                                <input type="hidden" name="item_id" value="{{ $product->id }}">
                                <button type="submit"
                                    class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Ajouter au
                                    Panier</button>
                            </form>
                        @endif

                        <div class="mt-5">
                            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                        href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Informations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                        href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">Specifications</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <table class="table custom-table">
                                        <thead>
                                            <th>Catégorie</th>
                                            <th>Description</th>
                                            <th>Ordonnance</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $product->categorie->nom }}</th>
                                                <td>{{ $product->descr }}</td>
                                                @if ($product->ordonnance)
                                                    <td>Oui</td>
                                                @else
                                                    <td>Non</td>
                                                @endif
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <table class="table custom-table">

                                        <tbody>
                                            <tr>
                                                <td>Ingrédients</td>
                                                <td class="bg-light">{{$product->ingredients}}</td>
                                            </tr>
                                            <tr>
                                                <td>Poids</td>
                                                <td class="bg-light">{{$product->poids}} mg</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

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
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('../images/bg_1.jpg');">
                            <div class="banner-1-inner align-self-center">
                                <h2>Pharma Products</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('../images/bg_2.jpg');">
                            <div class="banner-1-inner ml-auto  align-self-center">
                                <h2>Rated by Experts</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
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
