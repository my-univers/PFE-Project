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
      <li class="active">
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
        <a href="https://github.com/my-univers/PFE-Project" class="has-icon">
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
      <li>Clients </li>
    </ul>
  </div>
</section>

@include('sweetalert::alert')

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
        Liste des Clients
    </h1>
    <a href="/clients/addForm" class="button blue">
        <span class="icon"><i class="mdi mdi-plus"></i></span>
        <span>Ajouter</span>
    </a>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          Clients
        </p>
        {{-- <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a> --}}
        <form action="/clients/search" method="get" class="card-header-icon">
          <span>
              <label class="label">Rechercher</label>
          </span>
          &nbsp; &nbsp;
          <span>
              <div class="field">
                  <div class="control">
                      <div class="select">
                        <input type="text" class="input" name="search_input">
                      </div>
                  </div>
              </div>
          </span>
          &nbsp; &nbsp;
          <span>
              <button type="submit" class="button small blue" type="button">
                  <span class="icon"><i class="mdi mdi-search-web"></i></span>
              </button>
          </span>
      </form>

      </header>
      <div class="card-content">
        @if ($clients->count() > 0)
        <table>
            <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($clients as $c)
                <tr>
                    <td></td>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nom }}</td>
                    <td>{{ $c->email }}</td>
                    <td style="max-width: 240px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $c->adresse }}</td>
                    <td>{{ $c->telephone }}</td>
                    <td class="actions-cell">
                    <div class="buttons right nowrap">
                        <a class="button small green --jb-modal" href="/clients/updateForm/{{$c->id}}">
                        <span class="icon"><i class="mdi mdi-pencil"></i></span>
                        </a>
                        <button class="button small red --jb-modal" data-target="sample-modal-{{$c->id}}" type="button">
                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                        </button>
                    </div>
                    </td>
                </tr>

                <div id="sample-modal-{{$c->id}}" class="modal">
                <div class="modal-background --jb-modal-close"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                    <p class="modal-card-title">Confirmer la Suppression</p>
                    </header>
                    <section class="modal-card-body">
                    <p>Êtes-vous sûr de vouloir supprimer ce client ?</p>
                    <p>Cette action est irréversible.</p>
                    </section>
                    <footer class="modal-card-foot">
                    <button class="button --jb-modal-close">Annuler</button>
                    <a class="button red --jb-modal-close" href="/clients/delete/{{$c->id}}">Confirmer</a>
                    </footer>
                </div>
                </div>
                @endforeach
            </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        @if ($clients->onFirstPage())
                            <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                        @else
                            <a href="{{ $clients->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                        @endif

                        @for ($i = 1; $i <= $clients->lastPage(); $i++)
                            <button type="button" class="button @if ($clients->currentPage() == $i) active @endif">{{ $i }}</button>
                        @endfor

                        @if ($clients->hasMorePages())
                            <a href="{{ $clients->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                        @else
                            <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <table>
                <tr><td></td><td>Aucun client disponible pour le moment.</td></tr>
            </table>
        @endif
      </div>
    </div>
  </section>
@endsection
