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
                    <table class="is-striped" id="clients-table">
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
                    <div class="table-pagination" id="clients-pagination">
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
                    <table class="is-striped" id="produits-table">
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
                    <div class="table-pagination" id="produits-pagination">
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
                    <table class="is-striped" id="packs-table">
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
                    <div class="table-pagination" id="packs-pagination">
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
            <!-- Champs cachés pour stocker les éléments séléctionnés -->
            <input type="hidden" name="selected_items[]" id="elements-selectionnes">
            <div class="field grouped">
                <div class="control">
                    <button type="submit" id="submit-form" class="button green" onclick="ajouterChampQuantite()">
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
      </div>
    </div>
</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Objet pour stocker les éléments sélectionnés
        var selectedItems = {};
        var quantities = {};

        // Gérer la sélection des éléments
        $(document).on('change', 'input[type="checkbox"]', function() {
            var itemId = $(this).val();
            var isChecked = $(this).is(':checked');
            if (isChecked) {
                $(this).closest('tr').addClass('selected'); // Ajouter une classe pour marquer la sélection visuellement
                // Ajouter l'identifiant unique au champ caché du formulaire
                $('<input>').attr({
                    type: 'hidden',
                    name: 'selected_items[]',
                    value: itemId
                }).appendTo('form');
                selectedItems[itemId] = true;
            } else {
                $(this).closest('tr').removeClass('selected'); // Retirer la classe de sélection
                // Supprimer l'entrée du champ caché associée à cet élément
                $('input[name="selected_items[]"][value="' + itemId + '"]').remove();
                delete selectedItems[itemId];
            }
        });
        // $(document).on('change', 'input[type="checkbox"]', function() {
        //     var itemId = $(this).val();
        //     var isChecked = $(this).is(':checked');
        //     if (isChecked) {
        //         $(this).closest('tr').addClass('selected'); // Ajouter une classe pour marquer la sélection visuellement
        //         selectedItems[itemId] = true;
        //     } else {
        //         $(this).closest('tr').removeClass('selected'); // Retirer la classe de sélection
        //         delete selectedItems[itemId];
        //     }
        // });

        // Gérer les quantités saisies
        $(document).on('input', 'input[type="number"]', function() {
            var itemId = $(this).closest('tr').find('input[type="checkbox"]').val();
            var quantity = $(this).val();
            quantities[itemId] = quantity;
        });

        // Pagination pour les clients
        $(document).on('click', '#clients-pagination .button', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var targetTable = $('#clients-table');
            var targetPagination = $('#clients-pagination');

            // Requête AJAX pour obtenir le nouveau contenu paginé pour les clients
            $.get(url, function(data) {
                var newTable = $(data).find('#clients-table').html();
                var newPagination = $(data).find('#clients-pagination').html();
                $(targetTable).html(newTable);
                $(targetPagination).html(newPagination);

                // Rétablir les sélections après le chargement du contenu paginé
                restoreSelections(targetTable);
                restoreQuantities(targetTable);
            });
        });

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

                // Rétablir les sélections après le chargement du contenu paginé
                restoreSelections(targetTable);
                restoreQuantities(targetTable);
            });
        });

        // Pagination pour les packs
        $(document).on('click', '#packs-pagination .button', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            var targetTable = $('#packs-table');
            var targetPagination = $('#packs-pagination');

            // Requête AJAX pour obtenir le nouveau contenu paginé pour les packs
            $.get(url, function(data) {
                var newTable = $(data).find('#packs-table').html();
                var newPagination = $(data).find('#packs-pagination').html();
                $(targetTable).html(newTable);
                $(targetPagination).html(newPagination);

                // Rétablir les sélections après le chargement du contenu paginé
                restoreSelections(targetTable);
                restoreQuantities(targetTable);
            });
        });

        // Fonction pour rétablir les sélections après le chargement du contenu paginé
        function restoreSelections(table) {
            $(table).find('input[type="checkbox"]').each(function() {
                var itemId = $(this).val();
                if (selectedItems[itemId]) {
                    $(this).prop('checked', true);
                }
            });
        }

        // Fonction pour rétablir les quantités saisies après le chargement du contenu paginé
        function restoreQuantities(table) {
            $(table).find('input[type="number"]').each(function() {
                var itemId = $(this).closest('tr').find('input[type="checkbox"]').val();
                if (quantities[itemId]) {
                    $(this).val(quantities[itemId]);
                }
            });
        }

        // Soumission du formulaire
        $('#submit-form').click(function() {
            // Réinitialiser le champ caché des éléments sélectionnés
            $('input[name="selected_items[]"]').remove();
            // Ajouter les éléments sélectionnés au champ caché
            for (var itemId in selectedItems) {
                $('<input>').attr({
                    type: 'hidden',
                    name: 'selected_items[]',
                    value: itemId
                }).appendTo('form');
            }
            // Soumettre le formulaire normalement
            $('form').submit();
        });
    });
</script>


@endsection


