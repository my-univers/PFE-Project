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
      <li class="active">
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
      <li>
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
      <li>Produits </li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
        Liste des Produits Epuisés
    </h1>
    <a href="/produits/list" class="button blue">
        <span>Retour</span>
    </a>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          Produits Epuisés
        </p>

        <script>
            function submitForm() {
                document.getElementById("filterForm").submit();
            }
        </script>
      </header>
      
      <div class="card-content">
        @if (count($produits_epuises)>0)
        <table>
            <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th style="">Nom</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($produits_epuises as $p)
                <tr>
                    <td></td>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nom }}</td>
                    <td>{{ $p->categorie->nom }}</td>
                    <td>{{ $p->prix }} DH</td>
                    <td class="actions-cell">
                    <div class="buttons right nowrap">
                        <a class="button small green --jb-modal" href="/produits/updateForm/{{$p->id}}">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        @if ($produits_epuises->onFirstPage())
                            <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                        @else
                            <a href="{{ $produits_epuises->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                        @endif

                        @for ($i = 1; $i <= $produits_epuises->lastPage(); $i++)
                            <button type="button" class="button @if ($produits_epuises->currentPage() == $i) active @endif">{{ $i }}</button>
                        @endfor

                        @if ($produits_epuises->hasMorePages())
                            <a href="{{ $produits_epuises->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                        @else
                            <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <table>
                <tr><td></td><td>Aucun produit disponible pour le moment.</td></tr>
            </table>
        @endif
      </div>
    </div>
  </section>


@endsection
