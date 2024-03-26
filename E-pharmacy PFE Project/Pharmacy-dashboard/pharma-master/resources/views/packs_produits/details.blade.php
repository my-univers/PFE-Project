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
      <li >
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
                    <th style="width: 33.3%">Quantité</th>
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
        <table class="is-striped">
            <thead>
            <tr>
                <th></th>
                <th style="width: 33.3%">Nom du Produit</th>
                <th style="width: 33.3%">Quantité</th>
                <th style="width: 33.3%">Prix</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                <tr>
                    <td></td>
                    <td>{{ $produit->nom }}</td>
                    <td @if($produit->qte_en_stock <= 1) style="color: red"  @endif>{{ $produit->qte_en_stock }}</td>
                    <td>{{ $produit->prix }} DH</td>
                    <td>
                      <a class="button small red" href="/packs_produits/removeProduct/{{$pack->id}}/{{$produit->id}}">
                        <span class="icon"><i class="mdi mdi-close"></i></span>
                      </a>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-pagination">
            <div class="flex items-center justify-between">
                <div class="buttons">
                    @if ($produits->onFirstPage())
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                    @else
                        <a href="{{ $produits->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                    @endif

                    @foreach ($produits->getUrlRange(1, $produits->lastPage()) as $page => $url)
                        <button type="button" class="button {{ $produits->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                    @endforeach

                    @if ($produits->hasMorePages())
                        <a href="{{ $produits->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                    @else
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                    @endif
                </div>
                <small>Page {{ $produits->currentPage() }} of {{ $produits->lastPage() }}</small>
            </div>
        </div>

        <hr>
        <button class="button red" style="width: 240px">
            <span class="icon" title="Détails des Produits"><i class="mdi mdi-plus"></i></span>
            &nbsp; Ajouter Produits
        </button>
        <br><br>
        <table class="is-striped">
            <thead>
            <tr>
                <th></th>
                <th style="width: 33.3%">Nom du Produit</th>
                <th style="width: 33.3%">Quantité</th>
                <th style="width: 33.3%">Prix</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($allProducts as $produit)
                @if (!$produits->contains($produit))
                <tr>
                    <td></td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->qte_en_stock}}</td>
                    <td>{{ $produit->prix }} DH</td>
                    <td>
                      <a class="button small blue" href="/packs_produits/addToPack/{{$produit->id}}/{{$pack->id}}">
                        <span class="icon"><i class="mdi mdi-plus"></i></span>
                      </a>
                    </td>
                    <td></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        <div class="table-pagination">
            <div class="flex items-center justify-between">
                <div class="buttons">
                    @if ($allProducts->onFirstPage())
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                    @else
                        <a href="{{ $allProducts->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                    @endif

                    @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                        <button type="button" class="button {{ $allProducts->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                    @endforeach

                    @if ($allProducts->hasMorePages())
                        <a href="{{ $allProducts->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                    @else
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                    @endif
                </div>
                <small>Page {{ $allProducts->currentPage() }} of {{ $allProducts->lastPage() }}</small>
            </div>
        </div>
      </div>
    </div>
  </section>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../../js/main.min.js?v=1628755089081"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="../../js/chart.sample.min.js"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>

@endsection
