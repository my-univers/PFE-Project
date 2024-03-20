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
        <li>
          <a href="/dashboard">
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
        <li>
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
        <li class="active">
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
        {{-- <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
            <span class="menu-item-label">Packs Premiers Secours</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="/packs_premiers_secours">
                <span>Liste</span>
              </a>
            </li>
            <li>
              <a href="/packs_premiers_secours/form">
                <span>Ajout</span>
              </a>
            </li>
          </ul>
        </li> --}}
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
        Liste des Commandes
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-cart"></i></span>
          Commandes
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th></th>
            <th>#</th>
            <th>Client</th>
            <th>Date Commande</th>
            <th>Adresse</th>
            <th>Statut</th>
            <th>Total</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($commandes as $c)
            <tr>
                <td></td>
                <td>{{ $c->id }}</td>
                <td>{{ $c->client->nom }}</td>
                <td>{{ $c->client->adresse }}</td>
                <td>{{ $c->date_commande }}</td>
                <td>{{ $c->client->adresse }}</td>
                <td
                    @if ($c->statut == "En attente")
                        style="color:orange;"
                    @elseif( $c->statut == "Validée")
                        style="color:green;"
                    @elseif( $c->statut == "Annulée")
                        style="color:red;"
                    @endif
                >
                    {{ $c->statut }}
                </td>
                <td>{{ $c->total }} DH</td>
                <td class="actions-cell">
                    <div class="buttons right nowrap">
                        @if ($c->statut == "En attente")
                        <a class="button small green --jb-modal" title="Valider la commande" href="/commandes/valider/{{$c->id}}">
                            <span class="icon"><i class="mdi mdi-check-bold"></i></span>
                        </a>
                        @endif

                        <a class="button small blue --jb-modal" href="/commandes/details/{{$c->id}}">
                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                        </a>

                        @if ($c->statut == "En attente" || $c->statut == "Validée")
                        <button class="button small red" onclick="confirmerAnnulation({{ $c->id }})">
                            <span class="icon"><i class="mdi mdi-close"></i></span>
                        </button>
                        @endif

                        {{-- <div id="sample-modal" class="modal">
                            <div class="modal-background --jb-modal-close"></div>
                            <div class="modal-card">
                              <header class="modal-card-head">
                                <p class="modal-card-title">Confirmer l'annulation</p>
                              </header>
                              <section class="modal-card-body">
                                <p>Êtes-vous sûr de vouloir annuler cette commande ?</p>
                                <p>Cette action est irréversible</p>
                              </section>
                              <footer class="modal-card-foot">
                                <button class="button --jb-modal-close">Annuler</button>
                                <a class="button red --jb-modal-close" href="/commandes/cancel/{{$c->id}}">Confirmer</a>
                              </footer>
                            </div>
                        </div> --}}
                        <script>
                            function confirmerAnnulation(commandeId) {
                                if (confirm("Êtes-vous sûr de vouloir annuler cette commande ?")) {
                                    // Si l'utilisateur confirme, rediriger vers l'URL d'annulation de la commande
                                    window.location.href = '/commandes/cancel/' + commandeId;
                                }
                            }
                        </script>
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

  {{-- <script>
    document.querySelectorAll('.button.red.--jb-modal-close').forEach(button => {
    button.addEventListener('click', function(event) {
            event.preventDefault();
            const commandeId = this.getAttribute('data-commande-id');
            const confirmationUrl = `/commandes/cancel/${commandeId}`;
            window.location.href = confirmationUrl;
        });
    });
  </script> --}}

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
