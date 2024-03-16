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
        <a href="index.html">
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
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          <span class="menu-item-label">Medecins</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Médicaments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="active">
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-medication"></i></span>
          <span class="menu-item-label">Compléments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="{{ route('complements.list') }}">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="{{ route('complements.form') }}">
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
      </li>
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
          <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
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
        <li>Packs Premiers Commandes</li>
      </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
        Packs Premiers Commandes
      </h1>
    </div>
</section>

<div class="card-content">

    <section class="section main-section">
      <div class="card mb-6">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-ballot"></i></span>
            Modifier Pack Premiers Commandes 
          </p>
        </header>
        <div class="card-content">
          <form method="post" action="/packs/update/{{$pack->id}}">
            @csrf
                <div class="field">
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Nom" name="nom" value="{{ $pack->nom }}">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Description" name="description">{{$pack->description}}</textarea>
                </div>
                </div>


                <div class="field">
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Prix" name="prix" value="{{$pack->prix}}">
                        <span class="icon left"><span class="mdi mdi-cash"></span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field">
                    <div class="field-body">
                      <div class="field">
                        <div class="control icons-left">
                          <input class="input" type="text" placeholder="Quantité en stock" name="qte_stock" value="{{ $pack->qte_en_stock }}">
                          <span class="icon left"><span class="mdi mdi-store"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="field">
                    <label class="label">Image</label>
                    <div class="field-body">
                      <div class="field file">
                        <label class="upload control">
                          <a class="button blue">
                            Télécharger
                          </a>
                          <input type="file" id="image" name="image" onchange="displayImageName()">
                        </label>
                      </div>
                      <div id="image-preview" style="margin-top: 10px;">
                        <img id="preview" src="" alt="Aperçu de l'image" style="max-width: 100px; max-height: 100px; display: none;">
                        <span id="image-name"></span>
                      </div>
                    </div>
                </div> 

                  <div class="field grouped">
                    <div class="control">
                      <button type="submit" class="button green">
                        Modifier
                      </button>
                    </div>
                    <div class="control">
                      <button type="reset" class="button red" onclick="annuler()">
                        Annuler
                      </button>
                      <script>
                          function annuler() {
                              window.location.href = '/packs/list';
                          };

                          function displayImageName() {
                               var input = document.getElementById('image');
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
  
                </form>
              </div>
            </div>
    </section>
</div>

@endsection