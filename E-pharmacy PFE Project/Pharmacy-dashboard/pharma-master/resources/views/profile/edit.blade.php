@extends('master')

@section('content')

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

  <section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <ul>
        <li>Admin</li>
        <li>Profile</li>
      </ul>
    </div>
  </section>

  <section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
        Profile
      </h1>
    </div>
  </section>

    <section class="section main-section">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-circle"></i></span>
              Modifier Profile
            </p>
          </header>
          <div class="card-content">
            <form method="POST" action="/profil/edit" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label">Photo</label>
                    <div class="field-body">
                        <div class="field file">
                            <label class="upload control">
                                <a class="button blue">
                                    Télécharger
                                </a>
                                <input type="file" name="photo" onchange="displayImageName()">
                                @error('photo')
                                <p class="help">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div id="image-preview" style="margin-top: 10px;">
                            <img id="preview" src="" alt="Aperçu de l'image" style="max-width: 100px; max-height: 100px; display: none;">
                            <span id="image-name"></span>
                        </div>
                        <script>
                            function displayImageName() {
                                var input = document.querySelector('input[name="photo"]');
                                var fileName = input.files[0].name;
                                var preview = document.getElementById('preview');
                                var imageName = document.getElementById('image-name');
                                preview.src = URL.createObjectURL(input.files[0]);
                                preview.style.display = "block";
                                imageName.innerText = fileName;
                            }
                        </script>
                    </div>
                </div>
              <hr>
              <div class="field">
                <label class="label">Username</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input type="text" autocomplete="on" name="username" value="{{ $admin->username }}" class="input" required>
                        </div>
                        <p class="help">Requis. Votre nom d'utilisateur</p>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">E-mail</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input type="email" autocomplete="on" name="email" value="{{ $admin->email }}" class="input" required>
                        </div>
                        <p class="help">Requis. Votre adresse e-mail</p>
                    </div>
                </div>
            </div>
            <hr>
              <div class="field">
                <div class="control">
                  <button type="submit" class="button green">
                    Enregistrer
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              Profile
            </p>
          </header>
          <div class="card-content">
            <div class="image w-48 h-48 mx-auto">
              <img src="{{ asset($admin->photo) }}" alt="{{ $admin->username }}" class="rounded-full">
            </div>
            <hr>
            <div class="field">
              <label class="label">Username</label>
              <div class="control">
                <input type="text" readonly value="{{ $admin->username }}" class="input is-static">
              </div>
            </div>
            <hr>
            <div class="field">
              <label class="label">E-mail</label>
              <div class="control">
                <input type="text" readonly value="{{ $admin->email }}" class="input is-static">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-lock"></i></span>
            Changer Mot de Passe
          </p>
        </header>
        <div class="card-content">
          <form action="/profil/editPassword" method="POST">
            @csrf
            <div class="field">
              <label class="label">Mot de Passe Actuel</label>
              <div class="control">
                <input type="password" name="mdp_actuel" autocomplete="current-password" class="input" required>
              </div>
              @error('mdp_actuel')
              <p class="help" style="color: red">{{ $message }}</p>
              @enderror
            </div>
            <hr>
            <div class="field">
              <label class="label">Nouveau Mot de Passe</label>
              <div class="control">
                <input type="password" autocomplete="new-password" name="nv_mdp" class="input" required>
              </div>
            </div>
            @error('nv_mdp')
            <p class="help" style="color: red">{{ $message }}</p>
            @enderror
            <div class="field">
              <label class="label">Confirmer Mot de Passe</label>
              <div class="control">
                <input type="password" autocomplete="new-password" name="confirm_mdp" class="input" required>
              </div>
              @error('confirm_mdp')
              <p class="help" style="color: red">{{ $message }}</p>
              @enderror
            </div>
            <hr>
            <div class="field">
              <div class="control">
                <button type="submit" class="button green">
                  Enregistrer
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
</div>

@endsection
