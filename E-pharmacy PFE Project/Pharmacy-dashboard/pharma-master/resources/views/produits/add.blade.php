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
      <li class="active">
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
        <li>Produits </li>
      </ul>
    </div>
  </section>

  @include('sweetalert::alert')

  <section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
          Ajouter Produit
      </h1>
      <a class="button blue" href='/produits/list'>
        Retour
    </a>
    </div>
  </section>

  <section class="section main-section">
      <div class="card mb-6">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-pill"></i></span>
            Produit
          </p>
        </header>
        <div class="card-content">
          <form method="post" action="/produits/add" enctype="multipart/form-data">
              @csrf
            <div class="field">
              <div class="field-body">

                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="text" id="nom" name="nom" placeholder="Nom">
                    <span class="icon left"><i class="mdi mdi-tag"></i></span>
                  </div>
                </div>
                
                <div class="field">
                  <div class="control">
                    <textarea class="textarea" id="ingredients" name="ingredients" placeholder="Ingrédients"></textarea>
                  </div>
                </div>

                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="text" id="poids" name="poids" placeholder="Poids">
                    <span class="icon left"><i class="mdi mdi-weight-gram"></i></span>
                  </div>
                </div>

                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="number" id="prix" name="prix" placeholder="Prix" step="0.01">
                    <span class="icon left"><i class="mdi mdi-cash"></i></span>
                  </div>
                </div>

                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="number" id="qte_en_stock" name="qte_en_stock" placeholder="Quantité en stock">
                    <span class="icon left"><i class="mdi mdi-store"></i></span>
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <textarea class="textarea" id="description" name="descr" placeholder="Description"></textarea>
                  </div>
                </div>

                <div class="field">
                  <label class="label">Catégorie</label>
                  <div class="control">
                    <div class="select">
                      <select name="categorie">
                          @foreach ($categories as $c)
                          <option value="{{ $c->id }}">{{ $c->nom }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="field">
                    <label class="label">Ordonnance</label>
                    <div class="field-body">
                      <div class="field grouped multiline">
                        <div class="control">
                          <label class="radio">
                            <input type="radio" name="ordonnance" value="1">
                            <span class="check"></span>
                            <span class="control-label">Nécessaire</span>
                          </label>
                        </div>
                        <div class="control">
                          <label class="radio">
                            <input type="radio" name="ordonnance" value="0">
                            <span class="check"></span>
                            <span class="control-label">Facultative</span>
                          </label>
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
                <button type="reset" class="button red" onclick="resetForm()">
                  Annuler
                </button>
                <script>
                  function resetForm() {
                      document.getElementById('nom').value = "";
                      document.getElementById('description').value = "";
                      document.getElementById('prix').value = "";
                      document.getElementById('qte_en_stock').value = "";
                      document.getElementById('image').value = "";
                      document.getElementById('preview').style.display = "none";
                      document.getElementById('image-name').innerText = "";
                      document.getElementById('ordonnance').checked = false;
                  }

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
  @endsection
