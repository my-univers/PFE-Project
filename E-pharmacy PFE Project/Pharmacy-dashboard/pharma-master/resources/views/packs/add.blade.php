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
                <li class="active">
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
                <li>Packs</li>
            </ul>
        </div>
    </section>

    @include('sweetalert::alert')

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Ajouter Pack
            </h1>
            <a class="button blue" href='/packs'>
                Retour
            </a>
        </div>
    </section>


    <div class="card-content">

        <section class="section main-section">
            <div class="card mb-6">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-package-variant"></i></span>
                        Pack
                    </p>
                </header>
                <div class="card-content">

                    <form method="post" action="/packs/add" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control icons-left">
                                        <input class="input" type="text" placeholder="Nom" name="nom"
                                            autocomplete="off">
                                        <span class="icon left"><i class="mdi mdi-tag"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <textarea class="textarea" placeholder="Description" name="description"></textarea>
                            </div>
                        </div>


                        <div class="field">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control icons-left">
                                        <input class="input" type="number" placeholder="Quantité en stock"
                                            name="qte_en_stock" autocomplete="off">
                                        <span class="icon left"><span class="mdi mdi-store"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="field">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control icons-left">
                                        <select name="produit_id" class="input" multiple>
                                            @foreach ($produits as $produit)
                                                <option value="{{ $produit->id }}">{{ $produit->nom }}</option>
                                            @endforeach
                                        </select>
                                        <span class="icon left"><span class="mdi mdi-pill"></span></span>

                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <div class="field">
                            <label class="label">Image</label>
                            <div class="field-body">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue">
                                            Télécharger
                                        </a>
                                        <input type="file" id="image" name="image"
                                            onchange="displayImageName()">
                                    </label>
                                </div>
                                <div id="image-preview" style="margin-top: 10px;">
                                    <img id="preview" src="" alt="Aperçu de l'image"
                                        style="max-width: 100px; max-height: 100px; display: none;">
                                    <span id="image-name"></span>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Ajouter
                                </button>
                            </div>
                            <div class="control">
                                <button type="reset" class="button red" onclick="annuler()">
                                    Annuler
                                </button>
                                <script>
                                    function annuler() {
                                        window.location.href = '/packs';
                                    };

                                    function displayImageName() {
                                        var input = document.getElementById('image');
                                        var fileName = input.files[0].name;
                                        var preview = document.getElementById('preview');
                                        var imageName = document.getElementById('image-name');
                                        preview.src = URL.createObjectURL(input.files[0]);
                                        preview.style.display = "block";
                                        imageName.innerText = fileName;
                                    };
                                </script>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


    </div>
    </div>


    <div id="sample-modal" class="modal">
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
    </div>
    </div>
@endsection
