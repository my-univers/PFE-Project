@extends('master')
@section('aside')
<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Pharma <b class="font-black">One</b>
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
      <li >
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
      </li>

      <li>
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
      </li>
      <li class="active">
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
      </li>
      <li>
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
      <li>
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
      <li>
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
      </li>
      <li>
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
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
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
        Liste des Produits
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          Produits
        </p>
        <form action="/produits/list" method="get" class="card-header-icon">
            <span>
                <label class="label">Filtrer par Catégorie :</label>
            </span>
            &nbsp; &nbsp;
            <span>
                <div class="field">
                    <div class="control">
                        <div class="select">
                        <select name="categorie">
                            <option value="">Tous</option>
                            @foreach ($categories as $c)
                            <option value="{{ $c->id }}">{{ $c->nom }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
            </span>
            &nbsp; &nbsp;
            <span>
                <button type="submit" class="button small blue" type="button">
                    <span class="icon"><i class="mdi mdi-filter"></i></span>
                </button>
            </span>
        </form>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th></th>
            <th>#</th>
            <th style="">Nom</th>
            <th style="width: 300px">Description</th>
            <th>Catégotie</th>
            <th>Prix</th>
            <th>Quantité en stock</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($produits as $p)
            <tr>
                <td></td>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nom }}</td>
                <td>{{ $p->descr }}</td>
                <td>{{ $p->categorie->nom }}</td>
                <td>{{ $p->prix }} DH</td>
                <td>{{ $p->qte_en_stock }}</td>
                <td class="actions-cell">
                <div class="buttons right nowrap">
                    <a class="button small green --jb-modal" href="/produits/updateForm/{{$p->id}}">
                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </a>
                    <button class="button small red --jb-modal" data-target="sample-modal-{{$p->id}}" type="button">
                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>

                    <div id="sample-modal" class="modal">
                        <div class="modal-background --jb-modal-close"></div>
                        <div class="modal-card">
                          <header class="modal-card-head">
                            <p class="modal-card-title">Confirmer la Suppression</p>
                          </header>
                          <section class="modal-card-body">
                            <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                            <p>Cette action est irréversible</p>
                          </section>
                          <footer class="modal-card-foot">
                            <button class="button --jb-modal-close">Annuler</button>
                            <a class="button red --jb-modal-close" href="/produits/delete/{{$p->id}}">Confirmer</a>
                          </footer>
                        </div>
                      </div>
                </div>
                </td>
            </tr>

            <div id="sample-modal-{{$p->id}}" class="modal">
              <div class="modal-background --jb-modal-close"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                  <p class="modal-card-title">Confirmer la Suppression</p>
                </header>
                <section class="modal-card-body">
                  <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
                  <p>Cette action est irréversible</p>
                </section>
                <footer class="modal-card-foot">
                  <button class="button --jb-modal-close">Annuler</button>
                  <a class="button red --jb-modal-close" href="/produits/delete/{{$p->id}}">Confirmer</a>
                </footer>
              </div>
            </div>

            @endforeach
          </tbody>
        </table>
        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- <div id="sample-modal-2" class="modal">
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
</div> --}}

@endsection
