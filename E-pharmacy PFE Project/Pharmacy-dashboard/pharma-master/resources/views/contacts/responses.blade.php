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

@include('sweetalert::alert')

    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Réponses</li>
            </ul>
        </div>
    </section>


    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Réponses
            </h1>
            <a href="/messages" class="button blue">
                <span>Retour</span>
            </a>
        </div>
    </section>


    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-message"></i></span>
                    Messages
                </p>
            </header>

            <div class="card-content">
                <form method="post" action="/messages/reply">
                    @csrf

                    <input type="hidden" name="message_id" value="{{ $message->id }}">


                    <div class="field">
                        <div class="field-body">

                            <div class="field">
                                <div class="field-body">

                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="email" name="email" readonly
                                                value="{{ $message->email }}">
                                            <span class="icon left"><i class="mdi mdi-mail"></i></span>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="field">
                                        <div class="control">
                                            <textarea class="textarea" name="body" placeholder="Message" id="message"></textarea>
                                        </div>
                                    </div>

                                    <hr>


                                    <div class="field">
                                        <div class="field grouped">
                                            <div class="control">
                                                <button type="submit" class="button green" onclick="submitForm()"
                                                    data-target="sample-modal">
                                                    Envoyer
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </form>


                <script>
                    function submitForm() {
                        var message = document.getElementById('message').value;
                        if (message == "") {
                            alert('Veuillez saisir un message')
                        }
                    }


                </script>


            </div>
        </div>
    </section>
@endsection
