<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Pharma One</title>

    <!-- Tailwind is included -->
    <link rel="stylesheet" href="../css/main.css?v=1628755089081">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6" />

    <meta name="description" content="Admin One - free Tailwind dashboard">

    <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
    <meta property="og:site_name" content="JustBoil.me">
    <meta property="og:title" content="Admin One HTML">
    <meta property="og:description" content="Admin One - free Tailwind dashboard">
    <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="960">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Admin One HTML">
    <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
    <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
    <meta property="twitter:image:width" content="1920">
    <meta property="twitter:image:height" content="960">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-130795909-1');
    </script>

</head>

<body>

    <div id="app">

        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item mobile-aside-button">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
                <div class="navbar-item">
                    <div class="control"><input placeholder="Entrez un mot clé..." class="input"></div>
                </div>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
                </a>
            </div>
            <div class="navbar-menu" id="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item dropdown has-divider">
                        <div class="navbar-dropdown">
                            <a href="profile.html" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>Mon Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-settings"></i></span>
                                <span>Paramètres</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Déconnexion</span>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item dropdown has-divider has-user-avatar">
                        <a class="navbar-link">
                            <div class="user-avatar">
                                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe"
                                    class="rounded-full">
                            </div>
                            <div class="is-user-name"><span>John Doe</span></div>
                            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="profile.html" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>Mon Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-settings"></i></span>
                                <span>Paramètres</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Déconnexion</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools">
                <div>
                    Pharma <b class="font-black">One</b>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li class="active">
                        <a href="index.html">
                            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                            <span class="menu-item-label">Tableau de Bord</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Gestion</p>
                <ul class="menu-list">
                    <li>
                        <a class="dropdown">
                            <span class="icon"><i class="mdi mdi-account-group"></i></span>
                            <span class="menu-item-label">Clients</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#void">
                                    <span>Liste</span>
                                </a>
                            </li>
                            <li>
                                <a href="#void">
                                    <span>Ajout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown">
                            <span class="icon"><i class="mdi mdi-doctor"></i></span>
                            <span class="menu-item-label">Medecins</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#void">
                                    <span>Liste</span>
                                </a>
                            </li>
                            <li>
                                <a href="#void">
                                    <span>Ajout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown">
                            <span class="icon"><i class="mdi mdi-pill"></i></span>
                            <span class="menu-item-label">Médicaments</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#void">
                                    <span>Liste</span>
                                </a>
                            </li>
                            <li>
                                <a href="#void">
                                    <span>Ajout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown">
                            <span class="icon"><i class="mdi mdi-medication"></i></span>
                            <span class="menu-item-label">Compléments</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('complements.list') }}">
                                    <span>Liste</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('complements.form') }}">
                                    <span>Ajout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown">
                            <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
                            <span class="menu-item-label">Premiers Secours</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/premiers_secours">
                                    <span>Liste</span>
                                </a>
                            </li>
                            <li>
                                <a href="/premiers_secours/form">
                                    <span>Ajout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="set-active-forms-html">
                        <a href="#">
                            <span class="icon"><i class="mdi mdi-cart-outline"></i></span>
                            <span class="menu-item-label">Commandes</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">A Propos</p>
                <ul class="menu-list">
                    <li>
                        <a href="#" class="has-icon">
                            <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                            <span class="menu-item-label">GitHub</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Admin</li>
                    <li>Premiers Secours</li>
                </ul>
            </div>
        </section>

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Premiers Secours
                </h1>
            </div>
        </section>


        <div class="card-content">

            <section class="section main-section">
                <div class="card mb-6">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-ballot"></i></span>
                            Ajouter Premiers Secours
                        </p>
                    </header>
                    <div class="card-content">

                        <form method="get" action="/complements/add" enctype="multipart/form-data">

                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Nom" name="nom">
                                            <span class="icon left"><i class="mdi mdi-medical-bag"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" placeholder="Description" name="description"></textarea>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Marque"
                                                name="marque">
                                            <span class="icon left"><i class="mdi mdi-account"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Prix"
                                                name="prix">
                                            <span class="icon left"><span class="mdi mdi-cash"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Quantité en stock"
                                                name="qte_en_stock">
                                            <span class="icon left"><span class="mdi mdi-store"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Image" name="image">
                                            <span class="icon left"><span class="mdi mdi-image-area"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field grouped">
                                <div class="control">
                                    <button type="submit" class="button green">
                                        Ajouter
                                    </button>
                                </div>
                                <div class="control">
                                    <button type="reset" class="button red" onclick="annuler()">
                                        Annuler
                                    </button>
                                    <script>
                                        function annuler() {
                                            window.location.href = '/premiers_secours';
                                        };
                                    </script>
                                </div>
                            </div>

                            <hr>
                        </form>
                    </div>
                </div>


        </div>
    </div>
    </section>



    </div>
    </div>
    </section>

    <footer class="footer">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div class="flex items-center justify-start space-x-3">
                <div>
                    © 2024, Pharma One
                </div>
            </div>
        </div>
    </footer>

    <div id="sample-modal" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button red --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>

    <div id="sample-modal-2" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button blue --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>

    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="../js/main.min.js?v=1628755089081"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="../js/chart.sample.min.js"></script>


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658339141622648');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>
