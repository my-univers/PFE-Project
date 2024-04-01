@extends('master')

@section('aside')
    <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools">
            <div>
                <b class="font-black">Pharma</b> One
            </div>
        </div>
        <div class="menu is-menu-main">
            <p class="menu-label">General</p>
            <ul class="menu-list">
                <li>
                    <a href="/dashboard">
                        <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                        <span class="menu-item-label">Tableau de Bord</span>
                    </a>
                </li>
            </ul>
            <p class="menu-label">Gestion</p>
            <ul class="menu-list">
                {{-- <li class="active">
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          <span class="menu-item-label">Clients</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/clients/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/clients/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                <li>
                    <a href="/clients/list">
                        <span class="icon"><i class="mdi mdi-account"></i></span>
                        <span class="menu-item-label">Clients</span>
                    </a>
                </li>
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          <span class="menu-item-label">Médecins</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/medecins/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/medecins/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                <li>
                    <a href="/medecins/list">
                        <span class="icon"><i class="mdi mdi-doctor"></i></span>
                        <span class="menu-item-label">Médecins</span>
                    </a>
                </li>
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Produits</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/produits/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/produits/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                <li>
                    <a href="/produits/list">
                        <span class="icon"><i class="mdi mdi-pill"></i></span>
                        <span class="menu-item-label">Produits</span>
                    </a>
                </li>
                {{-- <li>
        <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-format-list-bulleted-type"></i></span>
            <span class="menu-item-label">Catégories</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="/categories/list">
                  <span>Liste</span>
              </a>
            </li>
          </ul>
        </li>
      <li> --}}
                <li>
                    <a href="/categories/list">
                        <span class="icon"><i class="mdi mdi-format-list-bulleted-type"></i></span>
                        <span class="menu-item-label">Catégories</span>
                    </a>
                </li>
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Médicaments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/medicaments/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/medicaments/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-needle"></i></span>
          <span class="menu-item-label">Compléments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/complements">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/complements/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                {{-- <li>
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
      </li> --}}
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-cart"></i></span>
          <span class="menu-item-label">Commandes</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/commandes">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/commandes/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                <li>
                    <a href="/commandes">
                        <span class="icon"><i class="mdi mdi-cart"></i></span>
                        <span class="menu-item-label">Commandes</span>
                    </a>
                </li>
                {{-- <li >
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-package-variant"></i></span>
          <span class="menu-item-label">Packs</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/packs">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/packs/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
                <li>
                    <a href="/packs">
                        <span class="icon"><i class="mdi mdi-package-variant"></i></span>
                        <span class="menu-item-label">Packs</span>
                    </a>
                </li>
                {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>
          <span class="menu-item-label">Packs Produits</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/packs_produits">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/packs_produits/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
      <li class="active">
        <a href="/packs_produits">
          <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>
          <span class="menu-item-label">Packs Produits</span>
        </a>
      </li>
      <li>
        <a href="/messages">
          <span class="icon"><i class="mdi mdi-message"></i></span>
          <span class="menu-item-label">Messages</span>
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
@endsection

@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Packs Produits </li>
            </ul>
        </div>
    </section>

    @include('sweetalert::alert')

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Détails de {{ $pack->nom }}
            </h1>
            <a class="button blue" href='/packs_produits'>
                Retour
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>
                    Packs Produits
                </p>
            </header>

            <div class="card-content">
                <button class="button blue" style="width: 240px" title="Détails de Base de Pack">
                    <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>&nbsp; Détails de Base
                </button>
                <br><br>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th style="width: 33.3%">Nom</th>
                            <th style="width: 33.3%">Quantité en Stock</th>
                            <th style="width: 33.3%">Prix</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ $pack->nom }}</td>
                            <td> {{ $pack->qte_en_stock }}</td>
                            <td>{{ $totalPack }} DH</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <button class="button green" style="width: 240px">
                    <span class="icon" title="Détails des Produits"><i class="mdi mdi-pill"></i></span>
                    &nbsp; Produits du Pack
                </button>
                <br><br>
                @if ($produits->count() > 0)
                    <table class="is-striped" id="produits-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nom du Produit</th>
                                <th>Quantité en Stock</th>
                                <th>Prix</th>
                                <th style="width: 130px">Quantité dans le Pack</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td></td>
                                    <td>{{ $produit->nom }}</td>
                                    <td @if ($produit->qte_en_stock <= 1) style="color: red" @endif>
                                        {{ $produit->qte_en_stock }}</td>
                                    <td>{{ $produit->prix }} DH</td>
                                    <td>
                                        @foreach ($pack->produits as $pack_produit)
                                            @if ($pack_produit->id === $produit->id)
                                                {{ $pack_produit->pivot->qte_produit }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            @foreach ($pack->produits as $pack_produit)
                                                @if ($pack_produit->id === $produit->id)
                                                    @if ($pack_produit->pivot->qte_produit > 1)
                                                        <a class="button small blue"
                                                            href="/packs_produits/minusProduct/{{ $pack->id }}/{{ $produit->id }}">
                                                            <span class="icon"><i class="mdi mdi-minus"></i></span>
                                                        </a>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <a class="button small red"
                                                href="/packs_produits/removeProduct/{{ $pack->id }}/{{ $produit->id }}">
                                                <span class="icon"><i class="mdi mdi-close"></i></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-pagination" id="produits-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                @if ($produits->onFirstPage())
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-left"></span></button>
                                @else
                                    <a href="{{ $produits->previousPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-left"></span></a>
                                @endif

                                @foreach ($produits->getUrlRange(1, $produits->lastPage()) as $page => $url)
                                    <button type="button"
                                        class="button {{ $produits->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                                @endforeach

                                @if ($produits->hasMorePages())
                                    <a href="{{ $produits->nextPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-right"></span></a>
                                @else
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-right"></span></button>
                                @endif
                            </div>
                            <small>Page {{ $produits->currentPage() }} of {{ $produits->lastPage() }}</small>
                        </div>
                    </div>
                @else
                    <table>
                        <tr>
                            <td></td>
                            <td>Aucun produit n'est associé pour le moment.</td>
                        </tr>
                    </table>
                @endif

                <hr>
                <button class="button red" style="width: 240px" disabled>
                    <span class="icon" title="Détails des Produits"><i class="mdi mdi-plus"></i></span>
                    &nbsp; Ajouter Produits
                </button>
                <br><br>
                @if ($allProducts->count() > 0)
                    <table class="is-striped" id="all-products-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nom du Produit</th>
                                <th>Quantité en Stock</th>
                                <th>Prix</th>
                                <th style="width: 130px">Quantité dans le Pack</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allProducts as $produit)
                                <form method="post"
                                    action="/packs_produits/addToPack/{{ $produit->id }}/{{ $pack->id }}">
                                    @csrf
                                    <tr>
                                        <td></td>
                                        <td>{{ $produit->nom }}</td>
                                        <td>{{ $produit->qte_en_stock }}</td>
                                        <td>{{ $produit->prix }} DH</td>
                                        <td>
                                            <input class="input is-small" type="number" name="quantite"
                                                value="1" min="1">
                                        </td>
                                        <td>
                                            <button type="submit" class="button small blue">
                                                <span class="icon"><i class="mdi mdi-plus"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-pagination" id="all-products-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                @if ($allProducts->onFirstPage())
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-left"></span></button>
                                @else
                                    <a href="{{ $allProducts->previousPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-left"></span></a>
                                @endif

                                @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                                    <button type="button"
                                        class="button {{ $allProducts->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                                @endforeach

                                @if ($allProducts->hasMorePages())
                                    <a href="{{ $allProducts->nextPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-right"></span></a>
                                @else
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-right"></span></button>
                                @endif
                            </div>
                            <small>Page {{ $allProducts->currentPage() }} of {{ $allProducts->lastPage() }}</small>
                        </div>
                    </div>
                @else
                    <table>
                        <tr>
                            <td></td>
                            <td>Aucun produit disponible pour le moment.</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </section>

    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="../../js/main.min.js?v=1628755089081"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="../../js/chart.sample.min.js"></script>


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

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Pagination pour les produits
        $(document).on('click', '#produits-pagination .button', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var targetTable = $('#produits-table');
            var targetPagination = $('#produits-pagination');

            // Requête AJAX pour obtenir le nouveau contenu paginé pour les produits
            $.get(url, function(data) {
                var newTable = $(data).find('#produits-table').html();
                var newPagination = $(data).find('#produits-pagination').html();
                $(targetTable).html(newTable);
                $(targetPagination).html(newPagination);
            });
        });

        // Pagination pour les produits disponibles pour le pack
        $(document).on('click', '#all-products-pagination .button', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var targetTable = $('#all-products-table');
            var targetPagination = $('#all-products-pagination');

            // Requête AJAX pour obtenir le nouveau contenu paginé pour les produits disponibles pour le pack
            $.get(url, function(data) {
                var newTable = $(data).find('#all-products-table').html();
                var newPagination = $(data).find('#all-products-pagination').html();
                $(targetTable).html(newTable);
                $(targetPagination).html(newPagination);
            });
        });
    });
</script> --}}

@endsection
