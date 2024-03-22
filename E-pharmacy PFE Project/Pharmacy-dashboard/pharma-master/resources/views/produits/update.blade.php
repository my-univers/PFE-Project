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
      <li class="active">
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

  <section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
          Modifier Produits
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
          <form method="post" action="/produits/update/{{ $produit->id }}" enctype="multipart/form-data">
              @csrf
            <div class="field">
              {{-- <label class="label">From</label> --}}
              <div class="field-body">
                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="text" id="nom" name="nom" placeholder="Nom" value="{{ $produit->nom }}">
                    <span class="icon left"><i class="mdi mdi-tag"></i></span>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <textarea class="textarea" id="description" name="descr" placeholder="Description">{{ $produit->descr }}</textarea>
                  </div>
                </div>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="control">
                      <div class="select">
                        <select name="categorie">
                            @foreach ($categories as $c)
                            <option value="{{ $c->id }}" @if($produit->categorie->id == $c->id) selected @endif>{{ $c->nom }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="number" id="prix" name="prix" placeholder="Prix" step="0.01" value="{{ $produit->prix }}">
                    <span class="icon left"><i class="mdi mdi-cash"></i></span>
                  </div>
                </div>
                <div class="field">
                  <div class="control icons-left">
                    <input class="input" type="number" id="qte_en_stock" name="qte_en_stock" placeholder="Quantité en stock" value="{{ $produit->qte_en_stock }}">
                    <span class="icon left"><i class="mdi mdi-store"></i></span>
                  </div>
                </div>
                <div class="field">
                    <label class="label">Ordonnance</label>
                    <div class="field-body">
                        <div class="field grouped multiline">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="ordonnance" value="1" @if($produit->ordonnance == 1) checked @endif>
                                    <span class="check"></span>
                                    <span class="control-label">Nécessaire</span>
                                </label>
                            </div>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="ordonnance" value="0" @if($produit->ordonnance == 0) checked @endif>
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
                              <input type="file" id="image" name="image" onchange="displayImagePreview()">
                          </label>
                      </div>
                      <div id="image-preview" style="margin-top: 10px;">
                          <img id="preview" src="{{ asset($produit->image_path) }}" alt="Aperçu de l'image" style="max-width: 100px; max-height: 100px; display: block;">
                          <span id="image-name">{{ basename($produit->image_path) }}</span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
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
                              window.location.href = '/produits/list';
                  };

                  function displayImagePreview() {
                                var input = document.getElementById('image');
                                var preview = document.getElementById('preview');
                                var imageName = document.getElementById('image-name');
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        preview.src = e.target.result;
                                        preview.style.display = "block"; // Ajout de cette ligne pour afficher l'aperçu de l'image
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                    imageName.innerText = input.files[0].name;
                                }
                           }
                </script>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

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
  </div>

  <!-- Scripts below are for demo only -->
  <script type="text/javascript" src="../../js/main.min.js?v=1628755089081"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <script type="text/javascript" src="../../js/chart.sample.min.js"></script>


  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '658339141622648');
    fbq('track', 'PageView');
  </script>

  @endsection
