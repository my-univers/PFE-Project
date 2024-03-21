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
                <li>
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
                </li>
                <li>
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
                <li class="active">
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
                <li>Packs Produits</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Liste des Packs Produits
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><span class="mdi mdi-medical-bag"></span></span>
                    Packs Produits
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
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($list_packs as $p)
                            <tr>
                                <td></td>
                                <td>{{ $p->packs->nom }}</td>
                                <td>{{ $p->packs->description }}</td>
                                <td>{{ $p->packs->prix }} DH</td>
                                <td>{{ $p->packs->qte_en_stock }}</td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a class="button small green --jb-modal" href="/packs_produits/updateForm/{{$p->packs->id}}">
                                            <span class="icon"><i class="mdi mdi-pencil"></i></span>
                                        </a>
                                        <button class="button small red --jb-modal"
                                            data-target="sample-modal-{{ $p->packs->id }}" type="button">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                        <a class="button small blue "
                                           href="/packs_produits/details/{{ $p->packs->id }}">
                                           <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <div id="sample-modal-{{ $p->packs->id }}" class="modal">
                                <div class="modal-background --jb-modal-close"></div>
                                <div class="modal-card">
                                    <header class="modal-card-head">
                                        <p class="modal-card-title">Confirmation de Suppression</p>
                                    </header>
                                    <section class="modal-card-body">
                                        <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
                                        <p> Cette action est irréversible.</p>
                                    </section>

                                    <footer class="modal-card-foot">
                                        <button class="button --jb-modal-close">Annuler</button>
                                        <script>
                                            function annuler() {
                                                window.location.href = '/packs_produits/list';
                                            };
                                        </script>
                                        <a class="button red --jb-modal-close"
                                            href="/packs_produits/delete/{{ $p->packs->id }}">Confirmer</a>
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
@endsection
