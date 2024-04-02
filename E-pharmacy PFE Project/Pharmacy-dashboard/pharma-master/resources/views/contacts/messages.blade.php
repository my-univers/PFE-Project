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
                <li class="active">
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
                <li>Messages</li>
            </ul>
        </div>
    </section>

    @include('sweetalert::alert')

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Liste des Messages
            </h1>
        </div>
    </section>


    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><span class="mdi mdi-message"></span></span>
                    Messages
                </p>
                <form action="/messages/" method="get" class="card-header-icon" id="filterForm">
                    <span>
                        <label class="label">Filtrer par</label>
                    </span>
                    &nbsp; &nbsp;
                    <span>
                        <div class="field">
                            <div class="control">
                                <div class="select">
                                    <select name="messagesFilter" onchange="this.form.submit()">
                                        <option value="Tous" @if($filter == 'Tous') selected @endif>Tous</option>
                                        <option value="Lus" @if($filter == 'Lus') selected @endif>Lus</option>
                                        <option value="Non Lus" @if($filter == 'Non Lus') selected @endif>Non Lus</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </span>
                </form>

                <script>
                    function submitForm() {
                        document.getElementById("filterForm").submit();
                    }
                </script>
            </header>
            <div class="card-content">
                @if ($messages->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col" style="width: 350px">Message</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <td></td>
                                    <td scope="row">{{ $message->nom }}</td>
                                    <td>{{ $message->prenom }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td style="max-width: 350px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $message->message }}</td>

                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            @if ($message->is_read != 1)
                                                <a class="button small green --jb-modal"
                                                href="/messages/showForm/{{ $message->id }}">
                                                <span class="icon"><i class="mdi mdi-reply"></i></span>
                                            </a>
                                            @endif
                                            <button class="button small red --jb-modal"
                                                data-target="sample-modal-{{ $message->id }}" type="button">
                                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <div id="sample-modal-{{ $message->id }}" class="modal">
                                    <div class="modal-background --jb-modal-close"></div>
                                    <div class="modal-card">
                                        <header class="modal-card-head">
                                            <p class="modal-card-title">Confirmer la Suppression</p>
                                        </header>
                                        <section class="modal-card-body">
                                            <p>Êtes-vous sûr de vouloir annuler ce message ?</p>
                                        </section>
                                        <footer class="modal-card-foot">
                                            <button class="button --jb-modal-close">Annuler</button>
                                            <a class="button red --jb-modal-close"
                                                href="/messages/delete/{{ $message->id }}">Confirmer</a>
                                        </footer>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-pagination">
                        <div class="flex items-center justify-between">
                            <div class="buttons">
                                @if ($messages->onFirstPage())
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-left"></span></button>
                                @else
                                    <a href="{{ $messages->previousPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-left"></span></a>
                                @endif

                                @for ($i = 1; $i <= $messages->lastPage(); $i++)
                                    <button type="button"
                                        class="button @if ($messages->currentPage() == $i) active @endif">{{ $i }}</button>
                                @endfor

                                @if ($messages->hasMorePages())
                                    <a href="{{ $messages->nextPageUrl() }}" class="button"><span
                                            class="mdi mdi-chevron-right"></span></a>
                                @else
                                    <button type="button" class="button disabled"><span
                                            class="mdi mdi-chevron-right"></span></button>
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    <table>
                        <tr>
                            <td></td>
                            <td>Aucun message disponible pour le moment.</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </section>
@endsection
