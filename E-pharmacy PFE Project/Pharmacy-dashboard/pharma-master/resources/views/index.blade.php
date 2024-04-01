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
        <li class="active">
          <a href="/dashboard">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Tableau de Bord</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Gestion</p>
      <ul class="menu-list">
      <li>
        <a href="/clients/list">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          <span class="menu-item-label">Clients</span>
        </a>
      </li>
      <li>
        <a href="/medecins/list">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          <span class="menu-item-label">Médecins</span>
        </a>
      </li>
      <li>
        <a href="/produits/list">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Produits</span>
        </a>
      </li>

        <li>
            <a href="/categories/list">
              <span class="icon"><i class="mdi mdi-format-list-bulleted-type"></i></span>
              <span class="menu-item-label">Catégories</span>
            </a>
          </li>

      <li>
        <a href="/commandes">
          <span class="icon"><i class="mdi mdi-cart"></i></span>
          <span class="menu-item-label">Commandes</span>
        </a>
      </li>
      <li>
        <a href="/packs">
          <span class="icon"><i class="mdi mdi-package-variant"></i></span>
          <span class="menu-item-label">Packs</span>
        </a>
      </li>
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
      <li>Tableau de Bord </li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Tableau de Bord
    </h1>
  </div>
</section>

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Clients
              </h3>
              <h1>
                {{ $clients_count }}
              </h1>
            </div>
            <a href="/clients/list"><span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Commandes
              </h3>
              <h1>
                {{ $commandes_count }}
              </h1>
            </div>
            <a href="/medecins/list"><span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Médecins
              </h3>
              <h1>
                {{ $medecins_count }}
              </h1>
            </div>
            <a href="/medecins/list"><span class="icon widget-icon text-red-500"><i class="mdi mdi-doctor mdi-48px"></i></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Produits
              </h3>
              <h1>
                {{ $produits_count }}
              </h1>
            </div>
            <a href="/produits/list"><span class="icon widget-icon text-blue-500"><i class="mdi mdi-pill mdi-48px"></i></span></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Prouits Épuisés
              </h3>
              <h1>
                {{ $produits_epuises_count }}
              </h1>
            </div>
            <a href="/produits_epuises"><span class="icon widget-icon text-red-500"><i class="mdi mdi-alert-outline mdi-48px"></i></span></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Catégories
              </h3>
              <h1>
                {{ $category_count }}
              </h1>
            </div>
            <a href="/categories/list"> <span class="icon widget-icon text-green-500"><i class="mdi mdi-format-list-bulleted-type mdi-48px"></i></span></a>
          </div>
        </div>
      </div>
    </div>

 <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Nouveaux Messages
              </h3>
              <h1>
                {{ $notifications }}
              </h1>
            </div>
          <a href="/messages"> <span class="icon widget-icon text-blue-500"><i class="mdi mdi-bell mdi-48px"></i></span></a>
          </div>
        </div>
      </div>
<br>
    <div class="card has-table">
        <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-cart"></i></span>
            Commandes
        </p>
        {{-- <a href="#" class="card-header-icon">
            <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a> --}}
        </header>
        <div class="card-content">
            @if(count($commandes) > 0)
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Client</th>
                        <th>Date de la Commande</th>
                        <th>Adresse</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commandes as $commande)
                    <tr>
                        <td></td>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->client->nom }}</td>
                        <td>{{ $commande->date_commande }}</td>
                        <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $commande->client->adresse }}</td>
                        <td @if($commande->statut == "En attente") style="color: orange" @elseif($commande->statut == "Validée") style="color: green" @elseif($commande->statut == "Annulée") style="color: red" @endif>{{ $commande->statut }}</td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <a class="button small green --jb-modal" href="/commandes/details/{{ $commande->id }}">
                                    <span class="icon"><i class="mdi mdi-eye"></i></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="table-pagination">
                <div class="flex items-center justify-between">
                    <div class="buttons">
                        @if ($commandes_paginate->onFirstPage())
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-left"></span></button>
                        @else
                        <a href="{{ $commandes_paginate->previousPageUrl() }}" class="button"><span class="mdi mdi-chevron-left"></span></a>
                        @endif
                        @for ($i = 1; $i <= $commandes_paginate->lastPage(); $i++)
                        <button type="button" class="button @if ($commandes_paginate->currentPage() == $i) active @endif">{{ $i }}</button>
                        @endfor
                        @if ($commandes_paginate->hasMorePages())
                        <a href="{{ $commandes_paginate->nextPageUrl() }}" class="button"><span class="mdi mdi-chevron-right"></span></a>
                        @else
                        <button type="button" class="button disabled"><span class="mdi mdi-chevron-right"></span></button>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <table>
                <tr><td></td><td>Aucune commande disponible pour le moment.</td></tr>
            </table>
        @endif
        </div>
    </div>
    </div>

  </section>

<div id="sample-modal" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    {{-- <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Confirmer la Suppression</p>
      </header>
      <section class="modal-card-body">
        <p>Êtes-vous sûr de vouloir supprimer ce client ?</p>
      </section>
      <footer class="modal-card-foot">
        <button class="button --jb-modal-close">Annuler</button>
        {{-- <a class="button red --jb-modal-close" href="/clients/delete/{{$c->id}}">Confirmer</a>
      </footer>
    </div> --}}
  </div>

{{-- <div id="sample-modal" class="modal">
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
</div> --}}

{{--
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
</div> --}}

</div>
@endsection
