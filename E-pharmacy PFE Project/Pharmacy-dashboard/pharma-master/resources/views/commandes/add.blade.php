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
      <li class="active">
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
      <li>Commandes </li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
        Ajouter une Commande
    </h1>
    <a class="button blue" href='/commandes'>
        Retour
      </a>
  </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-cart"></i></span>
          Commande
        </p>
      </header>
      <div class="card-content">
        <form method="post" action="/commandes/add">
            @csrf
            <div class="field">
                <button type="button" class="button blue" style="width: 240px" title="Client associé à la Commande">
                    <span class="icon"><i class="mdi mdi-account"></i></span>&nbsp; Client Concerné (1)
                </button>
                <br><br>
                @if ($clients->count() > 0)
                    <table class="is-striped">
                        <thead>
                        <tr>
                            <th style="width: 20%"></th>
                            <th style="width: 80%">Nom du Client</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $c)
                            <tr>
                                <td class="checkbox-cell">
                                    <label class="checkbox">
                                    <input type="checkbox" name="client_id" value="{{ $c->id }}">
                                    <span class="check"></span>
                                    </label>
                                </td>
                                <td>{{ $c->nom }}</td>
                                <td></td>
                            </tr>
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

                                @foreach ($clients->getUrlRange(1, $clients->lastPage()) as $page => $url)
                                    <button type="button" class="button {{ $clients->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                                @endforeach

                                @if ($clients->hasMorePages())
                                    <a href="{{ $clients->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                                @else
                                    <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                                @endif
                            </div>
                            <small>Page {{ $clients->currentPage() }} of {{ $clients->lastPage() }}</small>
                        </div>
                    </div>
                @else
                    <table>
                        <tr><td></td><td>Aucun client disponible pour le moment.</td></tr>
                    </table>
                @endif
            </div>
            <hr>
            <div class="field">
                <button type="button" class="button green" style="width: 240px" title="Produit(s)">
                    <span class="icon"><i class="mdi mdi-pill"></i></span>&nbsp; Produits à Commander
                </button>
                <br><br>
                @if ($produits->count() > 0)
                    <table class="is-striped">
                        <thead>
                        <tr>
                            <th style="width: 100px"></th>
                            <th>Nom du Produit</th>
                            <th>Prix</th>
                            <th>Quantité en Stock</th>
                            <th style="width: 40px">Quantité à Commander</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                            <tr>
                                <td class="checkbox-cell">
                                    <label class="checkbox">
                                    <input type="checkbox" name="produits_id[]" value="{{ $produit->id }}">
                                    <span class="check"></span>
                                    </label>
                                </td>
                                <td>{{ $produit->nom }}</td>
                                <td>{{ $produit->prix }} DH</td>
                                <td @if($produit->qte_en_stock <= 1) style="color: red"  @endif>{{ $produit->qte_en_stock }}</td>
                                <td>
                                    <input class="input is-small" type="number" name="quantite[{{ $produit->id }}]" value="1" min="1">
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
                @else
                    <table>
                        <tr><td></td><td>Aucun produit disponible pour le moment.</td></tr>
                    </table>
                @endif
            </div>
            <hr>
            <div class="field">
                <button type="button" class="button green" style="width: 240px" title="Produit(s)">
                    <span class="icon"><i class="mdi mdi-package-variant-closed"></i></span>&nbsp; Packs de Produits
                </button>
                <br><br>
                @if ($packs->count() > 0)
                    <table class="is-striped">
                        <thead>
                        <tr>
                            <th style="width: 100px"></th>
                            <th>Nom du Pack</th>
                            <th>Prix</th>
                            <th style="width: 130px">Quantité en Stock</th>
                            <th style="width: 40px">Quantité à Commander</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($packs as $pack)
                            <tr>
                                <td class="checkbox-cell">
                                    <label class="checkbox">
                                    <input type="checkbox" name="packs_id[]" value="{{ $pack->id }}">
                                    <span class="check"></span>
                                    </label>
                                </td>
                                <td>{{ $pack->nom }}</td>
                                <td>{{ $pack->prix }} DH</td>
                                <td @if($pack->qte_en_stock <= 1) style="color: red"  @endif>{{ $pack->qte_en_stock }}</td>
                                <td>
                                    <input class="input is-small" type="number" name="quantite[{{ $pack->id }}]" value="1" min="1">
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a class="button small blue "
                                        href="/packs_produits/details/{{ $pack->id }}">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </a>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                @if ($packs->onFirstPage())
                                    <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                                @else
                                    <a href="{{ $packs->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                                @endif

                                @foreach ($packs->getUrlRange(1, $packs->lastPage()) as $page => $url)
                                    <button type="button" class="button {{ $packs->currentPage() === $page ? 'active' : '' }}">{{ $page }}</button>
                                @endforeach

                                @if ($packs->hasMorePages())
                                    <a href="{{ $packs->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                                @else
                                    <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                                @endif
                            </div>
                            <small>Page {{ $packs->currentPage() }} of {{ $packs->lastPage() }}</small>
                        </div>
                    </div>
                @else
                    <table>
                        <tr><td></td><td>Aucun pack de produits disponible pour le moment.</td></tr>
                    </table>
                @endif
            </div>
            <hr>
            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green" onclick="ajouterChampQuantite()">
                        Ajouter
                    </button>
                </div>
                <div class="control">
                    <button type="reset" class="button red" onclick="reset()">
                        Annuler
                    </button>
                </div>
            </div>
        </form>
        </script>
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

</div>

@endsection
